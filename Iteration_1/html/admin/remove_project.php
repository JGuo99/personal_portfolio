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
    require_once "config.php";
    $rowCount = count($_POST["checked"]);
    for($i = 0; $i < $rowCount; $i++) {
        $sql = "DELETE FROM freelance 
                WHERE id = '" . $_POST["checked"][$i] . "'";
        $data = $conn->prepare($sql);
        $data->execute();
    // mysqli_query($conn, "DELETE FROM freelance WHERE userId='" . $_POST["users"][$i] . "'");
    }
    header("Location:../crud.php");
?>
