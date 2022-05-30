<?php


function  emptyInputSignup($name, $email, $phone, $password, $cpassword){
	$result ;
	if (empty($name)|| empty($email)||empty($phone)||empty($password)||empty($cpassword)) {
		$result = true ;
	}else{
		$result=false;
	}
	return $result;
}


function  invalidEmail(){
	$result;
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$result = true ;
	}else{
		$result=false;
	}
	return $result;
}


function  passMatch(){
	$result;
	if ($password !== $cpassword) {
		$result = true ;
	}else{
		$result=false;
	}
	return $result;
}




function emailexists($con, $email){
	$sql = "SELECT * FROM regdata WHERE email = ? ;";
	$stmt = mysqli_stmt_init($con); //to disable writing codes in input field

	if (!mysqli_stmt_prepare($stmt,$sql)) {
		 header("location:signup.php?error=stmtfailed");
     exit();
	}


	mysqli_stmt_bind_param($stmt, "s", $name, $email );
	mysqli_stmt_execute($stmt);


	$resultData = mysqli_stmt_get_result($stmt);

	if($row = mysqli_fetch_assoc($resultData)){

		return $row;

	}else{
		$return = false;
		return $result;
	}

	mysqli_stmt_close($stmt);
}




function createUser($con, $name, $email, $phone, $password){
	$sql = "INSERT INTO regdata (fullname,email,phone,password,cpassword) VALUES(?,?,?,?,?)";
	$stmt = mysqli_stmt_init($con); //to disable writing codes in input field

	if (!mysqli_stmt_prepare($stmt,$sql)) {
		 header("location:signup.php?error=stmtfailed");
     exit();
	}

	$hasedpwd = password_hash($password, PASSWORD_DEFAULT);


	mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $phone, $hasedpwd );
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);

	header("location:index.php?error=none");
     exit();
}











?>