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
						<li class="main_nav_item"><a href="userHome.php">home</a></li>
						<li class="main_nav_item"><a href="userHome.php">BACK</a></li>
						
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
	<?php
	include '../connection.php';
	session_start();
	
	$uid=$_SESSION['uid'];
	$id=$_GET['id'];
	$qry="select * from course_details where course_id='$id'";

	$out=mysqli_query($conn,$qry);
	
	while($data=mysqli_fetch_array($out)){
		$cons_id=$data['cons_id'];
	// echo $uid;

	?>
	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(../static/images/libhead1.jpg)"></div>
		</div>
		<div class="home_content" style="background-color:transparent;">
			<h1 style="font-weight:bold;">Book Your Appointment</h1>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					
					<!-- Contact Form -->
					<div class="contact_form">
						<div class="contact_title">Confirm Your Reservation!!!</div>

						<div class="contact_form_container">
						<form method="post" onsubmit="return validateDate()">
    <!-- CONSULTANCY: -->

    <div class="styled-dropdown">
        <!-- CONSULTANCY DROPDOWN - ADD YOUR PHP CODE TO FETCH CONSULTANCY DATA -->
    </div>
    <br>
    <label>SERVICE MODE:</label>
    <select id="course" class="form-control" name="service" required>
        <option value="">----SELECT MODE----</option>
        <option value="online">Online</option>
        <option value="Offline">Offline</option>
    </select><br>
    
    BOOK DATE:
    <input id="booking_date" class="input_field contact_form_name" type="date" name="bdate"
        placeholder="booking date" required="required">
    
    TIME:
    <input id="contact_form_name" class="input_field contact_form_name" type="time" name="time"
        placeholder="preferred time" required="required">
    
    <input type="checkbox" id="terms" name="terms" required style="vertical-align:right; margin-right:5px;">
    <label for="terms" style="vertical-align:right;">
        I agree to the terms and conditions. <a href="./ruleview.php?id=<?php echo $cons_id;?>">Visit</a>
    </label>
    <button id="contact_send_btn" type="submit" name="submit" class="contact_send_btn trans_200"
        value="submit" style="margin-left: 15px; align-content:center; text-align:center; color:white; border-radius:10px">
        BOOK NOW
    </button>
</form>

                            
							<?php
	                    } 
                            if(isset($_REQUEST['submit']))
                            {
                                $book_date=$_POST['bdate'];
                                $time=$_POST['time'];
                                $service=$_POST['service']; 

                                $qry= "insert into booking(`service`,`book_date`,`course_id`,`user_id`,`timing`,`status`)
                                       values('$service','$book_date','$id','$uid','$time','Pending')";
									   
                                // echo $qry; 
								$qryout= mysqli_query($conn,$qry);
									   if($qryout==TRUE)
									   {
										echo '<script>
										alert("sucess");
										window.location="userHome.php";
										</script>';
									 }
									 else{
										 echo '<script>
										 alert("failed");
										 window.location="userHome.php";
										 </script>';
									  }
									  
								 }
								 ?>
								 <script>
    // Function to set the minimum date to today and validate
    function validateDate() {
        var bookingDate = document.getElementById('booking_date').value;
        var today = new Date().toISOString().split('T')[0];

        // If the selected date is before today, show an alert and return false
        if (bookingDate < today) {
            alert('Booking date must be today or a future date.');
            return false;
        }
        return true;
    }

    // Automatically set the minimum date in the date picker to today
    document.getElementById('booking_date').setAttribute('min', new Date().toISOString().split('T')[0]);
</script>
						</div>
					</div>
						
				</div>

				<div class="col-lg-4">
					
							</ul>
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
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/contact_custom.js"></script>

</body>
</html>