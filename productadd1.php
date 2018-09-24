<?php
require_once 'conf.php';

    $name = $_REQUEST['productName'];
    $price = $_REQUEST['productPrice'];
    
    $query = "Insert into tblProducts (ProductName, ProductPrice) "
            . "values ('$name', $price)";
    
    $result = mysqli_query($conn, $query);
    
    if($result ==1){       
        header('location:productadd.php?result=success');
    }
    else{
        header('location:productadd.php?result=failure');
    }

?>

