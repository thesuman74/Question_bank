<?php

include 'includes/sidebar.php';
include 'includes/links/links.php';

$con=mysqli_connect('localhost','root','','youtube');

 $squery = mysqli_query($con,"SELECT * FROM user");
 $re = mysqli_fetch_array($squery);
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    
<section>
    <div class="container">
      <h1 class="text-center text-capitalize pt-5 display-3" >PHOTOS</h1>
      <hr class="w-50 mx-auto pt-5">



      <div class="row my-3">
        <div class="col-lg-4 col-md-4 col-12 mb-4 shadow p-3 mr-5 bg-white rounded">
          <img src="images/<?php echo $re['photo'];?>.jpg" class="img-fluid">
        </div>
        <div class="col-lg-4 col-md-2 col-12 mb-4 shadow p-3 mr-5 bg-white rounded">
          <img src="images/<?php echo $re['photo'];?>.jpg" class="img-fluid">
        </div>
                <div class="col-lg-4 col-md-2 col-12 mb-4 shadow p-3 mr-5 bg-white rounded">
          <img src="images/<?php echo $re['photo'];?>.jpg" class="img-fluid">
        </div>
        

       

      </div>
 </div>
</section>
    
</body>
</html>
 

