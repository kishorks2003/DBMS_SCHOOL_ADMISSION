<?php

error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message'])
{
    $message=$_SESSION['message'];
    echo"<script type='text/javascript'>
    alert('$message')
    </script>";
}

$host="localhost";
$user="root";
$password="";
$db="school";

$data=mysqli_connect($host,$user,$password,$db);

$sql="SELECT * from teacher";
$r=mysqli_query($data,$sql);


?>

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCHOOL</title>
    <link rel="stylesheet" href="s.css">

</head>
<body>
    <nav id="HOME">
    <label for="" class="logo">only</label>
        <ul>
            <li><a href="#HOME">HOME</a></li>
            <li><a href="#COURSES">COURSES</a></li>
            <li><a href="#ADMISSION">ADMISSION</a></li>
            <li><a href="#CONTACT">CONTACT</a></li>
            <li><a class="btn btn-success" href="login.php">LOGIN</a></li>
        </ul>
    </nav>
    <div class="main"> 
        <section>
        <h1 class="onpic">School for ABC only fdghhgf</h1>
        <img src="./image/b.jpg" alt="" id="aimg">


        </section>     


        <div class="course">
    <h1 id="COURSES">COURSES</h1><br>

    <div class="col-md-4">
        <h2>A</h2>
        <p>Its about the A.Its about the AIts about the AIts about the AIts about the A.Its about the AIts about the AIts about the AIts about the A.Its about the AIts about the AIts about the AIts about the A.Its about the AIts about the AIts about the AIts about the A.Its about the AIts about the AIts about the AIts about the A.Its about the AIts about the AIts about the A</p>
    </div>
    <div class="col-md-4">
        <h2>B</h2>
        <p>Its about the A.Its about the AIts about the AIts about the AIts about the A.Its about the AIts about the AIts about the AIts about the A.Its about the AIts about the AIts about the AIts about the A.Its about the AIts about the AIts about the AIts about the A.Its about the AIts about the AIts about the AIts about the A.Its about the AIts about the AIts about the A</p>
    </div>
    <div class="col-md-4">
        <h2>C</h2>
        <p>Its about the A.Its about the AIts about the AIts about the AIts about the A.Its about the AIts about the AIts about the AIts about the A.Its about the AIts about the AIts about the AIts about the A.Its about the AIts about the AIts about the AIts about the A.Its about the AIts about the AIts about the AIts about the A.Its about the AIts about the AIts about the A</p>
    </div>
    <br>
</div></div>

<div align="center" class="a" id="ADMISSION">
    <h1>Admission Form</h1>
        <form action="data_check.php" method="POST">
            <table class="adm_int">
                <tr>
                    <td><label for="">Name</label></td>
                    <td><input type="text" name="name"value=""></td>
                </tr>
                <tr>
                    <td><label for="">Email</label></td>
                    <td><input type="text" name="email"value=""></td>
                </tr>
                <tr>
                    <td> <label for="">Phone</label></td>
                    <td><input type="text" name="phone"value=""></td>
                </tr>
                <tr>
                    <td><label for="">Message</label></td>
                    <td><textarea  name="message" id=""></textarea></td>
                </tr>
                
                    
                
            </table>
            <br>
            <input type="submit" class="btn btn-primary" id="submit" value="apply" name="apply">
            
            
              
            
        </form>
    </div>


    

<footer id="CONTACT">
    
    <h1>Contact US</h1><br>
    
    
    

</footer>


    
</body>
</html>