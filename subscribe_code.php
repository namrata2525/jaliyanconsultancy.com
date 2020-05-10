<?php

include 'config_file.php';

// if (isset($_POST['btn_submit'])) {

  $email = $_POST['email_id'];
  echo $email;
  if($email != null){
   $sql_query = "insert into subscribe(email_id) values('$email')";

  $result = mysqli_query($conn, $sql_query);
  } 
  if ($result) {
?>
    <script type="text/javascript">
      // alert('submitted successfully.');
      location.href = 'index.php';
    </script>
<?php

  } else {
    echo "Error: " . $sql_query . "<br>" . $conn->error;
  }
// }
?>
