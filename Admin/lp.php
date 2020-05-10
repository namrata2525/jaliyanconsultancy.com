<?php
include '../config_file.php';

if(isset($_POST['sign_in'])){

    $uname = mysqli_real_escape_string($conn,$_POST['txt_user']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from sign_in where user_id='".$uname."' and password='".$password."'";
        $result = mysqli_query($conn,$sql_query) or  die( mysqli_error($conn));
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            // $_SESSION['uname'] = $uname;
            header('Location:deshboard.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>