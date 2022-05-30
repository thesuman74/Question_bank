
 







  <?php
include "dbcon.php";
include"../links/links.php";




?>







 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  


<?php


if (isset($_POST['login'])) {
    echo "it wroks";

}else{
  echo "it doesnt works";
}

?>

</head>
<body>



  <section>
    <div class="container mb-5" id="contact us">
      <h1 class="text-center text-capitalize pt-5 display-3 font-weight-normal" >Register</h1>
      <hr class="w-50 mx-auto pt-5">

      <div class="w-50 mx-auto">


       <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
        <div class="form-group">
          <label for="username">Full name:</label>
          <input type="text" class="form-control" name="fname" >
          <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" name="mail" >
          </div>
          <div class="form-group">
            <label for="email">Phone number</label>
            <input type="number" class="form-control" name="phone" >
          </div>

          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" name="pwd" >
          </div>
          <div class="form-group">
            <label for="cpwd">Confirm Password:</label>
            <input type="password" class="form-control" name="cpwd" >
          </div>
       

        <div class="form-group">
          <label for="email">Already have an account?
            <a href="login.php" class="text-success">Login.</a>
          </label>
        </div>


        <button type="submit" class="btn btn-default btn-success" name="login" >Register</button>

      </form>
    </div>
  </div>
</section>



</body>
</html>