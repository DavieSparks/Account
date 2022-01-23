<?php

session_start();

$con = mysqli_connect('localhost','root','root');

mysqli_select_db($con, 'dauelect');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$admission = $_POST['admission'];
$phone = $_POST['phone'];

$s = "select * from registration where email ='$email' && password = '$password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    header('location:Home.html');
}else{
    header('location:index.html');
}
?>