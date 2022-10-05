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

        $blog_id = $_GET['id'];

        $blog_select = "SELECT * from blog WHERE id=$blog_id";

        $blog_query = mysqli_query($con, $blog_select);
        $blog_result = mysqli_fetch_array($blog_query);
    }

    // to catch id 



    // If upload button is clicked ...
    if (isset($_POST['update_blog'])) {

        // Get data from form  

        $new_id = $_POST['id'];
        $heading = $_POST['blog_heading'];
        $blog_by = $_POST['blog_by'];
        $discription = $_POST['blog_discription'];
        $time = $_POST['blog_time'];
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

        // $insertuery = "insert into about (blog_heading,blog_discription,blog_photo) values ('$heading','$discription','$target')";
        //   $iquery = mysqli_query($con, $insertuery);

        $updatequery = "
    
      UPDATE blog
      SET id='$new_id', blog_heading = '$heading', blog_by = '$blog_by',blog_time = '$time', blog_discription = '$discription', blog_photo = '$photo'
      WHERE id=$blog_id";

        $uquery = mysqli_query($con, $updatequery);



        if ($uquery) {
    ?>
            <script>
                alert("Blog updated successfully");
                window.location.href = "../blog.php";
            </script>
    <?php

        } else {
            echo "not updated ";
        }
    }
    ?>


    <section class="col-auto ">
        <div class="container mb-5 " id="contact us">
            <h1 class="text-center text-capitalize pt-1 display-3 font-weight-normal">Edit Blog</h1>
            <hr class="w-100 mx-auto pt-1">



            <div class="w-100 mx-auto">

                <?php

                if (isset($_GET['id'])) {
                    $blog_id = $_GET['id'];
                    $blog_select = "select * from blog where id=$blog_id";
                    $blog_query = mysqli_query($con, $blog_select);
                    $blog_result = mysqli_fetch_array($blog_query);



                ?>
                    <div class="container-fluid">
                        <!-- <h1 class="text-center ">Edit team details</h1> -->

                        <div class="row bg-white w-200 ">
                            <div class="col ">

                                <div class="m-4 ">
                                    <form action="update_blog.php?id=<?php echo $blog_result['id']; ?>" method="POST" enctype="multipart/form-data">
                                        <div class="form-group ">

                                            <label for="heading">ID:</label>
                                            <input class="form-control mh-100" name="id" placeholder="" value="<?php echo $blog_result['id']; ?>">
                                        </div>


                                        <div class="form-group ">

                                            <label for="heading">Heading:</label>
                                            <input class="form-control mh-100" name="blog_heading" placeholder="Max 25 characters" value="<?php echo $blog_result['blog_heading']; ?>">
                                        </div>


                                        <div class="form-group ">

                                            <label for="heading">Name:</label>
                                            <input class="form-control mh-100" name="blog_by" placeholder="Max 25 characters" value="<?php echo $blog_result['blog_by']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="discription">Discription:</label>
                                            <textarea class="form-control" name="blog_discription" placeholder="Max 200 characters" rows="5" cols="40"><?php echo $blog_result['blog_discription']; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="discription">Change time :</label>
                                            <input class="form-control" name="blog_time" placeholder="Time will be added automatically" value="<?php echo $blog_result['blog_time']; ?>" </input>
                                        </div>


                                        <label for="file">Change photo:</label>
                                        <input type="file" name="new_photo" class="mb-3"><br>

                                        <button type="submit" class="btn btn-primary mr-5 " name="update_blog">Update</button>

                                        <a href="../blog.php" class="btn btn-danger">Cancel</a>


                                        <input type="hidden" name="old_photo" value="<?php echo $blog_result['blog_photo']; ?>">


                                    </form>
                                </div>
                            </div>
                            <div class="col mt-5 ">
                                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="POST" enctype="multipart/form-data">
                                    <div class="col-lg-7 hero-img text-center" data-aos="zoom-out" data-aos-delay="200">
                                        <label for="file">Previous photo:</label>

                                        <img src="<?php echo $blog_result['blog_photo']; ?>" class=" ml-2 rounded" alt=" team image " style="min-width: 400px; height:330px; object-fit:contain ; object-position: 15% 50%; ; ">


                                    </div>
                                </form>


                            </div>

                        </div>
                    </div>


            </div>
            <!-- end -->


        <?php
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
