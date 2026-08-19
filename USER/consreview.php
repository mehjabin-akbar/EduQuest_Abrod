

<!DOCTYPE html>
<html lang="en">
<head>
<title>Course</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<style>

</style>


</style>
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img src="images/logo.png" alt="">
					<span style="font-size:25px;">EduQuest Abroad</span>
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
						<li class="main_nav_item"><a href="userHome.php">back</a></li>
						<!-- <li class="main_nav_item"><a href="consultancycourse.php">Courses</a></li>
						<li class="main_nav_item"><a href="consultancyrules.php">Rules</a></li>
						<li class="main_nav_item"><a href="managebooking.php">Bookings </a></li> -->
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
		<a href="../index.php" style="color:black; font-weight:bold;"><li class="main_nav_item">
		<i class="fas fa-power-off me-6 " style="margin-right:10px; color: black"></i>LOG OUT</li></a>
		</div>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>

	</header>
	
	<!-- Menu -->
	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="#">Home</a></li>
					<li class="menu_item menu_mm"><a href="#">About us</a></li>
					<li class="menu_item menu_mm"><a href="courses.html">Courses</a></li>
					<li class="menu_item menu_mm"><a href="cons_acc.php">consultancy</a></li>
					<li class="menu_item menu_mm"><a href="register.php">register</a></li>
					<li class="menu_item menu_mm"><a href="contact.html">Contact</a></li>
					<li class="menu_item menu_mm"><a href="login.php">login</a></li>
				</ul>

				<!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>

				<div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
			</div>

		</div>

	</div>
	
	<!-- LOOP -->

	<div class="hero_boxes">
		<div class="hero_boxes_inner">
			<div class="container">
				<div class="row">

				</div>
			</div>
		</div>
	</div>

	
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						
					</div>
				</div>
			</div>

			<div class="row course_boxes">
				
				
			</div>
		</div>		
	</div>

	

	<!-- Testimonials -->

	

	<div class="testimonials page_section">
		<div class="testimonials_background" style="background-image:url(../static/images/bg4.webp)"></div>
		<div class="testimonials_background_container prlx_parent">
			<div class="testimonials_background prlx" style="background-image:url(../static/images/bg4.webp)"></div>
		</div>
		<div class="container">

			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>What our client say</h1>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					
					<div class="testimonials_slider_container">

						<!-- Testimonials Slider -->
						<div class="owl-carousel owl-theme testimonials_slider">
							
							<!-- Testimonials Item -->
							<?php
								include '../connection.php';
								$id= $_GET['id'];
								$qry = "SELECT review.*,user_acc.*,booking.*,course_details.course_id
										FROM review
										JOIN booking ON review.book_id = booking.book_id
										JOIN user_acc ON user_acc.user_id = booking.user_id
										JOIN course_details ON booking.course_id = course_details.course_id
										WHERE course_details.cons_id ='$id'";
								$out=mysqli_query($conn,$qry);
								if(mysqli_num_rows($out)>0){
									while($data=mysqli_fetch_array($out)){
							?>
							<div class="owl-item">
							
								<div class="testimonials_item text-center">
									<p class="testimonials_text"><?php echo $data['review'];?></p>
									<?php
											$rating = $data['star']; 
											$starClass = "text-muted"; 
											$activeStarClass = "text-primary"; 
										?>
								<div class="d-flex justify-content-center">
								<div class="d-flex justify-content-center">
									<?php for ($i = 1; $i <= 5; $i++): ?>
										<i class="fas fa-star" style="color: <?php echo $i <= $rating ? '#FFBF00' : 'gray'; ?>;"></i>
									<?php endfor; ?><br><br>
								</div>
								</div>
									<div class="testimonial_user">
										<div class="testimonial_image mx-auto">
											<img src="../static/images/<?php echo $data['image'];?>" alt="">
										</div>
										<div class="testimonial_name"><?php echo $data['user_name'];?></div>
										
									</div>
								</div>
							</div>
							<?php
								}}
							?>
						</div>
						

					</div>
				</div>
			</div>

		</div>
	</div>

	

	

<!-- JavaScript Libraries -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>

</body>
</html>