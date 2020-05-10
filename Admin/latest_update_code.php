<?php
require('../config_file.php');
if (isset($_POST['btn_submit'])) {

    $date = $_POST['date'];
    $subject = $_POST['subject'];
    $latest_update = $_POST['latest_update'];


    $sql_query = "insert into latest_update (date,subject,latest_update) 
    values('$date','$subject','$latest_update')";
   
    echo $sql_query;
    $result = mysqli_query($conn,$sql_query);
    echo $result;
    

    if ($result) {
        header("location: latest_update.php");
    }
    else
    {
        
        echo "Error: " . $sql_query . "<br>" . $conn->error;
    }

   
}
