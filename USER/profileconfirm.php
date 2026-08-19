<?php
    include '../conection.php';
    $id = $_GET['id'];
    $qr = "SELECT * FROM user WHERE user_id='$id'";
    $ot= mysqli_query($conn,$qr);

    if($ot && mysqli_num_rows($ot)>0)
    {
        $data = mysqli_fetch_array($ot);
        $revID= $data['user_id'];

        echo '<script>
            // JavaScript to handle user confirmation and redirection
            var userConfirmed = confirm("Are you sure you want to delete?");
            if (userConfirmed) {
                // Redirect to del.php with the review ID
                window.location.href = "profiledelete.php?id=' . $revId . '";
            } else {
                // Redirect to review.php
                window.location.href = "profile.php";
            }
        </script>';
    }
    else 
    {
        echo '<script>
            alert("Profile not found.");
            window.location.href = "profile.php";
        </script>';
    }
?>