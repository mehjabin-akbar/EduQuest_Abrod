<?php
    include '../connection.php';
    $id=$_GET['id'];
    $qry="delete from webreview where wr_id='$id'";
    $out=mysqli_query($conn,$qry);
    if($out==TRUE)
    {
        echo '<script>
        alert("Deleted Successfull");
        window.location="webview.php";
        </script>';
    }
    else
    {
        echo '<script>
        alert("Deletion Failed");
        window.location="webview.php";
        </script>';
    }
?>