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

    if(isset($_POST['add_student']))
    {
        $username=$_POST['name'];
        $user_email=$_POST['email'];
        $user_phone=$_POST['phone'];
        $user_password=$_POST['password'];
        $usertype="student";

        $check="SELECT * from user where username='$username'";
        $check_user=mysqli_query($data,$check);
        $row_count=mysqli_num_rows($check_user);

        if($row_count==1)
        {
            echo "<script type='text/javascript'>  
                alert('username already exist');   
                </script>";
           
        }
        else
        {
            $sql="INSERT into user(username,email,phone,usertype,password) Values ('$username','$user_email','$user_phone','$usertype','$user_password')";

            $result=mysqli_query($data,$sql);
    
            if($result)
            {
                echo "<script type='text/javascript'>  
                alert('Data uploaded');   
                </script>";
            }
            else
            {
                echo "Upload Fail";
            } 
        }

    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
<?php
    include 'admin_css.php';

?>

<style>
    label{
        display:inline-block;
        text-align:right;
        width:100px;
        padding-top:10px;
        padding-bottom:10px;
    }
    .div_deg{
        background-color: skyblue;
        width:400px;
        padding:50px;
    }
</style>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminhome</title>
</head>
<body>
<?php

include 'admin_sidebar.php';

?>

    <div class="content">
        <center>

        
        <h1>Add student </h1>

        <div class="div_deg">
            <form action="#" method="POST">
                <div>
                    <label for="">Username</label>
                    <input type="text" name="name">
                </div>
                <div>
                    <label for="">Email</label>
                    <input type="email" name="email">
                </div>
                <div>
                    <label for="">Phone</label>
                    <input type="number" name="phone">
                </div>
                <div>
                    <label for="">Password</label>
                    <input type="text" name="password">
                </div>
                <div>
                    
                    <input type="submit" class="btn btn-success" name="add_student" value="Add student">
                </div>
                
            </form>
        </div>

        </center>
    </div>
</body>
</html>