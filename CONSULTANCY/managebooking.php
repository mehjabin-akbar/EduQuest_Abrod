
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
                    <li class="main_nav_item"><a href="conHome.php">home</a></li>
                  
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

<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(../static/images/libhead1.jpg)"></div>
		</div>
		<div class="home_content" style="background-color:transparent;">
			<h1 style="font-weight:bold;">Reservations </h1>
		</div>
	</div>

   
<!-- <h2> Table</h2> -->
<?php
    include '../connection.php';
    session_start();
    $id=$_SESSION['uid'];
?>
    <table >
       
            <tr>
                <th>Name</th>
                <th>Phone Number</th>
                <th>E_mail</th>
                <th>Course Name</th>
                <th> Country </th>
                <th> Service Mode </th>
                <th>Booked Date</th>
                <th> Time </th>
                <th> Availability </th>
                <th> status </th>
                <th>Feedbacks</th>

            </tr>
            
           

           <?php
           include '../connection.php';
           $qry="SELECT booking.*,user_acc.*,course_details.* FROM booking,user_acc,course_details where booking.user_id =user_acc.user_id and course_details.course_id=booking.course_id and course_details.cons_id='$id'";
           $qin=mysqli_query($conn,$qry);
           if(mysqli_num_rows($qin)>0) {
           while($data=mysqli_fetch_assoc($qin)) {
                            // Check if there is a review for this booking ID
            $book_id = $data['book_id'];
            $review_check_qry = "SELECT COUNT(*) AS review_count FROM review WHERE book_id='$book_id'";
            $review_check_qin = mysqli_query($conn, $review_check_qry);
            $review_check_data = mysqli_fetch_array($review_check_qin);
            $has_review = $review_check_data['review_count'] > 0;
          ?>
            <tr>
                <td><?php echo $data['user_name'];?></td>
                <td><?php echo $data['Phone_no'];?></td>
                <td><?php echo $data['email'];?></td>
                <td><?php echo $data['course_name'];?></td>
                <td><?php echo $data['country'];?></td>
                <td><?php echo $data['service'];?></td>
                <td><?php echo $data['book_date'];?></td>
                <td><?php echo $data['Timing'];?></td>
                
                <td><a href="managestatus.php?id=<?php echo $data['book_id'];?>&status=Accepted" >Accept</a><br>
                <a href="managestatus.php?id=<?php echo $data['book_id'];?>&status=rejected" >Decline</a></td>
                 <td><?php echo $data['status'];?></td>
                 <td>
                    <?php if ($has_review): ?>
               <a href="c_review.php?id=<?php echo $data['book_id']; ?>&user=<?php echo $data['user_id']; ?>&course=<?php echo $data['course_id']; ?>"><i class="far fa-address-card" style="color: black; font-size: 35px; margin-left:30px;"></i></a>
            <?php else: ?>
                --
            <?php endif;

                    ?>
                 </td>
            </tr>
            <?php 
                    }
                }
            ?>
    </table>
<!-- Footer -->


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