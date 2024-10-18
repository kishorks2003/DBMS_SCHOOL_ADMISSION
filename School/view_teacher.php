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

    $sql="SELECT * from teacher";
    $r=mysqli_query($data,$sql);

    if($_GET['t_id'])
    {
        $tid=$_GET['t_id'];
        $sql2="DELETE from teacher where id='$tid'";
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
    .th,.td{
        padding:20px;
        font-size:20px;
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
        <h1>View teacher </h1>

        <table border="1px">
            <tr>
                <th class="th">teacher Name</th>
                <th class="th">teacher description</th>
                <th class="th">teacher image</th>
                <th class="th">delete</th>
                <th class="th">update</th>
              
            </tr>
            
            <?php

            while($info=$r->fetch_assoc())
            {

            ?>
            <tr>
                <td class="td">
                    <?php echo"{$info['name']}"  ?>
                </td>
                <td class="td">
                    <?php echo"{$info['description']}"  ?>
                </td>
                <td class="td">
                    <img height="100px" width="100px"src="<?php echo"{$info['image']}"  ?>" alt="">
                    
                </td>
                <td class="td">
                    <?php
                    echo "
                  <a onClick=\"javascript:return confirm('R u Sure to delete'); \" class='btn btn-danger' href='view_teacher.php?t_id={$info['id']}'>Delete</a>";
                  ?>
                </td>
                <td class="td">
                    <?php echo"<a href='update_teacher.php?t_id={$info['id']}' class='btn btn-primary'>Update</a>"  ?>
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