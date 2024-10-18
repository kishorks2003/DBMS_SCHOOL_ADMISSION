<?php

session_start();


$host="localhost";
$user="root";
$password="";
$db="school";

$data=mysqli_connect($host,$user,$password,$db);



if($_GET['student_id'])
{
    $user_id=$_GET['student_id'];
    $sql="Delete from user where id='$user_id' " ;
    $result=mysqli_query($data,$sql);

    if($result)
    {
        $_SESSION['message']='Deleted';
        header("location:view_student.php");
    }
}

?>