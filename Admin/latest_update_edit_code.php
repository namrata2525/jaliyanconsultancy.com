<?php

session_start();
$id = $_SESSION['id'];
include '../config_file.php';

if (isset($_POST['btn_update'])) {
    $date = $_POST['date'];
    $subject = $_POST['subject'];
    $latest_update = $_POST['latest_update'];
    $update = "update latest_update set date='$date', subject='$subject', latest_update='$latest_update' where u_id=$id";
    // $rs = mysqli_query($conn,$update);

    if (mysqli_query($conn, $update)) {
?>
        <script type="text/javascript">
            alert('Records were updated successfully.');
            location.href = 'latest_update_data.php';
        </script>
<?php
    } else {
        echo "ERROR: Could not able to execute $update. " . mysqli_error($conn);
    }
}
?>