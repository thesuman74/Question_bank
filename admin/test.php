<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- //bootstrap cdn css  -->
	<!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


  <title>Inserting data into database</title>
</head>
<body>

                                            <!-- //database name = projecti -->
  <?php                                        
$conn = mysqli_connect('localhost','root','','projecti'); // for connection with data base 

//if connection to database failed 
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {

  // getting data from form 

  $email = $_POST['email'];  
  $password = $_POST['password'];

// table name rlogin in projecti database 

  $sql = "INSERT INTO rlogin (id, email, password)
  VALUES ('4', '$email', '$password')";

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);


}

?>


<div class="container">
	<form method="POST">
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" name="email" placeholder="Enter email">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password">
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>

    <!-- use name = submit for isset to work  -->
  </form>

</div>





</body>
</html>