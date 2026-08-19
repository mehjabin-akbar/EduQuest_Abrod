

                        <?php
                            
                          include '../connection.php';
						  session_start();
						  $uid=$_SESSION['uid'];
                          $id=$_GET['id'];
                          $qry="select * from course_details where course_id='$id'";
                          $out=mysqli_query($conn,$qry);
                          while($data=mysqli_fetch_array($out)){
                            // echo $uid;
                        ?>
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
						<li class="main_nav_item"><a href="conHome.php">HOME</a></li>
						<li class="main_nav_item"><a href="profile.php">BACK</a></li>
						
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
			<h1 style="font-weight:bold;">Course updation</h1>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					
					<!-- Contact Form -->
					<div class="contact_form">
						<div class="contact_title">Update your course....</div>

						<div class="contact_form_container">
							<form method="post" enctype="multipart/form-data">
                            <label for="course_name">Course Name:</label>
						
						<input id="course_name" class="input_field contact_form_name" type="text" name="course_name"
						value="<?php echo $data['course_name'];?>">
						
                        <label for="Country">COUNTRY:</label>
					    <!-- <input id="Country" class="input_field contact_form_name" type="text" name="Country"
						value="<?php echo $data['country'];?>" required="required" data-error="Country is required."> -->

						<input id="Country" class="input_field contact_form_name" type="text" name="country" value="<?php echo $data['country'];?>" required="required" data-error="Country is required.">


						<div class="styled-dropdown">
						<label for="eligibility" >ELIGIBILITY:</label>
                        <select id="eligibility" class="form-control" name="eligibility">
                            <option value="----SELECT Eligibility----">----SELECT ELIGIBILITY----</option>
                            <option value="10th"<?php if($data['eligibility']=='10th') echo'selected';?>>10th</option>
                            <option value="12th" <?php if($data['eligibility']=='12th') echo'selected';?>>12th</option>
                            <option value="Graduate"<?php if($data['eligibility']=='Graduate') echo'selected';?>>Graduate</option>
                            <option value="Post Graduate" <?php if($data['eligibility']=='Post Graduate') echo'selected';?>> Post Graduate</option>
					    </select></div>

						IMAGE :<input id="img" class="input_field contact_form_name" type="file"  name="img"
			                placeholder="insert an image" required="required" data-error="fill the field.">

                            Description:<textarea id="contact_form_message" class="text_field contact_form_message" name="description" 
                            placeholder="message" required="required" data-error="Please, write us a message."><?php echo $data['description'];?></textarea>

								  <div class="col-12 d-flex justify-content-between">
									<button id="contact_send_btn" type="submit" class="contact_send_btn trans_200" name="submit"style="border-radius:5px"
									value="submit">Update</button>
									<a href="courseconfirm.php?id=<?php echo $data['course_id'];?>" style="margin-left: 15px; align-content:center; text-align:center; color:white;
									border-radius:5px" class="contact_send_btn trans_200">Delete</a>
									</div>
							</form>

                           
							<?php
                          }
                            if(isset($_REQUEST['submit']))
                            {
                                $course_name=$_POST['course_name'];
                                $country=$_POST['country'];
                                $eligibility=$_POST['eligibility'];
                                $description=$_POST['description'];
                                $image=$_FILES['img']['name'];
                                $tempname=$_FILES['img']['tmp_name'];
                                $folder='images/'.$image;
                            if(move_uploaded_file($tempname,'../static/images/'.$image))
							{
    
                                $qry= "update course_details set course_name='$course_name',country='$country',eligibility='$eligibility',description='$description',
								image='$image',cons_id='$uid' where course_id='$id'";
                                    
									   
                                // echo $qry; 
								$qryout= mysqli_query($conn,$qry);
									   if($qryout==TRUE)
									   {
										echo '<script>
										alert("Course successfully Updated");
										window.location="profile.php";
										</script>';
									 }
									 else{
										 echo '<script>
										 alert("Failed to Update course ");
										 window.location="addcon.php";
										 </script>';
									  }
									  
								 }}
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