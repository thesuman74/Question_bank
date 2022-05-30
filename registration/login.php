<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php    include 'links/links.php'; ?>

</head>
<body>

<?php

include 'dbcon.php';
if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['pwd'];

    $email_search = "SELECT * FROM regdata where email='$email'";
    $query = mysqli_query($con,$email_search);


    $email_count = mysqli_num_rows($query);

    if ($email_count) {
      

          $email_pass = mysqli_fetch_assoc($query);
          // $email_pass = mysqli_fetch_array($query);
          

          $db_pass = $email_pass['password'];
          $_SESSION['fullname'] = $email_pass['fullname'];

          // print_r($db_pass);

          if ($db_pass == $password) {
                echo "login succesful";
                ?>

                <script type="text/javascript">
                  location.replace("display.php");
                </script>

                <?php

              }else{
                echo"Email and password doesn't match";}
              }else{
      echo"Invalid email and password ";
    }
  
}


?>










<section>
    <div class="container mb-5" id="contact us">
      <h1 class="text-center text-capitalize pt-5 display-3 font-weight-normal" >Login</h1>
      <hr class="w-50 mx-auto pt-5">

      <div class="w-50 mx-auto">


       <form action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>" method="POST"  >
        <div class="form-group">
         
            <label for="email">Email address:</label>
            <input type="email" class="form-control" name="email" required>
          </div>
         

          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" name="pwd" required>
          </div>


          <div class="form-group">
            <label for="email">Don't have an account?
                <a href="register.php" class="text-success" name="register">Register.</a>
             </label>
            </div>

            <div class="form-group">
              <button type="submit" name="submit" class="btn btn-success btn-block">Login</button>
              
            </div>
         
      
        <!--   <a href="" style="border-radius:16px;" name="submit"  class="btn btn-success col-md" role="button">Login</a> -->
        </form>
      </div>
    </div>
  </section>
</body>
</html>