<?php
    session_start();
    error_reporting(0);

    if(!isset($_SESSION['username']))
    {
        header("location:studenthome.php");
    }
    elseif($_SESSION['usertype']=="student")
    {
        header("location:studenthome.php");
    }

    $host="localhost";
    $user="root";
    $password="";
    $db="school";
    
    $data=mysqli_connect($host,$user,$password,$db);

    $sql="SELECT * from user where usertype='student' " ;
    $result=mysqli_query($data,$sql);

?>



<!DOCTYPE html>
<html lang="en">
<head>
<?php
    include 'admin_css.php';

?>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<?php

include 'admin_sidebar.php';

?>

    <div class="content">
        <center>
        <h1>View Student </h1>
        <br>
    <?php

    if($_SESSION['message'])
    {
        echo $_SESSION['message'];
    }
    unset($_SESSION['message']);



    ?>
        <br>

<table border='1px'>
    <tr>
        <th style="padding:10px; font-size:15px">UserName</th>
        <th style="padding:10px; font-size:15px">Email</th>
        <th style="padding:10px; font-size:15px">Phone</th>
        <th style="padding:10px; font-size:15px">Password</th>
        <th style="padding:10px; font-size:15px">Delete</th>
        <th style="padding:10px; font-size:15px">Update</th>
    </tr>

    <?php
    while($info=$result->fetch_assoc())
    {
    ?>
        <tr>
        <td style="padding:10px; font-size:15px">
        <?php  

        echo "{$info['username']}";
        ?>
        </td>

        <td style="padding:10px; font-size:15px">
        <?php  

        echo "{$info['email']}";
        ?>
        </td>

        <td style="padding:10px; font-size:15px">
        <?php  

        echo "{$info['phone']}";
        ?>
        </td>

        <td style="padding:10px; font-size:15px">
        <?php  

        echo "{$info['password']}";
        ?>
        </td>
        <td style="padding:10px; font-size:15px">
        <?php  

        echo "<a class='btn btn-danger' onClick=\" javascript:return confirm('R U Sure 2 delete?') \" href='delete.php?student_id={$info['id']}'>Delete</a>";
        ?>
        </td>

        <td style="padding:10px; font-size:15px">
        <?php  

        echo " <a class='btn btn-primary' href='update_student.php?student_id={$info['id']}'>Update</a> ";
        ?>
        </td>

       
        </tr>
    

    <?php
    }
    ?>
   

</table>


        </center>
        
    </div>
</body>
</html>