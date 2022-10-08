<?php
include('../../admin/connection.inc.php');

$sql = "SELECT * FROM questions";
$query = mysqli_query($conn,$sql);
$result = mysqli_fetch_array($query);

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>First_sem_subjects</title>

	<link rel="stylesheet" type="text/css" href="../style.css">
	<!-- <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"> -->


	<style>
		a {
			align-items: center;
			line-height: 28px;
			justify-content: center;

		}

		iframe {
			border: hidden;
			object-fit: contain;
			overflow: hidden;
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
								<span class="text-danger "><a class="text-secondary " href="../courses.php">courses</a>>><a class="text-secondary " href="semesters.php">Software</a>>><a class="text-secondary " href="subjects.php">First semester</a></span>

							</div><br>

						</div>
						<h2 class="section-title text-secondary ">Select subjects</h2>
					</div>

					<div class="container-fluid ">

						<div class="row m-2">
							<div class="col-lg-4 col-md-6 animate__animated animate__fadeIn animate__delay-0.5s">
								<h5 class="m-3 ">Engineering maths I</h5>
								<iframe id="pic" class="shadow-lg p-3 mb-3 bg-white rounded animate__animated animate__fadeIn" src="https://drive.google.com/file/d/1_fNfCvL73wYLLpllFMjQoX8XJIoknhxg/preview" width="300" height="200" allow=""></iframe>

								<a href="Menu.pdf" class="btn btn-success btn-lg d-flex  text-white" style="width:200px; height: 30px;"> Download </a>
							</div>


							<div class="col-lg-4  col-md-6 animate__animated animate__fadeIn animate__delay-1.0s">
								<h5 class="m-3 ">Communication Technique</h5>
								<iframe class="shadow-lg p-3 mb-3 bg-white rounded animate__animated animate__fadeIn" src="https://drive.google.com/file/d/1_fNfCvL73wYLLpllFMjQoX8XJIoknhxg/preview" width="300" height="200" allow=""></iframe>

								<a href="Menu.pdf" class="btn btn-success btn-lg d-flex  text-white" style="width:200px; height: 30px;"> Download </a>
							</div>

							<div class="col-lg-4  col-md-6 animate__animated animate__fadeIn animate__delay-1.5s">
								<h5 class="m-3 ">Fundamentals of IT </h5>
								<iframe class="shadow-lg p-3 mb-3 bg-white rounded animate__animated animate__fadeIn" src="https://drive.google.com/file/d/1_fNfCvL73wYLLpllFMjQoX8XJIoknhxg/preview" width="300" height="200" allow=""></iframe>

								<a href="Menu.pdf" class="btn btn-success btn-lg d-flex  text-white" style="width:200px; height: 30px;"> Download </a>
							</div>





						</div>
						<div class="row m-2">
							<div class="col-lg-4 col-md-6 animate__animated animate__fadeIn animate__delay-0.5s">
								<h5 class="m-3 ">Physics</h5>
								<iframe id="pic" class="shadow-lg p-3 mb-3 bg-white rounded animate__animated animate__fadeIn" src="https://drive.google.com/file/d/1_fNfCvL73wYLLpllFMjQoX8XJIoknhxg/preview" width="300" height="200" allow=""></iframe>

								<a href="Menu.pdf" class="btn btn-success btn-lg d-flex  text-white" style="width:200px; height: 30px;"> Download </a>
							</div>


							<div class="col-lg-4  col-md-6 animate__animated animate__fadeIn animate__delay-1.0s">
								<h5 class="m-3 ">PQT</h5>
								<iframe class="shadow-lg p-3 mb-3 bg-white rounded animate__animated animate__fadeIn" src="https://drive.google.com/file/d/1_fNfCvL73wYLLpllFMjQoX8XJIoknhxg/preview" width="300" height="200" allow=""></iframe>

								<a href="Menu.pdf" class="btn btn-success btn-lg d-flex  text-white" style="width:200px; height: 30px;"> Download </a>
							</div>

							<div class="col-lg-4  col-md-6 animate__animated animate__fadeIn animate__delay-1.5s">
								<h5 class="m-3 "><?php echo $result['subject']; ?></h5>
								<iframe class="shadow-lg p-3 mb-3 bg-white rounded animate__animated animate__fadeIn" src="https://drive.google.com/file/d/1uZapibiCIS5xKM0klnOPtVeOHJOT-j7r/preview" allow="autoplay" width="300" height="200" allow=""></iframe>

								<a href="Menu.pdf" class="btn btn-success btn-lg d-flex  text-white" style="width:200px; height: 30px;"> Download </a>
							</div>

						</div>


					</div>


	</section>

</body>

</html>