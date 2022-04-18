<?php

?>
<?php

session_start();
include 'connection.php';

        $useremail = $_POST['loginemail'];
        $userpassword = $_POST['loginpassword'];
       
   
if(isset($_POST['signin']))
{
    extract($_POST);
    $sql=mysqli_query($conn,"SELECT * FROM customer_login where email='$useremail' and password='$userpassword' ");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["email"] = $row['email'];
        $_SESSION["password"]=$row['password'];
        header("Location: menupage.php");
    }
    else
    {
        echo "Invalid Email ID/Password"; 
    }
}

?>
