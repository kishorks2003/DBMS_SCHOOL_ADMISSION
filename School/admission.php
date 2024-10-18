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

    $host="localhost";
    $user="root";
    $password="";
    $db="school";
    
    $data=mysqli_connect($host,$user,$password,$db);

    $sql="SELECT * from admission " ;
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
    <title>Adminhome</title>
</head>
<body>
    <?php

    include 'admin_sidebar.php';

    ?>
<center>
    <div class="content">
        <h1>Applied for Admission </h1>
        <br>

        <table border='1px'>
            <tr>
                <th >Name</th>
                <th >Email</th>
                <th>Phone</th>
                <th >Message</th>
            </tr>

            <?php
            while($info=$result->fetch_assoc())
            {
            ?>
                <tr>
                <td >
                <?php  

                echo "{$info['name']}";
                ?>
                </td>

                <td>
                <?php  

                echo "{$info['email']}";
                ?>
                </td>

                <td >
                <?php  

                echo "{$info['phone']}";
                ?>
                </td>

                <td >
                <?php  

                echo "{$info['message']}";
                ?>
                </td>
                </tr>
            

            <?php
            }
            ?>
           

        </table>

       
    </div>
    </center>
</body>
</html>