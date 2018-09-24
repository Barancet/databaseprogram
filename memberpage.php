<?php
require_once 'sessioncheck.php';
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>View Products</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php
        require_once 'head2.php';
        ?>

        <div id="wrapper">
        <h2>Welcome : <?php echo $_SESSION['username']; ?></h2>
        <h3>View Products</h3>
        <form method='post' action=''>

            <div class="input-group">
            <input type='text' name ='searchText' class="form-control" placeholder="Search Products">
            <br>
            <button class="btn btn-info btn-lg" type='submit' name='searchBtn'  value='Search'>
                
                <span class="glyphicon glyphicon-search">Search</span></button>
            
            <table id="products">
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Product price</th>
                </tr>
                <?php
                require_once 'conf.php';


                $query = "Select * from tblProducts";
                $result = mysqli_query($conn, $query);
                $collection = "";

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $collection = $collection . "<tr><td>" . $row['ProductID'] . "</td>";
                        $collection = $collection . "<td>" . $row['ProductName'] . "</td>";
                        $collection = $collection . "<td>" . $row['ProductPrice'] . "</td></tr>";
                    }
                }
                if (isset($_POST['searchText'])) {
                    $collection = "";
                    $search = $_POST['searchText'];
                    if (empty($search)) {
                        $query = "Select * from tblProducts";
                        $result = mysqli_query($conn, $query);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $collection = $collection . "<tr><td>" . $row['ProductID'] . "</td>";
                                $collection = $collection . "<td>" . $row['ProductName'] . "</td>";
                                $collection = $collection . "<td>" . $row['ProductPrice'] . "</td></tr>";
                            }
                        }
                    } else {
                        $query = "Select * from tblProducts where ProductName like '%$search%'";
                        $resultQ = mysqli_query($conn, $query);
                        if (mysqli_num_rows($resultQ) > 0) {
                            while ($row = mysqli_fetch_assoc($resultQ)) {
                                $collection = $collection . "<tr><td>" . $row['ProductID'] . "</td>";
                                $collection = $collection . "<td>" . $row['ProductName'] . "</td>";
                                $collection = $collection . "<td>" . $row['ProductPrice'] . "</td></tr>";
                            }               
                        }
                        else{
                            $collection = "No Records Found";
                        }
                    }
                }
                echo $collection;
                ?>
            </table>
        </form>
        </div>
        </div>
    </body>
</html>
