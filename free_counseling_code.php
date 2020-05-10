<?php
require('config_file.php');
$fname = $_POST['txt_fname'];
$lname = $_POST['txt_lname'];
$select_prof = $_POST['select_prof'];
$phone = $_POST['txt_phone'];
$email = $_POST['user_email'];
$select_guid = $_POST['select_guidance'];
$msg = $_POST['txt_msg'];

echo $email;
$sql_query = "insert into free_counseling (first_name,last_name,professional,phone,email_id,select_guidance,message) 
    values('$fname','$lname','$select_prof','$phone','$email','$select_guid','$msg')"; 

$result = mysqli_query($conn, $sql_query);


if ($result) {
    echo "success";
} else {
    echo "invalid";
}
