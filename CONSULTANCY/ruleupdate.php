                        
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
						<li class="main_nav_item"><a href="profile.php">HOME</a></li>
						<li class="main_nav_item"><a href="profile.php">Back</a></li>
						
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
					<li class="menu_item menu_mm"><a href="conHome.php">Home</a></li>
					<li class="menu_item menu_mm"><a href="profile.php">back</a></li>
					
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
			<h1 style="font-weight:bold;">RULE UPDATION</h1>
		</div>
	</div>

	<!-- Contact -->
	                    <?php
                            
							include '../connection.php';
							session_start();
							$uid=$_SESSION['uid'];
							$id=$_GET['id'];
							$qry="select * from rule where rule_id='$id'";
							$out=mysqli_query($conn,$qry);
							while($data=mysqli_fetch_array($out)){
							  // echo $uid;
						 ?>

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					
					<!-- Contact Form -->
					<div class="contact_form">
						<div class="contact_title">Update your Rules ...</div>

						<div class="contact_form_container">
							<form method="post">
								
								RULES :<textarea id="contact_form_message" class="text_field contact_form_message" name="rules"
                                 placeholder="enter your rules" required="required" data-error="Please, write us a message."><?php echo $data['rules'];?></textarea>
									
								<div style="display: flex; align-items: center; gap: 15px;">
									<button id="contact_send_btn" type="submit" class="contact_send_btn trans_200" name="submit" style="border-radius: 10px;">Update</button>
									<a href="ruleconfirm.php?id=<?php echo $data['rule_id']; ?>" 
									style=" text-align: center; color: white; background-color: #fc107; padding: 15px 10px; border-radius: 10px;"
									class="contact_send_btn trans_200">Delete</a>
								</div>

							</form>

                            
							<?php
						  
                            if(isset($_REQUEST['submit']))
                            {
                                $Rules=$_POST['rules'];
                                $qry= "UPDATE rule SET rules = '$Rules',cons_id = '$uid' WHERE rule_id = '$id'";   
                                // echo $qry; 
								$qryout= mysqli_query($conn,$qry);
									   if($qryout==TRUE)
									   {
										echo '<script>
										alert("rules updated sucessfully");
										window.location="profile.php";
										</script>';
									 }
									 else{
										 echo '<script>
										 alert("Failed to update rules");
										 window.location="ruleupdate.php";
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