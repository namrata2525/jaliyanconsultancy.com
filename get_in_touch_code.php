<?php
require('config_file.php');
// if (isset($_POST['btn_submit'])) {

    $name = $_POST['txt_name'];
    $email_address = $_POST['email_address'];
    $select_subject = $_POST['select_subject'];
    $msg = $_POST['txt_msg'];


    $sql_query = "insert into get_in_touch (name,email_id,subject,message) 
    values('$name','$email_address','$select_subject','$msg')";

    $sql_query;
    $result = mysqli_query($conn, $sql_query);
     $result;


    if ($result) {

?>
        <script type="text/javascript">
            // alert('submitted successfully.');
            location.href = 'contact_us.php';
        </script>
<?php

    } else {

        echo "Error: " . $sql_query . "<br>" . $conn->error;
    }

    //    ------ Mailling Function -----

    $subject = $select_subject;
    $mailFrom = $email_address;
    $message = $msg;

    $mailTo = "shivangsomaiya11@gmail.com";
    $header = "From:" . $mailFrom;
    $txt = "you have received an email from \n" . $name . ".\n\n" . $message;

    mail($mailTo, $subject, $txt, $header);
// }
?>
