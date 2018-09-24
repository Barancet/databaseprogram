<?php
    $host = 'localhost';
    $user = 'cetinb_admin';
    $pw = 'QqS$vFJ;;OE]';
    $dbName = "cetinb_firstdb";
    
    $conn = mysqli_connect($host, $user, $pw, $dbName);
    
    if(empty($conn)){
        die("Connection failed: ". mysqli_connect_error($conn));
    }

