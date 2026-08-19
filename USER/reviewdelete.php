<?php
    include '../connection.php';
    $id=$_GET['id'];
    $qry="DELETE from review where review_id='$id'";
    $out=mysqli_query($conn,$qry);                 
    if($out==TRUE)
    {
        echo '<script>
        alert("Deleted Successfully");
        window.location="reviewview.php";
        </script>';
    }
    else{
        echo '<script>
        alert("Deletion Failed");
        window.location="reviewview.php";
        </script>';
    }
?>