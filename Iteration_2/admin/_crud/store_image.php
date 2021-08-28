<!-- Code below is not NOT USED -->
<?php
    require_once "../scripts/config.php";

    // Get the project ID
    $id = $_SESSION['id'];


    if(isset($_POST[]'submit')) {   // If the button is pressed
        // Get the information from the file
        $file = $_FILES['proj-image'];
        $fileName = $_FILES['proj-image']['name'];  // Name of the file
        $fileTmpName = $_FILES['proj-image']['tmp_name'];   // Temp location of the file
        $fileSize = $_FILES['proj-image']['size'];  // Size of the file
        $fileError = $_FILES['proj-image']['error'];    // Error - if occured!
        $fileType = $_FILES['proj-image']['type'];  // Type of the file (png, jpeg, gif, ...)

        $fileExt = explode('.', $fileName); // Seperate the extention from file name
        $fileActualExt = strtolower(end($fileExt));
        /* Another way to sepereate extention: 
            $fileName = basename($_FILES["proj-image"]["name"]);
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        */
        $allowTypes = array('jpg','png','jpeg','gif');

        if(in_array($fileActualExt, $allowTypes)) {
            if($fileError == 0) {   // If there is NO error!
                if($fileSize < 500000) {  // 500kb or lower
                    // Create Unique ID to avoid rewriting - Creates Unique ID based on millisecond
                    // $fileNameNew = uniqid('', true).".".$fileActualExt;   // Does not work for matching
                    $fileNameNew = "project".$id.".".$fileActualExt;
                    // Path to where we want to upload
                    $fileDestination = 'uploads/'.$$fileNameNew
                    // Move file from temp location to destination
                    move_uploaded_file($fileTmpName, $fileDestination);
                    // header("Location: ../crud.php?uploadsucess");
                } else {
                    echo "FAILED: File is too large!"
                }
            } else {
                echo "FAILED: ERROR found while uploading!"
            }
        } else {
            echo "FAILED: Please only upload JPG, JPEG, PNG, & GIF files."
        }
    }
?>