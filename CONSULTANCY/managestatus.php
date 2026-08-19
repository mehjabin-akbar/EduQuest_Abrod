<?php
include '../connection.php';
$id=$_GET['id'];
$status=$_GET['status'];
$qry="update booking set status='$status' where book_id='$id'";
$out=mysqli_query($conn,$qry);
if($out)
{
    echo '<script>
    alert("' . addslashes($status) . '");
    window.location="managebooking.php";
    </script>';
}

?>