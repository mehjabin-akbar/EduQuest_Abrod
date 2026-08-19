<?php
    include '../connection.php';
    $id = $_GET['id']; 
    $qr = "SELECT * FROM course_details WHERE course_id = '$id'"; 
    $ot = mysqli_query($conn, $qr);

    if ($ot && mysqli_num_rows($ot) > 0) {
        $data = mysqli_fetch_array($ot);
        $revId = $data['course_id']; 
        echo '<script>
            var userConfirmed = confirm("Are you sure you want to delete?");
            if (userConfirmed) {
                window.location.href = "coursedelete.php?id=' . $revId . '";
            } else {
                window.location.href = "consultancyview.php";
            }
        </script>';
    } else {
        echo '<script>
            alert("Course not found.");
            window.location.href = "consultancyview.php";
        </script>';
    }
?>
