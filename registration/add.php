<?php


include 'dbcon.php' ;




$name = $_POST['fname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
// $password = $_POST['pwd'];
$file = $_FILES['photo'];



// print_r($file);


$target = "images/".basename($name);

$filename = $file['name'];
$filepath = $file['tmp_name'];
$fileerror = $file['error'];


if ($fileerror == 0) {
  
  $target = "images/".$filename;


  move_uploaded_file($filepath, $target);


  $insertuery = " insert into regtable(fullname,email,phone,photo) values ('$name', '$email', '$phone', '$target')";

  $query = mysqli_query($con,$insertuery);
  

  if ($query) {
    ?>
    <script type="text/javascript">

      alert("inserted successfully");
      location.replace("display.php");

      
    </script>

    <?php


  }else{
    echo "nOT INSERTED";
  }
}

// header('location:index.php');



?>