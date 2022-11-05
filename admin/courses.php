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
include('includes/links/links.php');
include('connection.inc.php');


$selectquery = "SELECT * FROM courses ";
$showdata = mysqli_query($conn, $selectquery);

if (isset($_POST['add_courses'])) {

    echo'successful';



}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
    


<main id="main">
    <!-- ======= About Section ======= -->

    <h1 class="text-center text-capitalize pt-1 display-3 font-weight-normal">Courses</h1>
    <hr class="w-75 mx-auto ">


    <div class="bg-white container mt-5 " style="width:auto; height: 600px;;">


        <section id="courses" class="about">
            <div class="container">
                <h2>Available courses</h2>
                <hr>
                <div class="row">
                   <?php 

                   while ($re = mysqli_fetch_array($showdata)) {
                   ?>  <div class="col-lg-4 col-sm-4 my-3 ">
                    <a class="btn btn-primary animate__animated animate__pulse btn-lg d-flex  text-white " href="" role="button" style="width:200px; height: 150px;" >
                        <?php echo strtoupper($re['name']);?> 
                    </a>
                    <!-- <button class="btn btn-danger mt-2">Delete</button> -->
                </div>
                <?php
            }   




            ?>
        </div>      
    </div>
    <hr>    

    <h2>Add new courses</h2>
    <!-- add course section  -->
    <div class="add_courses">

        <form action="add.php" method="POST"     >

          <div class="input-group">
            <input type="text" name="course" class="form-control" placeholder="Enter Course name" required>
        </div>
        <h2>Select the number of semesters</h2>
        <select name="semester">
            <option>select the number of semesters</option>
            <option value="6" > 6</option>
            <option value="8" > 8</option>
        </select><br>

        <input type="submit" name="add_courses" class="btn btn-primary mt-4" >       
    </form>

</div>


<!-- course add end here -->


</div>

</section>


<!-- End About Section -->


</body>
</html>

<?php
    include('includes/scripts.php');
    include('includes/footer.php');
?>