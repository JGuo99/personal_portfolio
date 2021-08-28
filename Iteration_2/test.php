<html>
<head>
    <title>PHP Reanme Image</title>
</head>
<body>

    <form action="test.php" enctype="multipart/form-data" method="post">
        Enter Path Name :
        <input type="text" name="file"><br />
        Enter image new name :<input type="text" name="filename"><br />
        <input type="submit" value="Upload" name="Submit1">
    </form>

    <?php
        require_once "html/admin/config.php";
        if(isset($_POST['Submit1'])) {
            // $extension = pathinfo($_POST["file"], PATHINFO_EXTENSION);
            // $oldName = $_POST["file"];
            // $newName = "uploads/".$_POST["filename"].".".$extension;
            // rename($oldName, $newName);
            // echo "Path Info = " . $oldName . "<br>";
            // echo "New Image Name = " . $newName;
            // Delete Image File
            $sql = "SELECT * FROM images
            WHERE pid = 15";
            $data = $conn->prepare($sql);
            $data->execute();
            $result = $data->fetch();
            print_r($result);
            $path = "uploads/database.png";
            if(file_exists($path)) {
                unlink($path);
            }
        }
        
    ?>
</body>
</html>