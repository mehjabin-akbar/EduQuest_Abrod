<?php
    include '../connection.php';
    $id = $_GET['id'];
    $qr = "SELECT * FROM login WHERE reg_id = '$id'"; 
    $ot = mysqli_query($conn, $qr);

    if ($ot && mysqli_num_rows($ot) > 0) {
        $data = mysqli_fetch_array($ot);
        $revId = $data['reg_id']; 

        echo '<script>
            var userConfirmed = confirm("Are you sure you want to delete your account?");
            if (userConfirmed) {
                window.location.href = "profiledlt.php?id=' . $revId . '";
            } else {
                window.location.href = "profile.php";
            }
        </script>';
    } else {
        echo '<script>
            alert("Profile not found.");
            window.location.href = "adminHome.php";
        </script>';
    }
?>