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

    if(isset($_POST['add_teacher']))
    {
        $t_name=$_POST['name'];
        $t_description=$_POST['description'];
        $file=$_FILES['image']['name'];
        $dst="./image/".$file;
        $dst_db="image/".$file;

        move_uploaded_file($_FILES['image']['tmp_name'],$dst);

        $sql="INSERT into teacher(name,description,image) values('$t_name','$t_description','$dst_db')";

        $result=mysqli_query($data,$sql);

        if($result)
        {
            header('location:add_teacher.php');
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
    .div_deg{
        background-color:skyblue;
        width:500px;
        padding:50px;
    }
</style>
  
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
        <h1>Add teacher </h1>
        <br><br>

        <div class="div_deg">
            <form action="#" method="POST" enctype="multipart/form-data">
                <div>
                    <label for="">Teacher name:</label>
                    <input type="text" name="name" >
                </div>
                <br>
                <div>
                    <label for="">Description:</label>
                    <textarea name="description" ></textarea>
                </div>
                <br>
                <div>
                    <label for="">Image:</label>
                    <input type="file" name="image" >
                </div>
                <br>
                <div>
                 
                    <input type="submit" name="add_teacher" value="Add Teacher" class="btn btn-primary">
                </div>
                <br>
            </form>

        </div>

        </center>
    </div>
</body>
</html>