<?php
    include '../connection.php';
    $id = $_GET['id']; 
    $qr = "SELECT * FROM webreview WHERE wr_id = '$id'";
    $ot = mysqli_query($conn, $qr);

    if ($ot && mysqli_num_rows($ot) > 0) {
        $data = mysqli_fetch_array($ot);
        $revId = $data['wr_id']; 

        echo '<script>
            // JavaScript to handle user confirmation and redirection
            var userConfirmed = confirm("Are you sure you want to delete?");
            if (userConfirmed) {
                // Redirect to del.php with the review ID
                window.location.href = "webdelete.php?id=' . $revId . '";
            } else {
                // Redirect to review.php
                window.location.href = "webview.php";
            }
        </script>';
    } else {
        echo '<script>
            alert("Review not found.");
            window.location.href = "webview.php";
        </script>';
    }
?>