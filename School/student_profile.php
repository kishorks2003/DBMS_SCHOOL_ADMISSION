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

    $host="localhost";
    $user="root";
    $password="";
    $db="school";
    $data=mysqli_connect($host,$user,$password,$db);

    $name=$_SESSION['username'];
    
    $sql="SELECT * from user where username='$name' ";
    $r=mysqli_query($data,$sql);

    $info=mysqli_fetch_assoc($r);

    if(isset($_POST['update_profile']))
    {
        $s_email=$_POST['email'];
        $s_phone=$_POST['phone'];
        $s_password=$_POST['password'];

        $sql="UPDATE user SET email='$s_email',phone='$s_phone',password='$s_password' where username='$name' ";

        $r2=mysqli_query($data,$sql);

        if($r2)
        {
            header('location:student_profile.php');
        }
    }
?>

<!DOCTYPE html>

<html lang="en">
<head>
<?php
 
 include 'student_css.php';

?>

<style>
    label{
        display:inline-block;
        width:100px;
        text-align:right;
        padding:10px;

    }
    .div_deg
    {
        background-color:skyblue;
        width:400px;
        padding:50px;
    }
   
</style>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
<?php
 
 include 'student_sidebar.php';

?>

<div class="content">
    <center>
        <h1>Update Profile</h1><br>
    <form action="#" method="POST">
        <div class="div_deg">
        <div>
            <label for="">Name</label>
            <input type="text" name="name" value="<?php echo "{$info['username']}" ?>" disabled>
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" name="email"value="<?php echo "{$info['email']}" ?>">
        </div>
        <div>
            <label for="">Phone</label>
            <input type="number" name="phone"value="<?php echo "{$info['phone']}" ?>">
        </div>
        <div>
            <label for="">Password</label>
            <input type="text" name="password"value="<?php echo "{$info['password']}" ?>">
        </div>
        <br>
        <div>
            
            <input class="btn btn-primary"type="submit" name="update_profile" value="Update">
        </div>
        </div>
    </form>
    </center>

</div>

    
</body>
</html>