<?php
include '../connection.php';
$id=$_GET['id'];
$qry="delete from consultancy_acc where cons_id='$id'";
$qry1="delete from login where reg_id='$id'";
$qry2="delete from course_details where cons_id='$id'";
$qry3="delete from rule where cons_id='$id'";
// echo $qry;
$out=mysqli_query($conn,$qry);
$out1=mysqli_query($conn,$qry1);
$out2=mysqli_query($conn,$qry2);
$out3=mysqli_query($conn,$qry3);
// echo $out;
if($out==TRUE && $out1==TRUE && $out2==TRUE && $out3==TRUE)
{
    echo '<script>alert("Deleted");window.location="../index.php";</script>';
}
else{
    echo '<script>alert("failed");window.location="profile.php";</script>';
}

?>      
               