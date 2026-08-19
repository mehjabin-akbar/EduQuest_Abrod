<?php
    include '../connection.php';
    $id = $_GET['id'];
    $qr = "SELECT * FROM review WHERE review_id='$id'";
    $ot= mysqli_query($conn,$qr);

    if($ot && mysqli_num_rows($ot)>0)
    {
        $data = mysqli_fetch_array($ot);
        $revID= $data['review_id'];

        echo '<script>
            // JavaScript to handle user confirmation and redirection
            var userConfirmed = confirm("Are you sure you want to delete?");
            if (userConfirmed) {
                // Redirect to del.php with the review ID
                window.location.href = "reviewdelete.php?id=' . $revID . '";
            } else {
                // Redirect to review.php
                window.location.href = "reviewview.php";
            }
        </script>';
    }
    else 
    {
        echo '<script>
            alert("Review not found.");
            window.location.href = "reviewview.php";
        </script>';
    }
?>