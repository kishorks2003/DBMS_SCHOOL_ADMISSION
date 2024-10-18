<?php
    session_start();

    if(!isset($_SESSION['username']))
    {
        header("location:studenthome.php");
    }
    elseif($_SESSION['usertype']=="student")
    {
        header("location:studenthome.php");
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
<?php
    include 'admin_css.php';

?>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminhome</title>
</head>
<body>
<?php

include 'admin_sidebar.php';

?>

    <div class="content">
        <h1>Admin Home 
            <a href="http://127.0.0.1:5000">crop</a>
        </h1>

       
    </div>
</body>
</html>