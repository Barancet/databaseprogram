<?php

ob_start();
require_once 'conf.php';

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

//if user exists 

$query = "Select username from tblUsers where username = '$username';";

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    header('location:register.php?result=userexists');
} else if(!empty($username) && !empty($password)) {
    //insert new user
    $query = "Insert into tblUsers (Username, password) " . "values ('$username' 
        ,'$password' )";
    $result = mysqli_query($conn, $query);

    if ($result == 1)
        header('location:register.php?result=success');
    else
        header('location:register.php?result=fail');
    
}
else{
    header('location:register.php?result=fail');
}
?>