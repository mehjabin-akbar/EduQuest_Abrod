
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
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            padding:50px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
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
                    <li class="main_nav_item"><a href="adminHome.php">home</a></li>
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

<!-- home -->
<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(../static/images/libhead1.jpg)"></div>
		</div>
		<div class="home_content" style="background-color:transparent;">
			<h1 style="font-weight:bold;">Booking Details</h1>
		</div>
	</div>


    

    <table>
       
            <tr>
                <th>User Name</th>
                <th>User E-mail</th>
                <th>Consultancy Name</th>
                <th>Consultancy E-mail</th>
                <th>Course Name</th>
                <th> Country </th>
                <th> Service Mode </th>
                <th>Booked Date</th>
                <th> Time </th>
                <th> Status </th>
                <th> Feedback </th>
                
            </tr>

            <?php
     include '../connection.php';
     $qry="SELECT user_acc . * , consultancy_acc . * , course_details . * , booking . *
            FROM user_acc, consultancy_acc, course_details, booking
            WHERE booking.user_id = user_acc.user_id
            AND booking.course_id = course_details.course_id
            AND course_details.cons_id = consultancy_acc.cons_id";
            $qin=mysqli_query($conn,$qry);
            if(mysqli_num_rows($qin)>0)
            {
            while($data=mysqli_fetch_array($qin))
                 {
         ?>
            <tr>
                <td><?php echo $data['user_name'];?></td>
                <td><?php echo $data['email'];?></td>
                <td><?php echo $data['cons_name'];?></td>
                <td><?php echo $data['cons_email'];?></td>
                <td><?php echo $data['course_name'];?></td>
                <td><?php echo $data['country'];?></td>
                <td><?php echo $data['service'];?></td>
                <td><?php echo $data['book_date'];?></td>
                <td><?php echo $data['Timing'];?></td>
                <td><?php echo $data['status'];?></td>
                <?php
                 if($data['status']=='Accepted')
                 {
                ?>
                <td><a href="c_review.php?id=<?php echo $data['book_id'];?>"><i class="far fa-address-card" style="color: black; font-size: 35px; margin-left:30px;"></i></a></td>
            <?php
                 }
                 else{
            ?>
            <td>--</td>
            </tr>
            <?php 
                 }
            }
        }
    
            ?>

    



</body>
</html>