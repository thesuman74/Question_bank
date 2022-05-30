<?php
session_start();
?> 

<?php
include 'dbcon.php';
include'links/links.php';



  
  if (isset($_POST['ass'])){
    $name = mysqli_escape_string($con,$_POST['fname']);   
    $mail = mysqli_escape_string($con,$_POST['mail']);   
    $phone = mysqli_escape_string($con,$_POST['phone']);   
    $password = mysqli_escape_string($con,$_POST['pwd']);   
    $cpassword = mysqli_escape_string($con,$_POST['cpwd']);


    $emailquery = "SELECT * FROM regdata where email ='$mail' ";
    $query = mysqli_query($con,$emailquery);

    $emailcount = mysqli_num_rows($query);

    
    if ($emailcount>0  ) {
        ?><script type="text/javascript">
          alert("Email already exists");
        </script><?php 
      }
        else{
      if($password === $cpassword){

        $insertuery = "INSERT INTO regdata (fullname,email,phone,password,cpassword) VALUES ('$name','$mail','$phone','$password','$cpassword')";
        $iquery = mysqli_query($con,$insertuery);

         ?><script type="text/javascript">
          alert("Registered successfully");
            location.replace("login.php");          
        </script><?php

      }else{
        ?><script type="text/javascript">
          alert("Password don't match");
        </script><?php
      }
    }

   }else{
    echo "Fill the form";
  
   }




?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>



  <section>
    <div class="container mb-5" id="contact us">
      <h1 class="text-center text-capitalize pt-5 display-3 font-weight-normal" >Register</h1>
      <hr class="w-50 mx-auto pt-5">

      <div class="w-50 mx-auto">


       <form action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="username">Full name:</label>
          <input type="text" class="form-control" name="fname" required>
          <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" name="mail" required >
          </div>
          <div class="form-group">
            <label for="email">Phone number</label>
            <input type="number" class="form-control" name="phone" required >
          </div>

          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" name="pwd" required >
          </div>
          <div class="form-group">
            <label for="cpwd">Confirm Password:</label>
            <input type="password" class="form-control" name="cpwd" required>
          </div>
       

        <div class="form-group">
          <label for="email">Already have an account?
            <a href="login.php" class="text-success">Login.</a>
          </label>
        </div>


        <button type="submit" class="btn btn-default btn-success" name="ass">Register</button>

      </form>
    </div>
  </div>
</section>



</body>
</html>










