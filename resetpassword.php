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
						<!-- <li class="main_nav_item"><a href="index.php">HOME</a></li> -->
						
						</ul>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			
			<a href="index.php" style="color:black; font-weight:bold;"><li class="main_nav_item">
			<i  style="margin-right:10px; color: black"></i>HOME</li></a>
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
			<div class="home_background prlx" style="background-image:url(static/images/libhead1.jpg)"></div>
		</div>
		<div class="home_content" style="background-color:transparent;">
			<h1 style="font-weight:bold;">  Password Info</h1>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					
					<!-- Contact Form -->
					<div class="contact_form">
						<div class="contact_title">Change password</div>

						<div class="contact_form_container">
							<form method="POST">
                               Reset password<input id="rpassword" 
                                            class="input_field contact_form_name" 
                                            type="password" 
                                            name="rpassword" 
                                            placeholder="Password" 
                                            required="required" 
                                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=]).{8,16}" 
                                            title="Password must be 8-16 characters long, include at least one uppercase letter, one lowercase letter, one digit, and one special character." 
                                            data-error="Valid password is required.">

                                
							   Confirm	password<input id="cpassword" 
                                            class="input_field contact_form_name" 
                                            type="password" 
                                            name="cpassword" 
                                            placeholder="Password" 
                                            required="required" 
                                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=]).{8,16}" 
                                            title="Password must be 8-16 characters long, include at least one uppercase letter, one lowercase letter, one digit, and one special character." 
                                            data-error="Valid password is required.">
								
								
								<button id="contact_send_btn" type="submit" class="contact_send_btn trans_200" name="submit" value="submit" style="margin-left: 15px; align-content:center; text-align:center; color:white; border-radius:10px">SUBMIT</button>
							</form>
							<?php
if (isset($_REQUEST['submit'])) {
    include "connection.php";

    // Fetch input data
    $source = $_GET['source'];
    $email = $_GET['email'];
    $rpassword = $_POST['rpassword'];
    $cpassword = $_POST['cpassword'];

    // Check if passwords match
    if ($rpassword === $cpassword) {
        // Determine the correct column name for email
        $email_column = ($source === 'consultancy_acc') ? 'cons_email' : 'email';
        $user_type = ($source === 'consultancy_acc') ? 'consultancy' : 'user';

        // Prepare queries
        $qry = "UPDATE $source SET password='$rpassword' WHERE $email_column='$email'";
        $qry2 = "UPDATE login SET password='$cpassword', user_type='$user_type', status='approved' WHERE user_email='$email'";

        // Execute queries
        $out = mysqli_query($conn, $qry);
        $out2 = mysqli_query($conn, $qry2);

        // Debug queries (optional)
        echo $qry;
        echo $qry2;

        // Check if queries succeeded
        if ($out && $out2) {
            echo '<script>
                    alert("Password updated successfully");
                    window.location="login.php";
                  </script>';
        } else {
            echo '<script>
                    alert("Password update failed: ' . mysqli_error($conn) . '");
                  </script>';
        }
    } else {
        echo '<script>
                alert("Passwords do not match");
              </script>';
    }
}
?>


						</div>
					</div>
						
				</div>

				<div class="col-lg-4">
					<div class="about">
						
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
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/contact_custom.js"></script>

</body>
</html>