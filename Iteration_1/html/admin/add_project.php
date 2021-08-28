<!-- https://www.youtube.com/watch?v=NXAHkqiIepc -->
<!-- https://www.youtube.com/watch?v=Z9aePaXve6s -->
<!-- https://www.youtube.com/watch?v=PKavJvVFNDA -->

<?php
// Connection to DB
    // session_start();
    // $con = mysqli_connect('localhost', 'root', '');
    // mysqli_select_db($con, 'projects');

    require_once "config.php";

// Form to PHP Variable Connection
    $name = $_POST['proj-name'];
    // $id = $_POST['proj-id'];
    $cat = $_POST['proj-cat'];
    $link = $_POST['proj-link'];
    $edit = $_POST['last-edit'];

// Uploading Image
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
            $imgContent = addslashes(file_get_contents($image)); 
            
            // Insert image content into "thumbnail" table in freelance db
            $insertImg = "INSERT INTO thumbnail (image) VALUES ('$imgContent')";
            // mysqli_query($con, $insertImg);
                
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

    // Query Prepping
    // $s = "SELECT * FROM freelance WHERE id = '$id'";
    // $result = mysqli_query($con, $s);
    // $num = mysqli_num_rows($result);

// Other Contents
    if($trigger || $cat == null) {
        if($cat == null) {            
            echo '<script language="javascript">';
            echo 'if(confirm("FAILED: Category is Empty!")){window.location = "../crud.php";}';
            echo '</script>';
        }
        echo '<br>';
        if($trigger) {
            echo '<script language="javascript">';
            echo 'if(confirm("FAILED: '. $statusMsg .'")){window.location = "../crud.php";}';
            echo 'myWindow.close();';
            echo '</script>';
        }
    } else {
        $new_info = $conn->prepare("INSERT INTO freelance(name, category, link, last_edit) 
                                   VALUES ('$name', '$cat', '$link', '$edit')");
        $new_img = $conn->prepare($insertImg);
        $new_info->execute();
        $new_img->execute();
    
        // MySQLi Version
        // mysqli_query($con, $new_proj);
        // mysqli_query($con, $insertImg);
        echo '<script language="javascript">';
        echo 'if(confirm("Project Added Successfully!")){window.location = "../crud.php";}';
        echo '</script>';  
    }
?>