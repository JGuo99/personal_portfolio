<?php
    require_once "cred_config.php";

    $email = $_POST['reg_email'];
    $user = $_POST['user'];
    $pass = $_POST['reg_pass'];

    $sql = "SELECT * FROM user WHERE email = '$email'";
    $data = $conn->prepare($sql);
    $data->execute();
    $result = $data->rowCount();

    if($result == 1) {
        echo '<script language="javascript">';
        echo 'if(confirm("Email has been used!\nPlease use a different email.")){window.location = "../panel.php";}';
        echo '</script>';
    } else {
        $reg = "INSERT INTO user(email, password, name)
                VALUE ('$email', '$pass', '$user')";
        $data = $conn->prepare($reg);
        $data->execute();
        echo '<script language="javascript">';
        echo 'if(confirm("Registered Successfully!")){window.location = "../panel.php";}';
        echo '</script>';
    }

?>