<?php
include '../connection.php';
$id=$_GET['id'];
$qry="delete from rule where rule_id='$id'";
// echo $qry;
$out=mysqli_query($conn,$qry);
echo $out;
if($out==TRUE)
{
    echo '<script>alert("Deleted");window.location="profile.php";</script>';
}
else{
    echo '<script>alert("failed");window.location="profile.php";</script>';
}

?>      