<?php
session_start();

if (!isset($_SESSION['fullname'])) {
  echo "Please login ";
  header('location:login.php');
}


?>



<?php

include 'dbcon.php';
include 'links/links.php';


$ids = $_GET['id'];


$selectquery = "SELECT * FROM regtable WHERE id='$ids'";
$showdata = mysqli_query($con, $selectquery);

$re = mysqli_fetch_array($showdata);



if (isset($_POST['update'])) {



  $id = $_POST['id'];
  $name = $_POST['fname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $file = $_FILES['photo']['name'];



  $target = "images/" . basename($file);

  $c = move_uploaded_file($_FILES['photo']['tmp_name'], $target);

  $insertuery = "insert into logo (photo) values ($target)";
  $iquery = mysqli_query($con, $insertuery);
  if ($target) {


    $updatequery = "
    
      UPDATE regtable
      SET id = $id, fullname = '$name', email = '$email', phone = '$phone', photo = '$target'
      WHERE id=$ids";

    $uquery = mysqli_query($con, $updatequery);
  }

  if ($uquery) {

?><script type="text/javascript">
      alert("inserted");
      location.replace("display.php");
    </script><?php
            } else {
              ?><script type="text/javascript">
      alert("Not inserted");
    </script><?php
            }
          }

          if (isset($_POST['delete'])) {
            $deletequery = "DELETE FROM regtable WHERE id=$ids";
            $dquery = mysqli_query($con, $deletequery);


            if ($dquery) {

              ?><script type="text/javascript">
      alert("Deleted successfully");
      location.replace("display.php");
    </script><?php

            }
          }

              ?>

<section>
  <div class="container mb-5" id="contact us">
    <h1 class="text-center text-capitalize pt-5 display-3">Edit details</h1>
    <hr class="w-50 mx-auto pt-5">

    <div class="w-50 mx-auto">


      <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">

          <div class="form-group">
            <label for="pwd">ID:</label>
            <input type="text" class="form-control" name="id" value="<?php echo $re['id']; ?>">
          </div>

          <label for="username">Full name:</label>
          <input type="text" class="form-control" name="fname" value="<?php echo $re['fullname']; ?>">
          <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" name="email" value="<?php echo $re['email']; ?>">
          </div>
          <div class="form-group">
            <label for="email">Phone number</label>
            <input type="number" class="form-control" name="phone" value="<?php echo $re['phone']; ?>">
          </div>


          <label for="file">Upload photo:</label>
          <input type="file" name="photo" class="mb-3"><br>


          <label for="file" class="form-group">Previous photo:</label>
          <img src="<?php echo $re['photo'];  ?>" width="200px" height="120px"><br>

          <button type="submit" name="update" class="btn btn-success mt-3">Update</button>



          <a href="display.php" class="btn btn-danger mt-3 " role="button" name="">Cancel</a>


      </form>
    </div>
  </div>
</section><?php


          ?>