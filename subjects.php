<?php
//for semester
include 'db.php';
$selectquery = "SELECT * FROM semester ";
$squery = mysqli_query($con,$selectquery);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>New is Dimond</title>

	<!-- google fonts cdn link -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />

	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

	<link
	href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap"
	rel="stylesheet"
	/>

	<!--font awsome cdn link-->
	<link
	rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
	/>
	<!--custom css file link-->
	<link rel="stylesheet" href="css/style.css" />
</head>
<body>
	<!-- header section starts -->
	<header style="position: sticky;">
		<a href="#" class="logo"
		><i class="fas fa-user-graduate"></i>New Is Dimond</a
		>

		<nav class="navbar">
			<ul>
				<li><a href="#home">home</a></li>
				<li><a href="#about">about us</a></li>
				<li><a href="#course">faculty</a></li>

				<li><a href="#contact">contact</a></li>
			</ul>
		</nav>

		<div id="login" class="fas fa-user-circle"></div>
	</header>
	<!-- header section ends -->
	<div style="background-color:">
	<a href="subjects.php"><button type="submit" class="btn btn-primary" style="margin: 10px 500px; width: 400px;">I</button><br></a>
	<a href="subjects.php"><button type="submit" class="btn btn-primary" style="margin: 10px 500px; width: 400px;">II</button><br></a>
	<a href="subjects.php"><button type="submit" class="btn btn-primary" style="margin: 10px 500px; width: 400px;">III</button><br></a>
	<a href="subjects.php"><button type="submit" class="btn btn-primary" style="margin: 10px 500px; width: 400px;">IV</button><br></a>
	<a href="subjects.php"><button type="submit" class="btn btn-primary" style="margin: 10px 500px; width: 400px;">V</button><br></a>
	<a href="subjects.php"><button type="submit" class="btn btn-primary" style="margin: 10px 500px; width: 400px;">VI</button><br></a>
	<a href="subjects.php"><button type="submit" class="btn btn-primary" style="margin: 10px 500px; width: 400px;">VII</button><br></a>
	<a href="subjects.php"><button type="submit" class="btn btn-primary" style="margin: 10px 500px; width: 400px;">VIII</button><br></a>

</div>




	<!-- footer section starts  -->


	<!-- footer section ends -->

	<!-- jquery cdn link -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<!-- custom js file link -->
	<script src="js/script.js"></script>
	<div>
		<?php include 'footer.php'?>;
	</div>
</body>
</html>