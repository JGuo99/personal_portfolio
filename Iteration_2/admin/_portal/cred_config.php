<?php
    // https://stackoverflow.com/questions/4015729/what-is-php-session-start
    session_start();
    $host = "localhost";  //IP Address
    $username = "root"; // Your Username
    $password = ""; //Your Password
    $port = "3306"; //Port Number: Defualt is 3306
    $dbname = "credentials"; //The database name

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