<?php
    include '../connection.php';
    $id = $_GET['id']; 
    $qr = "SELECT * FROM user_acc WHERE user_id = '$id'"; 
    $ot = mysqli_query($conn, $qr);

    if ($ot && mysqli_num_rows($ot) > 0) {
        $data = mysqli_fetch_array($ot);
        $revId = $data['user_id']; 

        echo '<script>
            var userConfirmed = confirm("Are you sure you want to delete?");
            if (userConfirmed) {
                window.location.href = "userdelete.php?id=' . $revId . '";
            } else {
                window.location.href = "userview.php";
            }
        </script>';
    } else {
        echo '<script>
            alert("User not found.");
            window.location.href = "adminHome.php";
        </script>';
    }
?>