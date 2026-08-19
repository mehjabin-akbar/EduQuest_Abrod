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
						<li class="main_nav_item"><a href="index.php">home</a></li>
						<li class="main_nav_item"><a href="index.php">BACK</a></li>
						
						</ul>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
		<a href="index.php" style="color:black; font-weight:bold;"><li class="main_nav_item">
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
			<div class="home_background prlx" style="background-image:url(static/images/libhead1.jpg)"></div>
		</div>
		<div class="home_content" style="background-color:transparent;">
			<h1 style="font-weight:bold;">User Sign-Up</h1>
		</div>
	</div>

	<!-- registration -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					
					<!-- registration Form -->
					<div class="contact_form">
						<center>
						<div class="contact_title"> Get Started Here...</div><br>
                        <label for="terms"  style=>
										Already Have An Account?<a href="login.php"> Login</a></center>
						<div class="contact_form_container">
							<form method="POST"  enctype="multipart/form-data">
								Username:<input id="user_name" class="input_field contact_form_name" type="text" name="user_name"
                                 placeholder="your Username" required="required" data-error="Name is required.">
								E-mail:<input id="email" class="input_field contact_form_email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
								 name="email" placeholder="your E-mail" required="required" title="The email must include an '@' symbol" data-error="Valid email is required.">
								 IMAGE :<input id="img" class="input_field contact_form_name" type="file"  name="img"
			                     placeholder="insert an image" required="required" data-error="fill the field.">
                                Date of Birth:<input id="DOB" class="input_field contact_form_DOB" type="date" name="DOB"
                                placeholder="your DOB" required="required" data-error="Valid DOB is required.">
                                <label>Gender:</label>
                                     <input id="gender"  type="radio" name="gender" value="male"
                                     required="required" data-error="gender is required.">Male
                                     <input id="gender"  type="radio" name="gender" value="female"
                                     required="required" data-error="gender is required.">Female<br><br>
                                Phone number:<input id="w3lName"  
										class="input_field contact_form_phone_no" 
										type="tel" 
										name="Phone_no" 
										placeholder="Your Phone Number" 
										required="required" 
										maxlength="10" 
										pattern="\d{10}" 
										title="Please enter a valid 10-digit phone number without spaces or special characters." 
										data-error="A valid 10-digit phone number is required.">


                                Password:<input id="contact_form_password" class="input_field contact_form_email" type="password" 
								name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
										title="Password must be at least 8 characters long, contain at least one number, one lowercase letter, and one uppercase letter." 
										required required="required" data-error="Valid password is required.">
								<button id="contact_send_btn" type="submit" class="contact_send_btn trans_200" name="submit"
									value="submit" style="margin-left: 15px; align-content:center; text-align:center; color:white; border-radius:10px" 
									class="contact_send_btn trans_200">register</button>
									
							</form>
                            <?php
                            if(isset($_REQUEST['submit']))
                            {
                                include ('connection.php');
                                $user_name=$_POST['user_name'];
                                $email=$_POST['email'];
                                $DOB=$_POST['DOB'];
                                $gender=$_POST['gender'];
                                $Phone_no=$_POST['Phone_no'];
                                $password=$_POST['password'];
								$image=$_FILES['img']['name'];
                                $tempname=$_FILES['img']['tmp_name'];
                                $folder='images/'.$image;
								if(move_uploaded_file($tempname,'static/images/'.$image))
								{
									$qryCheck = "SELECT COUNT(*) AS cnt FROM `user_acc` WHERE `email` = '$email' OR `Phone_no`= '$Phone_no'";
									$qryOut = mysqli_query($conn,$qryCheck);

									$fetchData = mysqli_fetch_array($qryOut);
									if ($fetchData['cnt']> 0 )
										{
										echo "<script>
											alert('Already exist an Acconunt with same Email and Phone number');
											window.location = 'login.php';
											</script>";
										}
									else
									{
										$qry= "insert into user_acc(`user_name`,`email`,`DOB`,`gender`,`Phone_no`,`password`,`image`)
											values('$user_name','$email','$DOB','$gender','$Phone_no','$password','$image')";
										$qry2="insert into login(`reg_id`,`user_type`,`user_email`,`password`)
										values((select max(user_id)from user_acc),'user','$email','$password')";

										// echo $qry2;  
										// echo $qry1;  
										$qryout= mysqli_query($conn,$qry);
										$qryout2=mysqli_query($conn,$qry2);

										if($qryout==TRUE && $qryout2==TRUE)
										{
										echo '<script>
										alert("sucess");
										window.location="login.php";
										</script>';
										}
										else{
											echo '<script>
											alert("failed");
											window.location="register.php";
											</script>';
										}
									
									}
								}
						}
                            ?>
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