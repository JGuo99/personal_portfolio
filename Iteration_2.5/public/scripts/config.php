<?php
//My SQLi
    // session_start();
    // $con = mysqli_connect('localhost', 'root', '');
    // mysqli_select_db($con, 'projects');

//PDO
// https://stackoverflow.com/questions/4015729/what-is-php-session-start
    session_start();
    $host = "localhost";  //IP Address
    $username = "u974584692_root"; // Your Username
    $password = "0310Access"; //Your Password
    $port = "3306"; //Port Number: Defualt is 3306
    $dbname = "u974584692_project_db"; //The database name

    // Connection
    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname;port=$port", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>