<?php
    include '../connection.php';
    $id=$_GET['id'];
    $qry="delete from course_details where course_id='$id'";
    // echo $qry;
    $out=mysqli_query($conn,$qry);
    // echo $out;
    if($out==TRUE)
    {
        echo '<script>
        alert("Course Deleted Successfully");
        window.location="consultancyview.php";
        </script>';
    }
    else{
        echo '<script>
        alert("Course Deletion failed");
        window.location="consultancyview.php";
        </script>';
    }

?>      