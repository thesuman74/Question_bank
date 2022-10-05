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

  if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    $selectquery = "SELECT * from team WHERE id=$user_id";

    $query = mysqli_query($con, $selectquery);
    $re = mysqli_fetch_array($query);
  }

  // to catch id 



  // If upload button is clicked ...
  if (isset($_POST['update_team'])) {

    // Get data from form  


    $heading = $_POST['team_heading'];
    $post = $_POST['team_post'];
    $discription = $_POST['team_discription'];
    // $file = $_FILES['$photo']['name'];
    $new_image =  $_FILES['new_photo']['name'];
    $old_image =  $_POST['old_photo'];

    if ($new_image != '') {

      $photo = $new_image;
    } else {
      $photo = $old_image;
    }




    $target = "images/" . $_FILES['new_photo']['name'];

    $c = move_uploaded_file($_FILES["new_photo"]["tmp_name"], $target);

    // $insertuery = "insert into about (team_heading,team_discription,team_photo) values ('$heading','$discription','$target')";
    //   $iquery = mysqli_query($con, $insertuery);

    $updatequery = "
    
      UPDATE team
      SET  team_heading = '$heading', team_post = '$post', team_discription = '$discription', team_photo = '$photo'
      WHERE id=$user_id";

    $uquery = mysqli_query($con, $updatequery);



    if ($uquery) {
  ?>
      <script>
        alert("updated successfully");
        window.location.href = "";
      </script>
  <?php

    } else {
      echo "not updated ";
    }
  }
  ?>
  

  <section class="col-auto ">
    <div class="container mb-5 " id="contact us">
      <h1 class="text-center text-capitalize pt-1 display-3 font-weight-normal">Edit team</h1>
      <hr class="w-100 mx-auto pt-1">



      <div class="w-100 mx-auto">

        <?php

        if (isset($_GET['id'])) {
          $user_id = $_GET['id'];
          $selectquery = "select * from team where id=$user_id";
          $query = mysqli_query($con, $selectquery);

          while ($re = mysqli_fetch_array($query)) {
        ?>
            <div class="container-fluid">
              <!-- <h1 class="text-center ">Edit team details</h1> -->

              <div class="row bg-white w-200 ">
                <div class="col ">

                  <div class="m-4 ">
                    <form action="update_team.php?id=<?php echo $re['id']; ?>" method="POST" enctype="multipart/form-data">
                      <div class="form-group ">

                        <label for="heading">NAME:</label>
                        <input class="form-control mh-100" name="team_heading" placeholder="Max 25 characters" value="<?php echo $re['team_heading']; ?>">
                      </div>

                      <div class="form-group ">

                        <label for="heading">POST:</label>
                        <input class="form-control mh-100" name="team_post" placeholder="Max 25 characters" value="<?php echo $re['team_post']; ?>">
                      </div>

                      <div class="form-group">
                        <label for="discription">Discription:</label>
                        <textarea class="form-control" name="team_discription" placeholder="Max 200 characters" rows="5" cols="40"><?php echo $re['team_discription']; ?></textarea>
                      </div>


                      <label for="file">Change photo:</label>
                      <input type="file" name="new_photo" class="mb-3"><br>

                      <button type="submit" class="btn btn-primary mr-5 " name="update_team">Update</button>

                      <a href="../team.php" class="btn btn-danger">Cancel</a>


                      <input type="hidden" name="old_photo" value="<?php echo $re['team_photo']; ?>">


                    </form>
                  </div>
                </div>
                <div class="col mt-5 ">
                  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="POST" enctype="multipart/form-data">
                    <div class="col-lg-7 hero-img text-center" data-aos="zoom-out" data-aos-delay="200">
                      <label for="file">Previous photo:</label>

                      <img src="images/<?php echo $re['team_photo']; ?>" class=" ml-2 rounded" alt=" team image " style="min-width: 400px; height:330px; object-fit:cover ; object-position: 15% 50%; ; ">


                    </div>
                  </form>


                </div>

              </div>
            </div>


      </div>
      <!-- end -->


  <?php
          }
        }
  ?>
    </div>
    </div>

  </section>







</body>

</html>
<?php
include('includes/scripts.php');
include('includes/footer.php');
