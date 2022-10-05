<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="../css/sb-admin-2.min.css" rel="stylesheet"> -->
    
</head>

<body>

    <?php
    include('includes/header.php');
    include('includes/navbar.php');
    include('includes/links/links.php');
    include('../dbcon.php');

    $rselect = "select id from blog ORDER BY id DESC LIMIT 1";
    $selectquery = mysqli_query($con, $rselect);
    $re = mysqli_fetch_assoc($selectquery);
    $new_ids = $re['id'] + 1;
    if (isset($_POST['submit_model'])) {




        $heading = $_POST['heading'];
        $name = $_POST['name'];
        $discription = $_POST['blog_discription'];
        $image =  $_FILES['photo']['name'];

        $target = "images/" . $_FILES['photo']['name'];
        $c = move_uploaded_file($_FILES["photo"]["tmp_name"], $target);



        $blog_insert = "insert into blog (id,blog_heading,blog_by,blog_discription,blog_photo) values ('$new_ids','$heading','$name','$discription','$target')";
        $blog_query = mysqli_query($con, $blog_insert);

        if ($blog_query) {
    ?>
            <script>
                alert("blog inserted sucessfully");
                window.location.href = '../blog.php';
            </script>


        <?php

        } else {
        ?>
            <script>
                alert("blog not inserted ");
            </script>


        <?php

        }
    }

    if (isset($_POST['delete'])) {
        $ids = $_GET['id'];


        $deletequery = "DELETE FROM blog WHERE id=$ids";
        $dquery = mysqli_query($con, $deletequery);


        if ($dquery) {

        ?><script type="text/javascript">
                alert("Deleted successfully");
                location.replace("../blog.php");
            </script><?php

                    }
                }
                        ?>






</body>

</html>
<?php
include('includes/scripts.php');
include('includes/footer.php');
