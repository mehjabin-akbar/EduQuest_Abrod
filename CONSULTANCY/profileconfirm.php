<?php
 include '../connection.php';
 $id = $_GET['id'];
 $qr = "SELECT * FROM consultancy_acc WHERE cons_id='$id'";
 $ot = mysqli_query($conn, $qr);

 if ($ot && mysqli_num_rows($ot) > 0)
 {
    $data = mysqli_fetch_array($ot);
    $revId = $data['cons_id'];

    echo '<script>
    var userconfirmed = confirm("Are you sure you want to delete ?");
    if (userconfirmed)
    {
       window.location.href = "profiledelete.php?id=' . $revId . '";
    }
    else
    {
       window.location.href = "profile.php";
    }
       </script>';
}
else
{
    echo '<script>
    alert("profile not found.");
    window.location.href = "profile.php";
    </script>';
 }
 ?>