<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login Page</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    </head>
    <body>
        <?php
        require_once 'head.php';
        ?>
        <div id="login">
        <h2>Login</h2>
        
        <form action="login1.php" method="post">
            <table style="margin:0 auto; width:45%;">
                <tr>
                    <td>Username:</td>
                    <td><input type="text" class="form-control" name="username"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" class="form-control" name="password"></td>
                </tr>
                <tr>
                    <td colspan="2"><button class="btn btn-info btn-lg" type="submit">Login</button></td>
                </tr>            
            </table>
        </form>
        </div>
        <?php
        if (isset($_REQUEST['result'])) {
            if ($_REQUEST['result'] == "fail") {
                echo "<p>Login failed. Either username or password is incorrect. Please try again.</p>";
            }
        }
        ?>
    </body>
</html>
