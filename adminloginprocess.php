<?php

?>
<?php


session_start();
include 'connection.php';

        $useremail = $_POST['aloginemail'];
        $userpassword = $_POST['aloginpassword'];
       
   
if(isset($_POST['signin']))
{
    extract($_POST);
    $sql=mysqli_query($conn,"SELECT * FROM admin_login where email='$useremail' and password='$userpassword' ");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["email"] = $row['email'];
        $_SESSION["password"]=$row['password'];
        header("Location: afteradminlogin.php");
    }
    else
    {
        echo "Invalid Email ID/Password";
       
    }
}

?>
