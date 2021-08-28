<?php
    require_once "cred_config.php";

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM user WHERE email = '$email' && password = '$pass'";
    $data = $conn->prepare($sql);
    $data->execute();
    $find = $data->fetch();
    $result = $data->rowCount();

    if($result == 1) {
        $user = $find[2];
        $_SESSION['username'] = $user;
        header('location:../_crud/crud.php');
    } else {
        echo '<script language="javascript">';
        echo 'if(confirm("Wrong Credentials!")){window.location = "login.php";}';
        echo '</script>';
    }

?>