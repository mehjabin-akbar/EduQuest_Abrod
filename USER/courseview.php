<html>
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
 .btn{
	border-radius:20px;
	background-color:#ffc107;
	height:60px;
	width: 150px;
	font-weight:bold;
 }
 .lin{
	color:black;

 }
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

        .event_item {
            margin-bottom: 20px;
        }

        .event_day {
            font-size: 24px;
            font-weight: bold;
            color: #333;
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
					<li class="main_nav_item"><a href="userHome.php">HOME</a></li>
					
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

	<div class="events page_section">
		<div class="container">
			
			<div class="row">
				<div class="col">
					<div class="section_title text-center"><br><br><br>
						<h1> OUR TOP COURSES</h1><br><br>
					</div>
				</div>
			</div>
			
			<div class="search-container">
                <input type="text" id="searchInput" placeholder="Search for courses..." onkeyup="searchCourses()">
            </div>
			<div id="eventItems" class="event_items">

				<!-- Event Item -->
				<?php 
					include '../connection.php';
					$id=$_GET['id'];
					// echo $id;
					$qry="SELECT * from  course_details where cons_id='$id'";
					$qryout=mysqli_query($conn,$qry);
					$eventDay=1;
					while($data=mysqli_fetch_array($qryout)){
				?> 
				<div class="row event_item" data-course-name="<?php echo strtolower($data['course_name']); ?>">
                    <div class="col">
                        <div class="row d-flex flex-row align-items-end">
                            <div class="col-lg-2 order-lg-1 order-2">
                                <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                    <div class="event_day"><?php echo str_pad($eventDay++, 2, '0', STR_PAD_LEFT); ?></div>
                                    <!-- <div class="event_month">January</div> -->
                                </div>
                            </div>

							<div class="col-lg-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name "><h1 class="fs-1 text-dark"><?php echo $data['course_name'];?></h1></div>
									<div class="event_location"><?php echo $data['country'];?></div>
									<p><?php echo $data['description'];?></p>
									<button class="btn"><a class="lin" href="booking.php?id=<?php echo $data['course_id'];?>">BOOK NOW</a></button>
								</div>
							</div>

							<div class="col-lg-4 order-lg-3 order-1">
								<div class="event_image">
									<img src="../static/images/<?php echo $data['image'];?>" alt="">
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

	<script>
    function searchCourses() {
        var input = document.getElementById('searchInput').value.toLowerCase();
        var eventItems = document.querySelectorAll('#eventItems .event_item');
        var found = false; // Flag to track if any items are found

        eventItems.forEach(function(item) {
            var courseName = item.getAttribute('data-course-name');
            if (courseName.includes(input)) {
                item.style.display = ''; // Show the item
                found = true; // Set the flag to true if an item is found
            } else {
                item.style.display = 'none'; // Hide the item
            }
        });

        // Check if no items were found
        var messageElement = document.getElementById('noResultsMessage');
        if (found) {
            messageElement.style.display = 'none'; // Hide the message if items are found
        } else {
            messageElement.style.display = ''; // Show the message if no items are found
        }
    }
</script>


<div id="eventItems">
    
</div>
<div id="noResultsMessage" style="display:none; color:black; font-size:30; text-align:center">No results found.</div>


	

</body>
</html>