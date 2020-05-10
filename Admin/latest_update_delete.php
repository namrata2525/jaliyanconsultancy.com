<?php
include('../config_file.php');
$id = $_GET['id'];
$query = "delete from latest_update where u_id='$id' ";
// $res = mysqli_query($conn,$query);
if (mysqli_query($conn, $query)) {
    ?>
            <script type="text/javascript">
                alert('Successfully delete Your Record!');
                location.href = 'latest_update_data.php';
            </script>
    <?php
        } else {
            echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
        }
    


?>


