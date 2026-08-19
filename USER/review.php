<!DOCTYPE html>
<html lang="en">
<head>
<title>Course - Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<style>
	/* Hide the default radio button */
.rating input {

    display: none;
}

/* Style the labels to look like stars */
.rating label {
    font-size: 2rem;
    color: #ddd;
    cursor: pointer;
    padding: 0 0.1rem;
}

/* Change star color on hover */
.rating label:hover,
.rating label:hover ~ label {
    color: #f39c12;
}

/* Change color based on checked state */
.rating input:checked ~ label {
    color: #f39c12;
}
.rating{
	direction:rtl;
}

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
						<li class="main_nav_item"><a href="userHome.php">home</a></li>
						<li class="main_nav_item"><a href="bookdetails.php">Back</a></li>
						
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
					<li class="menu_item menu_mm"><a href="index.html">Home</a></li>
					<li class="menu_item menu_mm"><a href="#">About us</a></li>
					<li class="menu_item menu_mm"><a href="courses.html">Courses</a></li>
					<li class="menu_item menu_mm"><a href="elements.html">Elements</a></li>
					<li class="menu_item menu_mm"><a href="news.html">News</a></li>
					<li class="menu_item menu_mm"><a href="#">Contact</a></li>
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
	
	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(../static/images/libhead1.jpg)"></div>
		</div>
		<div class="home_content" style="background-color:transparent;">
			<h1 style="font-weight:bold;">Feedback</h1>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					
					<!-- Review Start -->
					<div class="contact_form">
						<div class="contact_title">Tell Your Experience about consultancy</div>
                    
						<?php
                            
							$id=$_GET['id'];
                         ?>
						 <center>
						<div class="contact_form_container">
							<form method="post">
							<h1 style="color:black">Rate Us</h1>
							    <div class="rating">
									<input type="radio" id="star5" name="star" value="5">
									<label for="star5" title="5 stars">&#9733;</label>
									<input type="radio" id="star4" name="star" value="4">
									<label for="star4" title="4 stars">&#9733;</label>
									<input type="radio" id="star3" name="star" value="3">
									<label for="star3" title="3 stars">&#9733;</label>
									<input type="radio" id="star2" name="star" value="2">
									<label for="star2" title="2 stars">&#9733;</label>
									<input type="radio" id="star1" name="star" value="1">
									<label for="star1" title="1 star">&#9733;</label>
								</div>
								
								<textarea class="form-control border-1"  id="review" name="review" required style="height: 160px" minlength="10" maxlength="150"
								placeholder="Provide Feedback on Your counselling  (Max 150 characters)"></textarea>
								 <small id="charCount" class="form-text text-muted">150 characters remaining</small><br>

								 
                                 <button id="contact_send_btn"  type="submit" name="submit" class="contact_send_btn trans_200" 
                                 value="submit" style="margin-left: 15px; align-content:center; text-align:center; color:white; border-radius:10px"> SUBMIT </button>
                                
                            </form>  
                         </center>
						 <script>
							document.addEventListener('DOMContentLoaded', function() {
								var textarea = document.getElementById('review');
								var charCount = document.getElementById('charCount');
								var maxLength = 150;

								textarea.addEventListener('input', function() {
									var remaining = maxLength - textarea.value.length;
									charCount.textContent = remaining + ' characters remaining';
									if (remaining < 0) {
										charCount.textContent = '0 characters remaining';
									}
								});
							});
                    	</script>	 
							<?php
                            if(isset($_REQUEST['submit']))
                            {
								include '../connection.php';
                                $Review=$_POST['review'];
                                $star=$_POST['star'];
                               
    
                                $qry= "insert into review(`review`,`star`,`book_id`)
                                       values('$Review','$star','$id')";
									   
                                // echo $qry; 
								$qryout= mysqli_query($conn,$qry);
									   if($qryout==TRUE)
									   {
										echo '<script>
										alert("sucess");
										window.location="bookdetails.php";
										</script>';
									 }
									 else{
										 echo '<script>
										 alert("failed");
										 window.location="review.php";
										 </script>';
									  }
									  
								 }
								 ?>
						</div>
					</div>
					<!-- Review End 	 -->
				</div>

				<div class="col-lg-4">
					<div class="about">
						

					</div>
				</div>

			</div>

			

		</div>
	</div>

	

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/contact_custom.js"></script>

</body>
</html>