<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <?php
  include('includes/header.php');
  include('includes/navbar.php');
  include('includes/links/links.php');
  include('../dbcon.php');

  include('includes/scripts.php');
  include('includes/footer.php');

  ?>


</head>

<body>
  <section class="col-auto ">
    <div class="container mb-5 " id="contact us">
      <h1 class="text-center text-capitalize pt-1 display-3 font-weight-normal">Edit about</h1>
      <hr class="w-100 mx-auto pt-1">



      <div class="w-100 mx-auto">



        <div class="container-fluid">
          <!-- <h1 class="text-center ">Edit team details</h1> -->

          <div class="row bg-white w-200 ">
            <div class="col ">

              <div class="m-4 ">
                <form action="update_hero.php" method="POST" enctype="multipart/form-data">

                  <div class="form-group ">
                    <label for="heading">NAME:</label>
                    <input class="form-control mh-100" name="hero_heading" value="<?php echo $re['hero_heading']; ?>">
                  </div>

                  <!-- <div class="form-group ">

                    <label for="heading">POST:</label>
                    <input class="form-control mh-100" name="team_post" value="<?php echo $re['team_post']; ?>">
                  </div> -->

                  <div class="form-group">
                    <label for="discription">Discription:</label>
                    <textarea class="form-control" name="hero_discription" rows="5" cols="40"><?php echo $re['hero_discription']; ?></textarea>
                  </div>


                  <label for="file">Change photo:</label>
                  <input type="file" name="new_photo" class="mb-3"><br>

                  <button type="submit" class="btn btn-primary mr-5 " name="update_team">Update</button>

                  <a href="../team.php" class="btn btn-danger">Cancel</a>


                  <input type="hidden" name="old_photo" value="<?php echo $re['hero_photo']; ?>">


                </form>
              </div>
            </div>
            <div class="col mt-5 ">
              <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="POST" enctype="multipart/form-data">
                <div class="col-lg-7 hero-img text-center" data-aos="zoom-out" data-aos-delay="200">
                  <label for="file">Previous photo:</label>

                  <img src="images/<?php echo $re['hero_photo']; ?>" class=" ml-2 rounded" alt=" team image " style="width: 300px; height:330px; object-fit:cover ; object-position: 15% 50%; ; ">


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