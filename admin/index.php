<?php
session_start();

if (!isset($_SESSION['fullname'])) {
  echo "Please login ";
  header('location:login.php');
}
?>

<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>


  <style>
    img{
      width: 300px;
      height: 250px;
      object-fit: cover;
    }
  </style>
</head>
<body>


<!-- Begin Page Content -->
<div class="container-fluid w-75 ">

  <!-- Page Heading -->
  
  <div class="card card-outline-secondary">
    <div class="card-body">
      <div class="row">
       
        <div class="col-lg-4">


          <div class="card"  style="width: 20rem;">
            <img class="" src="img/data_entry.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Data Entry</h5>
              <p class="card-text">You can add new data from here.</p>
              <a href="data_entry.php" class="btn btn-primary">Data Entry</a>
            </div>
          </div>

        </div>


        <div class="col-lg-4">


          <div class="card"  style="width: 20rem;">
            <img class="" src="img/subjects.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Subjects</h5>
              <p class="card-text">You can add new subjects from here.</p>
              <a href="subject.php" class="btn btn-primary">subjects</a>
            </div>
          </div>

        </div>
        <div class="col-lg-4">


          <div class="card"  style="width: 20rem;">
            <img class="" src="img/questions.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Questions</h5>
              <p class="card-text">You can add new Questions from here.</p>
              <a href="questions.php" class="btn btn-primary">Questions</a>
            </div>
          </div>

        </div>




      </div>
    </div>
  </div>
</div><!-- /.container-fluid -->



  
</body>
</html>




<?php
include('includes/scripts.php');
include('includes/footer.php');
?>