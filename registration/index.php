<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<?php    include 'links/links.php'; ?>
</head>
<body>

  <section>
    <div class="container mb-5" id="contact us">
      <h1 class="text-center text-capitalize pt-5 display-3" >Contact us</h1>
      <hr class="w-50 mx-auto pt-5">

      <div class="w-50 mx-auto">


       <form action="upload.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="username">Full name:</label>
          <input type="text" class="form-control" name="fname" required></div>
          <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" name="email" required>
          </div>
          <div class="form-group">
            <label for="email">Phone number</label>
            <input type="number" class="form-control" name="phone" required>
          </div>

          <!-- <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" name="pwd" required> -->
          <!-- </div> -->

          <label for="file">Upload photo:</label>
          <input type="file" name="photo" required>
          <div class="checkbox">
            <label><input type="checkbox" class="mt-3"> Remember me</label>
          </div> 

          <button type="submit" class="btn btn-default btn-success mt-3">Submit</button>
          <a href="login.php" class="btn btn-success mt-3" role="button">Check form</a>
        </form>
      </div>
    </div>
  </section>
  
  </body>
  </html>