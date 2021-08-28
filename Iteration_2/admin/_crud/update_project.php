<?php
    require_once "../scripts/config.php";
    
    function addHttp($link) {
        if(!preg_match("~^(?:f|ht)tps?://~i", $link)) {
            $link = "http://" . $link;
        }
        return $link;
    }

    function updateImg($img, $oldCat, $cat, $updateID, $oldType, $conn) {
        $trigger = true;
        $status;
        if(!empty($_FILES[$img]["name"])) {  
            // Check If Old Image Exists
            $path = "../../uploads/".$oldCat.$updateID.".".$oldType;
            // print_r($path);
            if(file_exists($path)) {
                // Delete Old Image File
                unlink($path);
            }          
            // Update New Image
            // Get the information from the file
            $file = $_FILES[$img];
            $fileName = $_FILES[$img]['name'];  // Name of the file
            $fileTmpName = $_FILES[$img]['tmp_name'];   // Temp location of the file
            $fileError = $_FILES[$img]['error'];    // Error - if occured!
            $fileActualExt = pathinfo($fileName, PATHINFO_EXTENSION);

            $allowTypes = array('jpg','png','jpeg','gif');
            if(in_array($fileActualExt, $allowTypes)) {
                // Image Compression
                list($width, $height, $type) = getimagesize($fileTmpName);
                $newWidth = 720;    // Intrinsic size
                $newHeight = round($height/($width/$newWidth)); // Maintain Original Aspect Ratio
                $thumb = imagecreatetruecolor($newWidth, $newHeight);
                // Check for image type
                if($type == IMAGETYPE_JPEG) {
                    $source = imagecreatefromjpeg($fileTmpName);
                } else if($type == IMAGETYPE_PNG) {
                    $source = imagecreatefrompng($fileTmpName);
                } else if($type == IMAGETYPE_GIF) {
                    $source = imagecreatefromgif($fileTmpName);
                }
                imagecopyresized($thumb, $source, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
                imagejpeg($thumb, $fileTmpName, 100);  // Default Quality - 75

                if($fileError == 0) {   // If there is NO error!
                    $fileSize = filesize($fileTmpName);
                    if($fileSize < 1000000) {  // 1mb or lower
                        $fileNameNew = $cat.$updateID.".".$fileActualExt;
                        // Update Image Infomation to DB (Path, Type, Category, ...)
                        $sql = $conn->prepare("UPDATE images
                                            SET category = '$cat', type = '$fileActualExt'
                                            WHERE pid = $updateID");
                        $sql->execute();
                        // Path to where we want to upload
                        $fileDestination = '../../uploads/'.$fileNameNew;
                        // Move file from temp location to destination
                        move_uploaded_file($fileTmpName, $fileDestination);
                        // header("Location: ../crud.php?uploadsucess");
                        $trigger = false;
                    } else {
                        $status = "FAILED: File is too large!";
                    }
                } else {
                    $status = "FAILED: ERROR found while uploading!";
                }
            } else {
                $status = "FAILED: Please only upload JPG, JPEG, PNG, & GIF files.";
            }
            if($trigger) {
                print_r($status);
            }
        } else {
            // print_r($img."<br>");
            print_r("No New Image Detected!");
        }
    }

    if(isset($_POST['update-btn'])) {
        if(isset($_POST['update'])) {
            foreach($_POST['update'] as $updateID) {
                // Get Information From Form
                $name = $_POST["proj-name_".$updateID];
                $cat = $_POST["proj-cat_".$updateID];
                $date = $_POST["proj-date_".$updateID];
                $link = $_POST["proj-link_".$updateID];
                // Get Old Data
                $sql = "SELECT * FROM projects, images
                        WHERE projects.id = $updateID
                        AND projects.id = images.pid";
                $data = $conn->prepare($sql);
                $data->execute();
                $result = $data->fetch();
                $oldCat = $result[4];
                $oldType = $result[7];

                // For checking https
                $url = addHttp($link);
                if($name != '' && $cat != '' && $date !='' && $url !='') {
                    if($cat != $oldCat) {                        
                        // Rename Image - Since Image Didn't Change, Type Stays The Same
                        $oldName = "../../uploads/".$oldCat.$updateID.".".$oldType;
                        $newName = "../../uploads/".$cat.$updateID.".".$oldType;
                        rename($oldName, $newName);
                        // Update Image Data
                        $uiSQL = "UPDATE images
                        SET category = '$cat'
                        WHERE pid = $updateID";
                        $data = $conn->prepare($uiSQL);
                        $data->execute();
                    }
                    // Update New Image
                    $img = 'proj-image_'.$updateID;
                    updateImg($img, $oldCat, $cat, $updateID, $oldType, $conn);
                    // Update Project Data
                    $upSQL = "UPDATE projects
                            SET name = '$name', category = '$cat', last_edit = '$date', link = '$url'
                            WHERE id = $updateID";
                    $data = $conn->prepare($upSQL);
                    $data->execute();
                    echo '<script language="javascript">';
                    echo 'if(confirm("Project Updated Successfully!")){window.location = "crud.php";}';
                    echo '</script>';                    
                }
            }
        } else {
            echo '<script language="javascript">';
            echo 'if(confirm("Please Select A Project To Be Updated!")){window.location = "crud.php";}';
            echo '</script>';
        }
    }
    // header("Location:crud.php");
?>