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
 .btn{
	border-radius:30px;
	background-color:#ffc107;
	height:60px;
	width: 100px;
	font-weight:bold;
 }
 .lin{
	color:black;

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
						<li class="main_nav_item"><a href="adminHome.php">HOME</a></li>
						
						</ul>
						</li>
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
			<h1 style="font-weight:bold;">Consultancy Profile</h1>
		</div>
	</div>

	<!-- Events -->

	<div class="events page_section">
		<div class="container">
			
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1></h1>
					</div>
				</div>
			</div>
            
			<div class="event_items">

				<!-- Event Item -->
                <br><br>
                <?php 
                  include '../connection.php';
                 //  $id=$_GET['id'];
                  // echo $id;
                  $qry="select * from  consultancy_acc ";
                  $qryout=mysqli_query($conn,$qry);
                //   echo $qry;
                  while($data=mysqli_fetch_array($qryout)){
                ?>
               
				<div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">
                            
                            <div class="col-lg-6 order-lg-1 order-2"><br><br><br>
								<div class="event_image" style="border: 3px solid; border-color:#ffc107  #ffc107 #ffc107 #ffc107; height: 400px; width: 400px; border-radius:50px; overflow: hidden;">
								<img src="../static/images/<?php echo $data['image'];?>" alt="" style="height:350px; width:400px;">
								</div>
							</div>

							<div class="col-lg-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="consultancy_name"  style="text-align:center;"><h1 class="fs-1 text-dark"><?php echo $data['cons_name'];?></h1></div>
									<div class=""><label for="consultancy_mail" class="fs-1 text-dark">Email :</label>
                                        <?php echo $data['cons_email'];?></div>
                                    <div class=""><label for="consultancy_address" class="fs-1 text-dark" >Address :</label>
                                        <?php echo $data['cons_address'];?></div>   
                                    <div class=""><label for="consultancy_phoneno" class="fs-1 text-dark">Phone No :</label>
                                        <?php echo $data['Phone_no'];?></div>
                                    <div class=""><label for="consultancy_website" class="fs-1 text-dark">Website :</label>
                                        <?php echo $data['cons_website'];?></div>
                                    <div class=""><label for="consultancy_timing" class="fs-1 text-dark">Timing :</label>
                                        <?php echo $data['cons_timing'];?></div>    
									<p></p>
                                    <button class="btn"><a class="lin" href="consultancyconfirm.php?id=<?php echo $data['cons_id'];?>">Delete</a></button>
									<button class="btn" style="margin-left:20px; "><a class="lin"  href="consultancycourse.php?id=<?php echo $data['cons_id'];?>">Course</a></button>
									<button class="btn" style="margin-left:20px"><a class="lin" href="consultancyrule.php?id=<?php echo $data['cons_id'];?>">Rules</a></button>
								
                                </div>
								
							</div>
                            
							

						</div>	
					</div>
				</div>
                <?php
                  }
                ?>

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