<?php

session_start();
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'projects');

// $name = $_POST['proj-name'];
// $id = $_POST['proj-id'];
// $cat = $_POST['proj-cat'];
// $edit = $_POST['last-edit'];


// $s = "SELECT * FROM freelance WHERE id = '$id'";
// $result = mysqli_query($con, $s);
// $num = mysqli_num_rows($result);

// if($num == 1) {
//     header('location:../museum.php');
// } 
?>