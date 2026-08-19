<?php
include '../cnnection.php';
$id=$_GET['id'];
$qry="delete from user_acc where user_id='$id'";
$qry1="delete from login where reg_id='$id'";
// echo $qry;
$out=mysqli_query($conn,$qry);
$out1=mysqli_query($conn,$qry1);

if($out==TRUE && $out1==TRUE)
{
    echo '<script>
    alert("profile successfuly Deleted");
    window.location="../index.php";
    </script>';
}
else
{
    echo '<script>
    alert("failed to delete");
    window.location="profile.php";
    </script>';
}