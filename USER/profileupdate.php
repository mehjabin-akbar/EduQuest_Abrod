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
						<li class="main_nav_item"><a href="userHome.php">HOME</a></li>
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
			<h1 style="font-weight:bold;">User Updation</h1>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					
					<!-- Contact Form -->
					<div class="contact_form">
						<div class="contact_title">Update the info...</div>
				<?php
					include '../connection.php';
					//  $id=$_GET['id'];
					session_start();
					$uid=$_SESSION['uid'];
					$qry="select * from user_acc where user_id='$uid'";
					$qin=mysqli_query($conn,$qry);
					if(mysqli_num_rows($qin)>0)
					{
					while($data=mysqli_fetch_assoc($qin))
					{
				?>
						<div class="contact_form_container">
							<form method="POST" >
								Username:<input id="user_name" class="input_field contact_form_name" type="text" name="user_name"  value="<?php echo $data['user_name'];?>" 
                                 placeholder="your Username" required="required" data-error="Name is required.">
								IMAGE :<input id="img" class="input_field contact_form_name" type="file"  name="img"
								 placeholder="insert an image" required="required" data-error="fill the field.">
								E-mail:<input id="email" class="input_field contact_form_email" type="email"
								 name="email"  value="<?php echo $data['email'];?>"
                                 placeholder="your E-mail" required="required" data-error="Valid email is required.">
                                Date of Birth:<input id="DOB" class="input_field contact_form_DOB" type="date" name="DOB"  value="<?php echo $data['DOB'];?>"
                                placeholder="your DOB" required="required" data-error="Valid DOB is required.">
                                <label>Gender:</label>
                                     <input id="gender"  type="radio" name="gender" value="male" <?php if(isset($data['gender']) && $data['gender']=='male') echo 'checked';?>
                                     required="required" data-error="gender is required.">Male
                                     <input id="gender"  type="radio" name="gender" value="female" <?php if(isset($data['gender']) && $data['gender']=='female') echo 'checked';?>
                                     required="required" data-error="gender is required.">Female<br><br>
                                Phone number:<input id="Phone_no" class="input_field contact_form_phone_no" type="tel" name="Phone_no" value="<?php echo $data['Phone_no'];?>"
                                 placeholder="your Phone_no" required="required" data-error="Valid phone_no is required.">
                                Password:<input id="contact_form_password" class="input_field contact_form_email" type="password" value="<?php echo $data['password'];?>"
								name="password" required="required" data-error="Valid password is required.">
								<div class="col-12 d-flex justify-content-between">
			                    <button id="contact_send_btn" type="submit" class="contact_send_btn trans_200" name="submit"style="border-radius:5px"
                                value="submit">Update</button>
                                <a href="profiledelete.php?id=<?php echo $data['user_id'];?>" style="margin-left: 15px; align-content:center; 
                                text-align:center; color:white; border-radius:5px" class="contact_send_btn trans_200">Delete</a>
                                <br><br><br>
                                </div>
							</form>
                            <?php
					}
					}
                            if(isset($_REQUEST['submit']))
                            {
                                include ('../connection.php');
                                $user_name=$_POST['user_name'];
                                $email=$_POST['email'];
                                $DOB=$_POST['DOB'];
                                $gender=$_POST['gender'];
                                $Phone_no=$_POST['Phone_no'];
                                $password=$_POST['password'];
								$image=$_FILES['img']['name'];
                                $tempname=$_FILES['img']['tmp_name'];
                                $folder='images/'.$image;
                            
						    if(move_uploaded_file($tempname,'../static/images/'.$image))
							{
                                $qry= "update user_acc set user_name='$user_name', image='$image',email='$email',DOB='$DOB',gender='$gender',Phone_no='$Phone_no',password='$password' where user_id='$uid'";
					
								$qry2="update login set user_type='user',user_email='$email',password='$password' where reg_id='$uid'";
								
                                // echo $qry2;  
                                $qryout= mysqli_query($conn,$qry);
                                $qryout2=mysqli_query($conn,$qry2);
                                if($qryout==TRUE && $qryout2==TRUE)
                                {
                                   echo '<script>
                                   alert("Account Updated successfully");
                                   window.location="profile.php";
                                   </script>';
                                }
                                else{
                                    echo '<script>
                                    alert("Updation failed");
                                    window.location="profile.php";
                                    </script>';
                                 }
								 
                            }
						    }
                            ?>
						</div>
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
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/contact_custom.js"></script>

</body>
</html>