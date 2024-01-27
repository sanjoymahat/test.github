<?php
include "config.php";
if(isset($_POST['add_user'])){
 $f_name = mysqli_real_escape_string($conn, $_POST['f_name']);
$l_name = mysqli_real_escape_string($conn, $_POST['l_name']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
$city = mysqli_real_escape_string($conn, $_POST['city']);
$user_role = mysqli_real_escape_string($conn, $_POST['user_role']);
$sql1="SELECT * FROM user WHERE email='{$email}'";

$sql = "INSERT INTO `user`(`f_name`, `l_name`, `username`, `email`, `mobile`, `city`, `user_role`) VALUES ('$f_name', '$l_name', '$username', '$email', '$mobile', '$city', '$user_role')";

if (mysqli_query($conn, $sql)) {
    echo 1;
} else {
    echo 0;
}
}
?>
