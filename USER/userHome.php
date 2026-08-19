<!DOCTYPE html>
<html lang="en">
<head>
<title>Course</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<style>
        .search-container {
            margin-bottom: 20px;
            text-align: center;
        }

        .search-container input[type="text"] {
            padding: 10px;
            font-size: 16px;
            width: 100%;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .search-container button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            background-color: #333;
            color: white;
            cursor: pointer;
        }

        .search-container button:hover {
            background-color: #575757;
        }

        .course_box {
            margin-bottom: 20px;
        }
		/* .btn{
			border-radius:4px;
			border: 4px solid #ccc;
			background-color:#ffc107;
			color: black;
			font-weight:bold;
			border-width:00px;
			

		} */
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
						<li class="main_nav_item"><a href="profile.php">PROFILE</a></li>
						<li class="main_nav_item"><a href="bookdetails.php">Records</a></li>
						<li class="main_nav_item"><a href="webreview.php">RateUs</a></li>

						
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
		<a href="../index.php" style="color:black; font-weight:bold;"><li class="main_nav_item">
		
		<i class="fas fa-sign-out"  style="margin-right:10px; color: black"></i>LOG OUT</li></a>

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
					<li class="menu_item menu_mm"><a href="#">Home</a></li>
					<li class="menu_item menu_mm"><a href="#">About us</a></li>
					<li class="menu_item menu_mm"><a href="courses.html">Courses</a></li>
					<li class="menu_item menu_mm"><a href="cons_acc.php">consultancy</a></li>
					<li class="menu_item menu_mm"><a href="register.php">register</a></li>
					<li class="menu_item menu_mm"><a href="contact.html">Contact</a></li>
					<li class="menu_item menu_mm"><a href="login.php">login</a></li>
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

		<!-- Hero Slider -->
		<div class="hero_slider_container">
			<div class="hero_slider owl-carousel">
				
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(../static/images/lib5.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Let’s build a better future together.</h1>
						</div>
					</div>
				</div>
				
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(../static/images/lib7.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Navigating your path to success.</h1>
						</div>
					</div>
				</div>
				
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(../static/images/liib8.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Unlock your potential with us.</h1>
						</div>
					</div>
				</div>

			</div>

			<div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200"><-</span></div>
			<div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">-></span></div>
		</div>

	</div>

	<div class="hero_boxes">
		<div class="hero_boxes_inner">
			<div class="container">
				<div class="row">

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="images/earth-globe.svg" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Online Courses</h2>
								<a href="online.php" class="hero_box_link">view more</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="images/books.svg" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Our Library</h2>
								<a href="libary.php" class="hero_box_link">view more</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="images/professor.svg" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Our counselors </h2>
								<a href="counselor.php" class="hero_box_link">view more</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Popular -->

	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Popular Consultancies</h1>
					</div>
				</div>
			</div>
			<div class="search-container">
    <input type="text" id="searchInput" placeholder="Search for consultancies..." onkeyup="searchCourses()">
</div>

<div class="row course_boxes" >
    <!-- Popular Course Item -->
    <?php 
        include '../connection.php';
        $qry = "SELECT * FROM consultancy_acc";
        $out = mysqli_query($conn, $qry);
        while ($data = mysqli_fetch_array($out)) {
    ?>
    <div class="col-lg-4 course_box" data-cons-name="<?php echo strtolower($data['cons_name']); ?>">
        <div class="card mb-4">
            <img class="card-img-top" src="../static/images/<?php echo $data['image']; ?>" style="height:200px;">
            <div class="card-body text-center">
                <div class="card-title">
                    <a href="courseview.php"><?php echo $data['cons_name']; ?></a>
                </div>
                <div class="card-text" style="text-align:left;"><?php echo $data['cons_address']; ?></div><br>
                <div class="card-text" style="text-align:left;"><?php echo $data['Phone_no']; ?></div><br>
                <div class="card-text" style="text-align:left;"><?php echo $data['description']; ?></div>
            </div>
            <div class="price_box d-flex flex-row align-items-center" style="background-color:#ffc017; height:50px; border-radius:5px;">
                <a style="color:#333333; font-size:15px; font-weight:500;" href="courseview.php?id=<?php echo $data['cons_id'];?>">View Courses</a>
                <a style="margin-left:100px; color:#333333; font-size:15px; font-weight:500;" href="consreview.php?id=<?php echo $data['cons_id'];?>">View Review</a>
            </div>
        </div>
    </div>
    <?php
        }
    ?>
</div>

<script>
    function searchCourses() {
        var input = document.getElementById('searchInput').value.toLowerCase();
        var courseBoxes = document.querySelectorAll('.course_box');

        courseBoxes.forEach(function(box) {
            var courseName = box.getAttribute('data-cons-name');
            if (courseName.includes(input)) {
                box.style.display = ''; // Show the box
            } else {
                box.style.display = 'none'; // Hide the box
            }
        });
    }
</script>


	<!-- Quote-->

	<div class="register">

		<div class="container-fluid">
			
			<div class="row row-eq-height">
				<div class="col-lg-6 nopadding">
					
					<!-- Quote-->

					<div class="register_section d-flex flex-column align-items-center justify-content-center">
						<div class="register_content text-center">
							<h1 class="register_title">Empower Your Journey </h1>
							<p class="register_text" style="color:black; font-size:18;"> "Discover the Consultancy That Transforms Your Dreams into Achievements, Providing Expert Guidance and Support Every Step of the Way, So You Can Turn Your Vision into Reality and Achieve Unprecedented Success!"</p>
							
						</div>
					</div>

				</div>

				<div class="col-lg-6 nopadding">
					
					<!-- Search -->

					<div class="search_section d-flex flex-column align-items-center justify-content-center">
						<div class="search_background" style="background-image:url(images/search_background.jpg);"></div>
						<div class="search_content text-center">
							<h1 class="search_title">Search for your consultancy</h1>
							<form  method="post">
								<input  class="input_field search_form_name" type="text" name="course" placeholder="Course Name" required="required" data-error="Course name is required.">
								<input  class="input_field search_form_category" name="country" type="text" placeholder="Country">
								<button  type="submit" name="submit" class="search_submit_button trans_200" value="Submit">Search</button>
							</form>
							<?php
							if(isset($_REQUEST['submit'])){
								$course=$_POST['course'];
								$country=$_POST['country'];
								$sql="select consultancy_acc.*,course_details.* from consultancy_acc,course_details where course_details.course_name='$course' and  course_details.country='$country' and course_details.cons_id=consultancy_acc.cons_id";
								
								echo $sql;
								$result=mysqli_query($conn,$sql);
								$row=mysqli_fetch_array($result);
								$co_id=$row['cons_id'];
								if($result){
									echo "<script>
									window.location ='search_con.php?course=$course&country=$country';
									</script>";
								}
								else{
									echo "<script>
									alert ('Result not found');
									window.location ='userHome.php';
									</script>";
								}
							}
							?>
						</div> 
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- Popular University -->

	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Popular University </h1><br>
					</div>
				</div>
			</div>

			<div class="row course_boxes">
				
				<!-- Popular University Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" style="height:265px; width:340px;" src="../static/images/un1.jpeg" alt="https://unsplash.com/@kellybrito">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">Massachusetts Institute of Technology</a></div>
							<div class="card-text">The Massachusetts Institute of Technology (MIT) is a leading research university renowned for its innovation in science, engineering, and technology.</div>
						</div>
						<div class="d-flex flex-row align-items-center">
							<div class="course_author_image">
							</div>
						</div>
					</div>
				</div>

				<!-- Popular University Item -->
				<div class="col-lg-4 course_box" >
					<div class="card">
						<img class="card-img-top" src="../static/images/un2.jpeg" style="height:265px; width:340px;" alt="https://unsplash.com/@cikstefan">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">Imperial College London</a></div>
							<div class="card-text">Imperial College London is a prestigious global university known for its focus on science, engineering, medicine, and business.</div>
						</div>
						<div class=" d-flex flex-row align-items-center">
							<div class="course_author_image">
							</div>
						</div>
					</div>
				</div>

				<!-- Popular University Item -->
				<div class="col-lg-4 course_box" >
					<div class="card">
						<img class="card-img-top" src="../static/images/un3.jpeg" style="height:265px; width:340px;" alt="https://unsplash.com/@cikstefan">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">University of Oxford</a></div>
							<div class="card-text">The University of Oxford is a historic and prestigious institution known for its rigorous academic programs and diverse research.</div>
						</div>
						<div class=" d-flex flex-row align-items-center">
							<div class="course_author_image">
							</div>
						</div>
					</div>
				</div>

				<!-- Popular University Item -->
				<div class="col-lg-4 course_box" ><br>
					<div class="card">
						<img class="card-img-top" src="../static/images/un4.jpeg" style="height:265px; width:340px;" alt="https://unsplash.com/@cikstefan">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">Harvard University</a></div>
							<div class="card-text">Harvard University is a prestigious Ivy League institution renowned for its academic excellence and influential research across various disciplines.</div>
						</div>
						<div class=" d-flex flex-row align-items-center">
							<div class="course_author_image">
							</div>
						</div>
					</div>
				</div>

				<!-- Popular University Item -->
				<div class="col-lg-4 course_box" ><br>
					<div class="card">
						<img class="card-img-top" src="../static/images/un5.jpeg" style="height:265px; width:340px;" alt="https://unsplash.com/@cikstefan">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">University of Cambridge</a></div>
							<div class="card-text">The University of Cambridge is a world-renowned institution known for its academic rigor, historic significance, and contributions to research and innovation.</div>
						</div>
						<div class=" d-flex flex-row align-items-center">
							<div class="course_author_image">
							</div>
						</div>
					</div>
				</div>

				<!-- Popular University Item -->
				<div class="col-lg-4 course_box"><br>
					<div class="card">
						<img class="card-img-top"style="height:265px; width:340px;" src="../static/images/un6.jpeg" alt="https://unsplash.com/@dsmacinnes">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">Stanford University</a></div>
							<div class="card-text">Stanford University is a leading research institution known for its entrepreneurial spirit and excellence in technology, business, and the humanities.</div>
						</div>
						<div class=" d-flex flex-row align-items-center">
							<div class="course_author_image">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Popular -->

	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Popular Courses</h1><br>
					</div>
				</div>
			</div>

			<div class="row course_boxes">
				
				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" style="height:265px; width:340px;" src="../static/images/it1.jpeg" alt="https://unsplash.com/@kellybrito">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">A complete guide to technology</a></div>
							<div class="card-text">Computer Science & Programming</div>
						</div>
						<div class="d-flex flex-row align-items-center">
							<div class="course_author_image">
							</div>
						</div>
					</div>
				</div>

				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box" >
					<div class="card">
						<img class="card-img-top" src="../static/images/h&m1.jpeg" style="height:265px; width:340px;" alt="https://unsplash.com/@cikstefan">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">A guidance Health & Medicine</a></div>
							<div class="card-text">Health and wellness education.</div>
						</div>
						<div class=" d-flex flex-row align-items-center">
							<div class="course_author_image">
							</div>
						</div>
					</div>
				</div>

				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box" >
					<div class="card">
						<img class="card-img-top" src="../static/images/ai.jpeg" style="height:265px; width:340px;" alt="https://unsplash.com/@cikstefan">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">Artificial Intelligence & Machine Learning</a></div>
							<div class="card-text">Algorithms for data-driven decision-making.</div>
						</div>
						<div class=" d-flex flex-row align-items-center">
							<div class="course_author_image">
							</div>
						</div>
					</div>
				</div>

				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box" ><br>
					<div class="card">
						<img class="card-img-top" src="../static/images/da.jpeg" style="height:265px; width:340px;" alt="https://unsplash.com/@cikstefan">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">A guidance Data Science & Analytics</a></div>
							<div class="card-text">Data analysis for informed decision-making.</div>
						</div>
						<div class=" d-flex flex-row align-items-center">
							<div class="course_author_image">
							</div>
						</div>
					</div>
				</div>

				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box" ><br>
					<div class="card">
						<img class="card-img-top" src="../static/images/b&m4.jpeg" style="height:265px; width:340px;" alt="https://unsplash.com/@cikstefan">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">A Business & Management</a></div>
							<div class="card-text">Strategies for effective organizational leadership.</div>
						</div>
						<div class=" d-flex flex-row align-items-center">
							<div class="course_author_image">
							</div>
						</div>
					</div>
				</div>

				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box"><br>
					<div class="card">
						<img class="card-img-top"style="height:265px; width:340px;" src="../static/images/art3.jpeg" alt="https://unsplash.com/@dsmacinnes">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html">Art and Design</a></div>
							<div class="card-text">Graphic Design Specialization</div>
						</div>
						<div class=" d-flex flex-row align-items-center">
							<div class="course_author_image">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Services -->

	<div class="services page_section">
		
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Our Services</h1>
					</div>
				</div>
			</div>

			<div class="row services_row">

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/earth-globe.svg" alt="">
					</div>
					<h3>Online Courses</h3>
					<p> Discover our expert-led online courses designed to enhance your skills and empower you to upskill or pivot your career. With flexible learning options, you can easily fit them into your schedule and take the first step toward achieving your goals!</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/exam.svg" alt="">
					</div>
					<h3>Indoor Courses</h3>
					<p> Enhance your skills with our engaging indoor courses that provide hands-on learning experiences in a collaborative environment. Connect with experts and peers to gain valuable insights and take a significant step toward your professional growth!</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/books.svg" alt="">
					</div>
					<h3>Amazing Library</h3>
					<p>Explore our extensive library, filled with valuable resources and expert insights to support your learning and development. Whether you're seeking guidance or inspiration, our collection is designed to empower your journey.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/professor.svg" alt="">
					</div>
					<h3>Exceptional Professors</h3>
					<p>Gain insights and knowledge from our exceptional professors, who bring industry expertise and passion for teaching to guide you on your educational journey.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/blackboard.svg" alt="">
					</div>
					<h3>Top Programs</h3>
					<p>Discover our top programs, expertly designed to equip you with the skills and knowledge needed to excel in your career.</p>
				</div>

				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
						<img src="images/mortarboard.svg" alt="">
					</div>
					<h3>Graduate Diploma</h3>
					<p>Earn a Graduate Diploma to advance your expertise and career prospects. 
					Acquire specialized knowledge and skills in your field with a focused, flexible program.</p>
				</div>

			</div>
		</div>
	</div>

	<!-- Testimonials -->

	<div class="testimonials page_section">
		<div class="testimonials_background_container prlx_parent">
			<div class="testimonials_background prlx" style="background-image:url(../static/images/bg4.webp); background_size:cover"></div>
		</div>
		<div class="container">

			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>What our client say</h1>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					
					<div class="testimonials_slider_container">

						<!-- Testimonials Slider -->
						<div class="owl-carousel owl-theme testimonials_slider">
						
							
							<!-- Testimonials Item -->
							<?php
								include '../connection.php';
								$qry="SELECT webreview.*,user_acc.* from webreview,user_acc where webreview.user_id=user_acc.user_id";
								$out=mysqli_query($conn,$qry);
								if(mysqli_num_rows($out)>0){
									while($data=mysqli_fetch_array($out)){
							?>
							<div class="owl-item">
							
								<div class="testimonials_item text-center">
									<p class="testimonials_text" ><?php echo $data['review'];?></p>
									<?php
											$rating = $data['star']; 
											$starClass = "text-muted"; 
											$activeStarClass = "text-primary"; 
										?>
								<div class="d-flex justify-content-center">
								<div class="d-flex justify-content-center">
									<?php for ($i = 1; $i <= 5; $i++): ?>
										<i class="fas fa-star" style="color: <?php echo $i <= $rating ? '#FFBF00' : 'gray'; ?>;"></i>
									<?php endfor; ?><br><br>
								</div>
								</div>
									<div class="testimonial_user">
										<div class="testimonial_image mx-auto">
											<img src="../static/images/<?php echo $data['image'];?>" alt="">
										</div>
										<div class="testimonial_name"><?php echo $data['user_name'];?></div>
										
									</div>
								</div>
							</div>
							<?php
								}}
							?>
						</div>
						

					</div>
				</div>
			</div>

		</div>
	</div>

	

	<!-- Footer -->
	<br><br><br><br><br>
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
								<li class="footer_list_item"><a href="index.php">Home</a></li>
								<li class="footer_list_item"><a href="aboutus.php">About Us</a></li>
								<li class="footer_list_item"><a href="courses.html">Courses</a></li>
								<li class="footer_list_item"><a href="news.html">News</a></li>
								<li class="footer_list_item"><a href="contact.html">Contact</a></li>
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
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>

</body>
</html>