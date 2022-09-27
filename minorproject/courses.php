<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">


	<title>courses</title>

	<style >
		  figure{
			align-items: center;
			line-height: 28px;
			justify-content: center;

			--animate-duration: 1000ms;
  --animate-delay: 0.9s;

		}

	</style>
</head>
<body>

	<!-- <header -->

		<?php
		include 'includes/header.php';
		include 'includes/scripts.php';
		?>
		<!-- header ends here -->

		<!-- section starts here  -->
		<section id="popular-books" class="bookshelf">
			<div class="container">
				<div class="row">
					<div class="inner-content">

						<div class="section-header align-center">
							<div class="title">
								<span>Our courses</span>
							</div>
							<h2 class="section-title">Popular Courses</h2>
						</div>

					

						<div class="tab-content">
								<div id="all-genre" data-tab-content class="active" data-aos="fade-up">
									<div class="grid">

										

										<figure class="product-style animate__animated animate__fadeIn ">
											<a href="computer/semesters.php"><img src="images/tab-item8.jpg" alt="Books" class="product-item mr-4"></a>
											<figcaption>
												<h3>Computer Engineering</h3>
											</figcaption>
										</figure>

										

										<figure class="product-style animate__animated animate__fadeIn">
											<a href="software/semesters.php"><img src="images/tab-item8.jpg" alt="Books" class="product-item mr-4"></a>
											<figcaption>
												<h3>Software Engineering</h3>
											</figcaption>
										</figure>

									</div>

								</div>
								

								

								

							</div>

					</div><!--inner-tabs-->

				</div>
			</div>
		</section>

		<?php
include 'includes/footer.php';
		?>





	</body>
	</html>