<?php
    include '../connection.php';
    $id=$_GET['id'];
    $qry="delete from login where reg_id='$id'";
    $out=mysqli_query($conn,$qry); 
    if($out==TRUE)
    {
        echo '<script>
        alert("Deleted Successfully");
        window.location="../index.php";
        </script>';
    }
    else
    {
        echo '<script>
        alert("Deletion Failed");
        window.location="profile.php";
        </script>';
    }
    
?>