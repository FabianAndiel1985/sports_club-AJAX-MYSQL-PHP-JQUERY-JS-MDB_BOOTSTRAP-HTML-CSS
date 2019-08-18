<?php

ob_start();
session_start();
include "dbconnect.php";

$uname = $_POST['username'];
$password = $_POST['password'];

if ($uname != "" && $password != ""){

    $sql_query = "select * from app_users where email='".$uname."' and pass='".$password."'";
    $result = mysqli_query($conn,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = mysqli_num_rows($result);

    if($count > 0){
       $_SESSION['user_status'] =$row['status'] ;
        echo 1;
    }else{
        echo 0;
    }

}