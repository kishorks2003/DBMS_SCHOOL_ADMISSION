<!DOCTYPE html>
<html lang="en">
<head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <meta charset="UTF-8">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="s.css">
</head>
<body>
    


    <center >
        <div class="formd">
<h1>login page</h1><br>
        <h4> 
            <?php

            error_reporting(0);
            session_start();
            session_destroy();
            echo $_SESSION['loginMsg'];

            ?>
        </h4>
            <form action="login_check.php" method="POST">

            <table >
           
                <tr>
                    <td><label for="">USERNAME:</label></td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td><label for="">PASSWORD:</label></td>
                    <td><input type="password" name="password"></td>
                </tr>
              
            </table><br>
               
                    <input type="submit" class="formsubmit" name="submit" value="Login">
               
            </form>
        </div>
    </center>

    
</body>
</html>