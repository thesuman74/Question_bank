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



<!-- Begin Page Content -->
<div class="container-fluid position sticky">

  <!-- Page Heading -->
  
  <div class="card card-success">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12 col-lg-6 col-xl-4">
          <div class="card mb-2 bg-gradient-dark">
            <img class="card-img-top" src="img/data_entry.png" alt="Dist Photo 1" style="width: 500px; height: 380px; object-fit:cover ; object-position: 15% 50%;">
            <div class="mt-2 d-flex flex-column justify-content-end">
              <a href="data_entry.php" class="text-white btn btn-primary ">Data Entry</a>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-6 col-xl-4">
          <div class="card mb-2 bg-gradient-dark">
            <img class="card-img-top" src="img/subjects.jpg" alt="Dist Photo 1" style="width: 500px; height: 380px; object-fit:cover ; object-position: 15% 50%;">
            <div class="mt-2 d-flex flex-column justify-content-end">
                            <a href="subject.php" class="text-white btn btn-primary  ">Subjects Entry</a>

            </div>
          </div>
        </div>

         <div class="col-md-12 col-lg-6 col-xl-4">
          <div class="card mb-2 bg-gradient-dark">
            <img class="card-img-top" src="img/questions.jpg" alt="Dist Photo 1" style="width: 500px; height: 380px; object-fit:cover ; object-position: 15% 50%;">
            <div class="mt-2 d-flex flex-column justify-content-end">
                            <a href="questions.php" class="text-white btn btn-primary  ">Questions </a>

            </div>
          </div>
        </div>


        
      </div>
    </div>
  </div>
</div><!-- /.container-fluid -->





<?php
include('includes/scripts.php');
include('includes/footer.php');
?>