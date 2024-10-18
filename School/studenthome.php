<?php
    session_start();

    if(!isset($_SESSION['username']))
    {
        header("location:studenthome.php");
    }
    elseif($_SESSION['usertype']=="admin")
    {
        header("location:adminhome.php");
    }

?>

<!DOCTYPE html>

<html lang="en">
<head>
<?php
 
 include 'student_css.php';

?>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studenthome</title>
</head>
<body>
    
<?php
 
 include 'student_sidebar.php';

?>

    
</body>
</html>