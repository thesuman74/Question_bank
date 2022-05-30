<?php

// check the connection of databse
include 'dbcon.php';

// getting the data
$name = $_POST['fname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['pwd'];
$image = $_FILES['photo'];

// print_r($file);


//defining a variable , path where images are to be saved .




$filename = $image['name'];
$filepath = $image['tmp_name'];
$fileerror = $image['error'];





if ($fileerror == 0) {
		$target = "img/".$filename;

		move_uploaded_file($filepath, $target);}

		$insertuery = "INSERT INTO info (fullname,email,phone,password,photo) VALUES ('$name', '$email', '$phone', '$password', '$target')";

  $query = mysqli_query($con,$insertuery);
 

// header('location:index.php');

	



?>