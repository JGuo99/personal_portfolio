<?php
    $trigger = true;
    $status;
    // Upload Image via File System
    function uploadImg($img, $cat, $id, $conn){
        if(!empty($_FILES[$img]["name"])) {
            // Get the information from the file
            $file = $_FILES[$img];
            $fileName = $_FILES[$img]['name'];  // Name of the file
            $fileTmpName = $_FILES[$img]['tmp_name'];   // Temp location of the file
            $fileError = $_FILES[$img]['error'];    // Error - if occured!

            $fileExt = explode('.', $fileName); // Seperate the extention from file name
            $fileActualExt = strtolower(end($fileExt));
            /* Another way to sepereate extention: 
                $fileName = basename($_FILES["proj-image"]["name"]);
                $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
            */

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
                // Default -1 (zlib compression) - NOTE Quality Does NOT Change!
                // imagepng($thumb, $fileTmpName, 9); // Large File Size compared to JPEG

                if($fileError == 0) {   // If there is NO error!
                    $fileSize = filesize($fileTmpName);
                    if($fileSize < 1000000) {  // 1mb or lower
                        // Create Unique ID to avoid rewriting - Creates Unique ID based on millisecond
                        // $fileNameNew = uniqid('', true).".".$fileActualExt;   // Does not work for matching                    
                        $fileNameNew = $cat.$id.".".$fileActualExt;
                        // Upload Image Infomation to DB (Path, Type, Category, ...)
                        $sql = $conn->prepare("INSERT INTO images(pid, type, category)
                                            VALUE ('$id', '$fileActualExt', '$cat')");
                        $sql->execute();
                        // Path to where we want to upload
                        $fileDestination = '../../../uploads/'.$fileNameNew;
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
        }
    }
?>