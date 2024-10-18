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

    if($_GET['t_id']){
        $t_id=$_GET['t_id'];
        $sql="SELECT * from teacher where id='$t_id'";
        $r=mysqli_query($data,$sql);

        $info=$r->fetch_assoc();
    }

    if(isset($_POST['update_teacher']))
    {
        $id=$_POST['id'];
        $t_name=$_POST['name'];
        $t_des=$_POST['description'];

        $file=$_FILES['image']['name'];
        $dst="./image/".$file;
        $dst_db="image/".$file;

        move_uploaded_file($_FILES['image']['tmp_name'],$dst);

        if($file)
        {
            $sql2="UPDATE teacher SET name='$t_name',description='$t_des',image='$dst_db' where id='$id'";
        }
        else{
            $sql2="UPDATE teacher SET name='$t_name',description='$t_des' where id='$id'";
        }

        

        $r2=mysqli_query($data,$sql2);

        if($r2)
        {
            header('location:view_teacher.php');
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
        width:200px;
        text-align:right;
        padding:10px;
    }
    .form{
        background-color:skyblue;
        width:600px;
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
        <h1>Update teacher </h1>

        <form class="form"action="#" method="POST" enctype="multipart/form-data">

        <input type="text" name="id" value="<?php echo"{$info['id']}" ?>" hidden>
            <div>
                <label for="">Teacher name</label>
                <input type="text" name="name"value="<?php echo"{$info['name']}" ?>">
            </div>
            <div>
                <label for="">Teacher description</label>
               <textarea rows='4'name="description"><?php echo"{$info['description']}" ?></textarea>
            </div>
            <div>
                <label for="">Teacher old image</label>
                <img width="100px" height="100px"src="<?php echo"{$info['image']}" ?>" alt="">
            </div>
            <div>
                <label for="">Teacher new image</label>
                <input type="file" name="image">
            </div>
            <br>
            <div>
                
                <input class="btn btn-success" type="submit" name="update_teacher">
            </div>
        </form>

        </center>
    </div>
</body>
</html>