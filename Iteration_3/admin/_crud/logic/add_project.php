<!-- https://www.youtube.com/watch?v=NXAHkqiIepc -->
<!-- https://www.youtube.com/watch?v=Z9aePaXve6s -->
<!-- https://www.youtube.com/watch?v=PKavJvVFNDA -->

<!-- Must enable php_gd2.dll or gd or gd2 (depending on the web server)
     for image modification to work! -->
<?php
    require_once "config.php";
    require_once "upload_image.php";

// Form to PHP Variable Connection
    $name = $_POST['proj-name'];
    // $id = $_POST['proj-id'];
    $cat = $_POST['proj-cat'];
    $link = $_POST['proj-link'];
    $edit = $_POST['last-edit'];
    $img = 'proj-image';    // Name

    // For checking https
    function addHttp($link) {
        if(!preg_match("~^(?:f|ht)tps?://~i", $link)) {
            $link = "http://" . $link;
        }
        return $link;
    }

    $url = addHttp($link);
        
    $id;
    if($cat == null) {                  
        echo '<script language="javascript">';
        echo 'if(confirm("FAILED: Category is Empty!")){window.location = "../crud.php";}';
        echo '</script>';        
    } else {
        // Insert Data
        $new_info = $conn->prepare("INSERT INTO projects (name, link, last_edit, category) 
                                   VALUES ('$name', '$url', '$edit', '$cat')");
        $new_info->execute();
        $id = $conn->lastInsertID();    // Get the last inserted project ID
        uploadImg($img, $cat, $id, $conn);
        echo '<script language="javascript">';
        echo 'if(confirm("Project Added Successfully!")){window.location = "../crud.php";}';
        echo '</script>';  
    }

/* ALTERNATIVE: Uploading Image as Blob (NOT the best method!)
    $status = $statusMsg = '';
    $trigger = true;
    $status = 'error'; 
    if(!empty($_FILES["proj-image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["proj-image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
            
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['proj-image']['tmp_name'];
            // Image Compression
            list($width, $height, $type) = getimagesize($image);
            // No point increasing this value becuase of how the thumbnail 
            // is presented, it will never hit 720p
            $newWidth = 720;    // Intrinsic size
            $newHeight = round($height/($width/$newWidth)); // Maintain Original Aspect Ratio
            $thumb = imagecreatetruecolor($newWidth, $newHeight);
            // Check for image type
            if($type == IMAGETYPE_JPEG) {
                $source = imagecreatefromjpeg($image);
            }
            else if($type == IMAGETYPE_PNG) {
                $source = imagecreatefrompng($image);
            } else if($type == IMAGETYPE_GIF) {
                $source = imagecreatefromgif($image);
            }

            imagecopyresized($thumb, $source, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
            imagejpeg($thumb, $image, 100);  // Default Quality - 75
            
            // Debugger
            // $imgInfo = getimagesize($image);
            // print_r($imgInfo);  

            $imgContent = addslashes(file_get_contents($image)); 
            
            // Insert image content into "thumbnail" table in freelance db
            $insertImg = "INSERT INTO thumbnail (image) VALUES ('$imgContent')";
                
            if($insertImg){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully.";
                $trigger = false;
            }else{ 
                $statusMsg = "File upload failed, please try again.";
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.';
    }

// Other Contents
    if($trigger || $cat == null) {
        if($cat == null) {            
            echo '<script language="javascript">';
            echo 'if(confirm("FAILED: Category is Empty!")){window.location = "../crud.php";}';
            echo '</script>';
        }
        echo '<br>';
        if($trigger) {
            // echo '<script language="javascript">';
            // echo 'if(confirm("FAILED: '. $statusMsg .'")){window.location = "../crud.php";}';
            // echo 'myWindow.close();';
            // echo '</script>';
        }
    } else {
        // Insert Data
        $new_info = $conn->prepare("INSERT INTO freelance(name, category, link, last_edit) 
                                   VALUES ('$name', '$cat', '$link', '$edit')");
        $new_info->execute();
        // Insert Img
        // $new_img = $conn->prepare($insertImg);
        // $new_img->execute();
    
        echo '<script language="javascript">';
        echo 'if(confirm("Project Added Successfully!")){window.location = "../crud.php";}';
        echo '</script>';  
    }
    */
?>