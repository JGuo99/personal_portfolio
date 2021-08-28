<?php
    require_once "../scripts/config.php";
    $tmp = $_POST['new-cat'];
    $newCat = strtolower(str_replace(" ", "_", $tmp));

    $stmt = $conn->prepare("SELECT * FROM category WHERE categoryName LIKE '%$newCat%'");
    $stmt->execute();
    $check = $stmt->rowCount();

    if($check == 0 && !empty($newCat)){
        $sql = $conn->prepare("INSERT INTO category(categoryName)
                               VALUE ('$newCat')");
        $sql->execute();
        echo '<script language="javascript">';
        echo 'if(confirm("New Category Added!")){window.location = "crud.php";}';
        echo '</script>';
    } else {
        echo '<script language="javascript">';
        echo 'if(confirm("ERROR: Category Exist!")){window.location = "crud.php";}';
        echo '</script>';
    }
?>