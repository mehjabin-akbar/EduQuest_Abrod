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
			<h1 style="font-weight:bold;"> Registration Info </h1>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					
					<!-- Contact Form -->
					<div class="contact_form">
    <div class="contact_title">Insert Your details</div>

    <div class="contact_form_container">
        <form method="POST">
            user_email<input class="input_field contact_form_email" type="email" placeholder="E-mail" title="The email must include an '@' symbol" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required="required" data-error="Valid email is required." name="email">
            Phone number:<input id="w3lName" class="input_field contact_form_phone_no" type="tel" name="Phone_no" placeholder="Your Phone Number" required="required" maxlength="10" pattern="\d{10}" title="Please enter a valid 10-digit phone number without spaces or special characters." data-error="A valid 10-digit phone number is required.">
            <button id="contact_send_btn" type="submit" class="contact_send_btn trans_200" name="submit" value="submit" style="margin-left: 15px; align-content:center; text-align:center; color:white; border-radius:10px">SUBMIT</button>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            include('connection.php');

            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $Phone_no = filter_var($_POST['Phone_no'], FILTER_SANITIZE_STRING);

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Invalid email format.";
                exit;
            }

            $query = "
                SELECT 'consultancy_acc' AS source, cons_email, Phone_no
                FROM consultancy_acc
                WHERE cons_email = ?
                AND Phone_no = ?
                UNION 
                SELECT 'user_acc' AS source, email, Phone_no
                FROM user_acc
                WHERE email = ?
                AND Phone_no = ?";

            if ($stmt = $conn->prepare($query)) {
                $stmt->bind_param("ssss", $email, $Phone_no, $email, $Phone_no);

                $stmt->execute();
                $stmt->store_result();

                if ($stmt->num_rows > 0) {
                    $stmt->bind_result($source, $emailResult, $Phone_noResult);

                    while ($stmt->fetch()) {
                        echo "###";
                    }

                    echo "<script>window.location = 'resetpassword.php?source=' + encodeURIComponent('" . $source . "') + '&email=' + encodeURIComponent('" . $email . "');</script>";
                } else {
                    echo '<script>
                        alert("Email And Phone Number does not match");
                        window.location="forgotpass.php";
                        </script>';
                }
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