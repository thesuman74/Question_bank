<?php
include('../../admin/connection.inc.php');

$sql = "SELECT * FROM questions";
$query = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Semesters</title>

	<link rel="stylesheet" type="text/css" href="../style.css">
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

	<style>
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

	<!-- <header -->

	<?php
	include '../includes/header.php';
	include '../includes/scripts.php';
	include '../links/links.php';
	?>
	<!-- header ends here -->

	<!-- section starts here  -->
	<section id="popular-books" class="bookshelf">
		<div class="container">
			<div class="row">
					<div class="section-header align-center">
						<div class="title">
							<div class="row float-left">
								<span class="text-danger "><a class="text-secondary " href="../courses.php">courses</a>>><a class="text-secondary " href="semesters.php">Software</a></span>

							</div><br>

							<span>Choose semester</span>
						</div>
						<h2 class="  section-title">Semesters</h2>
					</div>
					<?php 

					while($result = mysqli_fetch_array($query)){
				?>
						<div class="col-md-3">
							<div class="card-body">
								<a class="btn btn-primary animate__animated animate__pulse btn-lg d-flex  text-white" href="first_sem.php" role="button" style="width:200px; height: 150px;"><?php echo $result['semester']; ?></a>
							</div>
					</div>

					<?php
						}
					?>
					</div>
					</div>
				<!--inner-tabs-->
	</section>





</body>

</html>