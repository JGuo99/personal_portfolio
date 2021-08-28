<!-- 
    Make sure the child table has a foreign key reference to
    the parent table and ON DELETE CASCADE is set...
        ALTER TABLE child_table_name 
        ADD CONSTRAINT fk_name 
        FOREIGN KEY (child_column_name) 
        REFERENCES parent_table_name(parent_column_name) 
        ON DELETE CASCADE;
-->
<?php
    require_once "../scripts/config.php";
    $rowCount = count($_POST["checked"]);
    for($i = 0; $i < $rowCount; $i++) {
        $deleteID = $_POST["checked"][$i];
        // Delete Project Data
        $sql = "DELETE FROM projects 
                WHERE id = $deleteID";
        $data = $conn->prepare($sql);
        $data->execute();
        // Delete Image File
        $sql = "SELECT * FROM images
                WHERE pid = $deleteID";
        $data = $conn->prepare($sql);
        $data->execute();
        $result = $data->fetch();
        $oldCat = $result[3];
        $type = $result[2];
        $path = "../../uploads/".$oldCat.$deleteID.".".$type;
        if(file_exists($path)) {
            unlink($path);
        }
        // Delete Image Data
        $sql = "DELETE FROM images 
                WHERE pid = $deleteID";
        $data = $conn->prepare($sql);
        $data->execute();
    }
    header("Location:crud.php");
?>
