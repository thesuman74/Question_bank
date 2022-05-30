
<?php
include 'dbcon.php';
include'../links/links.php';
include 'functions.php';




  
  if (isset($_POST['register'])){
    

    $name = $_POST['fname'];
    $email = $_POST['mail'];
    $phone = $_POST['phone'];
    $password = $_POST['pwd'];
    $cpassword = $_POST['cpwd'];



    if (emptyInputSignup($name, $email, $phone, $password, $cpassword) !== false) {
     header("location:signup.php?error=emptyinput");
     exit();
   }

   if (invalidEmail($email) !== false) {
    header("location:signup.php?error=invalidEmail");
     exit();
   }

   if (passMatch($password,$cpassword) !== false) {
    header("location:signup.php?error=passwordsdontmatch");
     exit();
   }

   if (emailexists($con,$email) !== false) {
    header("location:signup.php?error=passwordsdontmatch");
     exit();
   }



   createUser($con, $name, $email, $phone, $password);







   }else{echo "submit the form and then enter ypu mf hacker";
  
   }






?>