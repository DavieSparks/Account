<?php

session_start();
header('location: index.html');

   $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $admission = $_POST['admission'];
    $phone = $_POST['phone'];
    

    //Database connection
    $conn = new mysqli('localhost','root','root','dauelect');
    if($conn->connect_error){
    	die('Connection Failed  : '.$conn->connect_error);
    }else{
    	$stmt = $conn->prepare("insert into registration(name, email, password, admission, phone)  values(?, ?, ?, ?, ?)");
    	$stmt->bind_param("sssii",$name, $email, $password, $admission, $phone);
    	$stmt->execute();
    	echo "Registration Successful...";
    	$stmt->close();
    	$conn->close();
    }
