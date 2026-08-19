<?php
     include '../connection.php';
    //  $id=$_GET['id'];
	session_start();
	$uid=$_SESSION['uid'];
     $qry="select * from consultancy_acc where cons_id='$uid'";
     $qin=mysqli_query($conn,$qry);
     if(mysqli_num_rows($qin)>0)
     {
       while($data=mysqli_fetch_assoc($qin)){
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
						<li class="main_nav_item"><a href="conHome.php">home</a></li>
						<li class="main_nav_item"><a href="profile.php">BACK</a></li>
						<!-- <li class="main_nav_item"><a href="courses.html">courses</a></li>
						<li class="main_nav_item"><a href="elements.html">elements</a></li>
						<li class="main_nav_item"><a href="news.html">news</a></li>
						<li class="main_nav_item"><a href="#">contact</a></li> -->
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<!-- <img src="images/phone-call.svg" alt=""> -->
			<!-- <span>+43 4566 7788 2457</span> -->
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
					<li class="menu_item menu_mm"><a href="index.php">Home</a></li>
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
		<div class="home_content"  style="background-color:transparent;">
			<h1 style="font-weight:bold;"> Consultant Update </h1>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					
					<!-- Contact Form -->
					<div class="contact_form">
						<div class="contact_title">Update the Consultancy Crew ...</div>

						<div class="contact_form_container">
			<form method="post" enctype='multipart/form-data'>
			NAME :<input id="cons_name" class="input_field contact_form_name" type="text" name="cons_name" value="<?php echo $data['cons_name'];?>" 
			placeholder="Name" required="required" data-error="Name is required.">
            E-MAIL ID :<input id="cons_email" class="input_field contact_form_name" type="email"  name="cons_email" value="<?php echo $data['cons_email'];?>"
			placeholder="email" required="required" data-error="fill the field.">
            WEBSITE :<input id="cons_website" class="input_field contact_form_name" type="text" name="cons_website"value="<?php echo $data['cons_website'];?>"
			  placeholder="site" required="required" data-error="fill the field.">
            TIME :<input id="cons_timing" class="input_field contact_form_name" type="text"  name="cons_timing" value="<?php echo $data['cons_timing'];?>"
			placeholder="timings" required="required" data-error="fill the field.">
            PHONE NUMBER<input id="Phone_no" class="input_field contact_form_name" type="text"  name="Phone_no"value="<?php echo $data['Phone_no'];?>"
			placeholder="phone no" required="required" data-error="fill the field.">
            IMAGE :<input id="img" class="input_field contact_form_name" type="file"  name="img" 
			placeholder="insert an image" required="required" data-error="fill the field.">
            <!-- PASSWORD :<input id="password" class="input_field contact_form_name" type="text" name="password"
			id="password" required="required" data-error="fill the field."> -->
			PASSWORD :<input id="contact_form_password" class="input_field contact_form_email" type="password" value="<?php echo $data['password'];?>"
								 name="password" required="required" data-error="Valid password is required.">
			ADDRESS :<textarea id="cons_address" class="text_field contact_form_message" name="cons_address"
			 placeholder="enter your address" required="required" data-error="Please,enter your address." ><?php echo $data['cons_address'];?> </textarea>
			 DESCRIPTION :<textarea id="description" class="text_field contact_form_message" name="description" minlegth="80" maxLength="80"
			 required="required" data-error="Please,enter your address." placeholder="enter your description (Max 80 characters)">
			 <?php echo $data['description'];?></textarea>
			 <?php 
				$desLength = isset($data['description']) ? strlen($data['description']) : 0; 
				?>
			<small id="charCount" class="form-text text-muted"><?php echo 80 - $desLength; ?>characters remaining</small><br><br>
			 <div class="col-12 d-flex justify-content-between">
			 <button id="contact_send_btn" type="submit" class="contact_send_btn trans_200" name="submit"style="border-radius:5px"
			 value="submit">Update</button>
			 <a href="profileconfirm.php?id=<?php echo $data['cons_id'];?>" style="margin-left: 15px; align-content:center; text-align:center; color:white;
			  border-radius:5px" class="contact_send_btn trans_200">Delete</a>
			</div>
							</form>
							<script>
								var maxLength = 80;
								var initialLength = <?php echo $desLength; ?>;

								document.addEventListener('DOMContentLoaded', function() {
									var textarea = document.getElementById('description');
									var charCount = document.getElementById('charCount');
									charCount.textContent = (maxLength - initialLength) + ' characters remaining';

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
    }}
    if(isset($_REQUEST['submit']))
    {
        include ('../connection.php');
        $cons_name=$_POST['cons_name'];
        $cons_email=$_POST['cons_email'];
        $cons_website=$_POST['cons_website'];
        $cons_address=$_POST['cons_address'];
		$description=$_POST['description'];
        $cons_timing=$_POST['cons_timing'];
        $Phone_no=$_POST['Phone_no'];
        $password=$_POST['password'];
        $image=$_FILES['img']['name'];
        $tempname=$_FILES['img']['tmp_name'];
        $folder='images/'.$image;
    if(move_uploaded_file($tempname,'../static/images/'.$image))
    {
    
    $qry= "update consultancy_acc set cons_name='$cons_name',cons_email='$cons_email',cons_website='$cons_website',cons_address='$cons_address',
    description='$description',cons_timing='$cons_timing',Phone_no='$Phone_no',image='$image',password='$password' where cons_id='$uid'";
    $qry1= "update login set user_type='consultancy',user_email='$cons_email',password='$password' where reg_id='$uid'";
    
    // echo $qry;
    
    $qryout= mysqli_query($conn,$qry);
    $qryout1= mysqli_query($conn,$qry1);

   
    if($qryout==TRUE && $qryout1==TRUE)
    {
        echo '<script>
        alert("Successfully updated the profile ");
        window.location="profile.php";
        </script>';
    }
    else{
        echo '<script>
        alert("failed to update");
        window.location="profile.php";
        </script>';
    }
    }
    }
?>

						</div>
					</div>
						
				</div>

				<!-- <div class="col-lg-4">
					<div class="about">
						<div class="about_title">Join Courses</div>
						<p class="about_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum. Etiam eu purus nec eros varius luctus. Praesent finibus risus facilisis ultricies. Etiam eu purus nec eros varius luctus.</p>

						<div class="contact_info">
							<ul>
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									Blvd Libertad, 34 m05200 Arévalo
								</li>
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<img src="images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									0034 37483 2445 322
								</li>
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<img src="images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>hello@company.com
								</li>
							</ul>
						</div> -->

					</div>
				</div>

			</div>

			<!-- Google Map -->

			<div class="row">
				<div class="col">
					<div id="google_map">
						<div class="map_container">
							<div id="map"></div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			
			<!-- Newsletter -->

			<div class="newsletter">
				<div class="row">
					<div class="col">
						<div class="section_title text-center">
							<h1>Subscribe to newsletter</h1>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col text-center">
						<div class="newsletter_form_container mx-auto">
							<form action="post">
								<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
									<input id="newsletter_email" class="newsletter_email" type="email" placeholder="Email Address" required="required" data-error="Valid email is required.">
									<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">Subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>

			<!-- Footer Content -->

			<div class="footer_content">
				<div class="row">

					<!-- Footer Column - About -->
					<div class="col-lg-3 footer_col">

						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<img src="images/logo.png" alt="">
								<span>course</span>
							</div>
						</div>

						<p class="footer_about_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum, tempor lacus.</p>

					</div>

					<!-- Footer Column - Menu -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Menu</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_list_item"><a href="index.html">Home</a></li>
								<li class="footer_list_item"><a href="#">About Us</a></li>
								<li class="footer_list_item"><a href="courses.html">Courses</a></li>
								<li class="footer_list_item"><a href="news.html">News</a></li>
								<li class="footer_list_item"><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer Column - Usefull Links -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Usefull Links</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_list_item"><a href="#">Testimonials</a></li>
								<li class="footer_list_item"><a href="#">FAQ</a></li>
								<li class="footer_list_item"><a href="#">Community</a></li>
								<li class="footer_list_item"><a href="#">Campus Pictures</a></li>
								<li class="footer_list_item"><a href="#">Tuitions</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer Column - Contact -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Contact</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									Blvd Libertad, 34 m05200 Arévalo
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									0034 37483 2445 322
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>hello@company.com
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>

			<!-- Footer Copyright -->

			<div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
				<div class="footer_copyright">
					<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
				</div>
				<div class="footer_social ml-sm-auto">
					<ul class="menu_social">
						<li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>
			</div>

		</div>
	</footer>

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
        

