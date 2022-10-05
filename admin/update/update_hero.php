<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- <link href="../css/sb-admin-2.min.css" rel="stylesheet"> -->


  <style>
    label {
      font-weight: bold;
    }
  </style>
</head>

<body>

  <?php
  include('includes/header.php');
  include('includes/navbar.php');
  include('includes/links/links.php');
  include('../dbcon.php');


  $hselect = "SELECT * FROM hero WHERE id='1'";
  $showdata = mysqli_query($con, $hselect);
  $re = mysqli_fetch_array($showdata);



  // If upload button is clicked ...
  if (isset($_POST['update_hero'])) {


    // Get data from form  
    $heading = $_POST['hero_heading'];
    $discription = $_POST['hero_discription'];
    // $file = $_FILES['$photo']['name'];
    $new_image =  $_FILES['new_photo']['name'];
    $old_image =  $_POST['old_photo'];

    if ($new_image != '') {


      $photo = $new_image;
    } else {
      $photo = $old_image;
    }

    // //To delete old photo from folders 
    // if ($photo == $new_image) {
    //   unlink("images/" . $old_image);
    // }


    $target = "images/" . $_FILES['new_photo']['name'];

    $c = move_uploaded_file($_FILES["new_photo"]["tmp_name"], $target);

    // $insertuery = "insert into about (hero_heading,hero_discription,about_photo) values ('$heading','$discription','$target')";
    //   $iquery = mysqli_query($con, $insertuery);

    $updatequery = "
    
      UPDATE hero
      SET  hero_heading = '$heading', hero_discription = '$discription', hero_photo = '$photo'
      WHERE id='1'";

    $uquery = mysqli_query($con, $updatequery);

    if ($uquery) {
  ?>
      <script>
        alert("updated  successfully");
        window.location.href = '../hero.php';
      </script>
  <?php

    } else {
      echo "not updated ";
    }
  }
  ?>

  <section class="col-auto ">
    <div class="container mb-5 " id="contact us">
      <h1 class="text-center text-capitalize pt-1 display-3 font-weight-normal">Edit Hero</h1>
      <hr class="w-100 mx-auto pt-1">



      <div class="w-100 mx-auto">



        <div class="container-fluid">
          <!-- <h1 class="text-center ">Edit team details</h1> -->

          <div class="row bg-white w-200 " style="width:auto; height: 500px;">
            <div class="col ">

              <div class="m-4 ">
                <form action="" method="POST" enctype="multipart/form-data">

                  <div class="form-group ">
                    <label for="heading">Heading:</label>
                    <input class="form-control mh-100" name="hero_heading" value="<?php echo $re['hero_heading']; ?>" placeholder="Max 100 characters">
                  </div>

                  <!-- <div class="form-group ">

                    <label for="heading">POST:</label>
                    <input class="form-control mh-100" name="team_post" value="<?php echo $re['team_post']; ?>">
                  </div> -->

                  <div class="form-group">
                    <label for="discription">Discription:</label>
                    <textarea class="form-control" name="hero_discription" rows="5" cols="40" placeholder="Max 500 characters"><?php echo $re['hero_discription']; ?></textarea>
                  </div>


                  <label for="file">Change photo:</label>
                  <input type="file" name="new_photo" class="mb-3"><br>

                  <button type="submit" class="btn btn-primary mr-5 " name="update_hero">Update</button>

                  <a href="../hero.php" class="btn btn-danger">Cancel</a>


                  <input type="hidden" name="old_photo" value="<?php echo $re['hero_photo']; ?>">


                </form>
              </div>
            </div>
            <div class="col mt-5 ">
              <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="POST" enctype="multipart/form-data">
                <div class="col-lg-7 hero-img text-center" data-aos="zoom-out" data-aos-delay="200">
                  <!-- <label for="file">Previous photo:</label> -->

                  <img src="images/<?php echo $re['hero_photo']; ?>" class=" ml-2 rounded" alt=" hero image " style="width: 400px; height:330px; object-fit:cover ; object-position: 15% 50%; ; ">


                </div>
              </form>


            </div>

          </div>
        </div>


      </div>
      <!-- end -->








    </div>
    </div>

  </section>







</body>

</html>
<?php
include('includes/scripts.php');
include('includes/footer.php');
