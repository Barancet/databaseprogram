<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Register Page</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    </head>
    <body>
        <?php
            require_once 'head.php';
        ?>
        <div id="register">
        <h2>Register Page</h2>
        
        
        <form action="register1.php" method="post">
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
                   <td colspan="2"><button class="btn btn-info btn-lg" type="submit" value="Register">Register</button></td>
                </tr>
            </table>
                
        </form>
        </div>
        <?php
            if(isset($_REQUEST['result'])){
                if($_REQUEST['result'] == "userexists")
                    echo "This Username is already taken, please try a new one";
                else if($_REQUEST['result'] == "success")
                    echo "New user created";
                else if ($_REQUEST['result'] == "fail")
                    echo "New user not created";
            }
        ?>
    </body>
</html>
