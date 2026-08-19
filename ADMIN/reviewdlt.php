<?php
include '../connection.php';
$id=$_GET['id'];
$qry="delete from review where review_id='$id'";
$out=mysqli_query($conn,$qry);
if($out==TRUE)
{
    echo '<script>
    alert("Review deleted Successfully");
    window.location="book.php";
    </script>';
}
else
{
    echo '<script>
    alert("Review deletion Failed");
    window.location="book.php";
    </script>';
}
?>