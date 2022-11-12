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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

  <title>Dashboard</title>


  <style>
    img{
      width: 300px;
      height: 250px;
      object-fit: cover;
    }

    a {
      align-items: center;
      line-height: 28px;
      justify-content: center;

      --animate-duration: 800ms;
      --animate-delay: 0.9s;

    }
  
  </style>
</head>
<body>


<!-- Begin Page Content -->
<div class="container-fluid w-75 ">

  <!-- Page Heading -->
  
  <div class="row">
              <div class="col-lg-3 m-2">
                <a class="btn btn-primary animate__animated animate__pulse btn-lg d-flex  text-white" href="courses.php" role="button" style="width:200px; height: 150px;">Courses</a>
              </div>
              <div class="col-lg-3 m-2">
                <a class="btn btn-primary animate__animated animate__pulse btn-lg d-flex  text-white" href="subject.php" style="width:200px; height: 150px;">Subjects </a>
              </div>
              <div class="col-lg-3 m-2">
                <a class="btn btn-primary animate__animated animate__pulse btn-lg d-flex  text-white" href="data_entry.php" style="width:200px; height: 150px;">Data Entry </a>
              </div>
    </div>
   
   <div class="row my-3">
              <div class="col-lg-3 m-2">
                <a class="btn btn-primary animate__animated animate__pulse btn-lg d-flex  text-white" href="questions.php" role="button" style="width:200px; height: 150px;">Questions</a>
              </div>
              <div class="col-lg-3 m-2">
                <a class="btn btn-primary animate__animated animate__pulse btn-lg d-flex  text-white" href="search.php" style="width:200px; height: 150px;">Search Questions </a>
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