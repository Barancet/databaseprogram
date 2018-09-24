<?php
require_once 'sessioncheck.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    </head>
    <body>
        <?php
        require_once 'head2.php';
        ?>
        
        <div id="insert">
        <h3>Insert Products</h3>
        <form action="productadd1.php" method="post">
            <table style="margin:0 auto; width:60%;">
                <tr>
                    <td>
                        Product Name:
                    </td>
                    <td>
                        <input type="text" class="form-control" name="productName">
                    </td>
                </tr>
                <tr>
                    <td>
                        Product Price:
                    </td>
                    <td>
                        <input type="text" class="form-control" name="productPrice">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button class="btn btn-info btn-lg" type="submit" value="Add">Insert Product</button>
                    </td>
                </tr>             
            </table>
        </form>
        </div>
        <?php
         if(isset($_REQUEST['result'])){
             if($_REQUEST['result']=="success"){
                 echo "<p>New product inserted</p>";
             }
                 else if($_REQUEST['result'] == "failure"){
                     echo "<p>New product not inserted</p>";
                 }
             }
         
        ?>
    </body>
</html>
