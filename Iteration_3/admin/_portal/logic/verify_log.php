<?php
    require_once "cred_config.php";

    $email = $_POST['log_email'];
    $pass = $_POST['log_pass'];

    $sql = "SELECT * FROM user WHERE email = '$email' && password = '$pass'";
    $data = $conn->prepare($sql);
    $data->execute();
    print_r($data);
    $find = $data->fetch();
    $result = $data->rowCount();

    if($result == 1) {
        $user = $find[2];
        $_SESSION['username'] = $user;
        header('location:../../_crud/crud.php');
    } else {
        echo '<script language="javascript">';
        echo 'if(confirm("Wrong Credentials!")){window.location = "../panel.php";}';
        echo '</script>';
    }
?>