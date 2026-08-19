<?php
    include '../connection.php';
    $id=$_GET['id'];
    $qry="DELETE from webreview where wr_d='$id'";
    $out=mysqli_query($conn,$qry);                 
    if($out==TRUE)
    {
        echo '<script>
        alert("Deleted Successfully");
        window.location="web_view.php";
        </script>';
    }
    else{
        echo '<script>
        alert("Deletion Failed");
        window.location="web_view.php";
        </script>';
    }
?>