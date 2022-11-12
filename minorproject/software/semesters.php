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
				<div class="inner-content">

					<div class="section-header align-center">
						<div class="title">
							<div class="row float-left">
								<span class="text-danger "><a class="text-secondary " href="../courses.php">courses</a>>><a class="text-secondary " href="semesters.php">Software</a></span>

							</div><br>

							<span>Choose semester</span>
						</div>
						<h2 class="  section-title">Semesters</h2>
					</div>


					<div class="container">
						<div class="row">
							<div class="col-sm ">
								<a class="btn btn-primary animate__animated animate__pulse btn-lg d-flex  text-white" href="first_sem.php" role="button" style="width:200px; height: 150px;">First semester </a>
							</div>
							<div class="col-sm">
								<a class="btn btn-primary animate__animated animate__pulse btn-lg d-flex  text-white" href="second_sem.php" style="width:200px; height: 150px;">Second semester </a>
							</div>
							<div class="col-sm">
								<a class="btn btn-primary animate__animated animate__pulse btn-lg d-flex  text-white" href="third_sem.php" style="width:200px; height: 150px;">Third semester </a>

							</div>
							<div class="col-sm">
								<a class="btn btn-primary btn-lg d-flex animate__animated animate__pulse  text-white" href="fourth_sem.php" style="width:200px; height: 150px;">Fourth semester </a>
							</div>
						</div>

						<div class="row mt-5">
							<div class="col-sm">
								<a class="btn btn-primary btn-lg d-flex animate__animated animate__pulse  text-white" href="fifth_sem.php" style="width:200px; height: 150px;">Fifth semester </a>
							</div>
							<div class="col-sm">
								<a class="btn btn-primary btn-lg d-flex animate__animated animate__pulse  text-white" href="sixth_sem.php" style="width:200px; height: 150px;">Sixth semester </a>
							</div>
							<div class="col-sm">
								<a class="btn btn-primary btn-lg d-flex animate__animated animate__pulse  text-white" href="seventh_sem.php" style="width:200px; height: 150px;">Seventh semester </a>

							</div>
							<div class="col-sm">
								<a class="btn btn-primary btn-lg d-flex animate__animated animate__pulse text-white" href="eighth_sem.php" style="width:200px; height: 150px;">Eight semester </a>
							</div>
						</div>

					</div>






				</div>
				<!--inner-tabs-->

			</div>
		</div>
	</section>





</body>

</html>