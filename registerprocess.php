<?php

?>
<?php

extract($_POST);
include 'connection.php';

        $useremail = $_POST['useremail'];
        $userpassword = $_POST['userpassword'];
        $confirmpassword = $_POST['confirmpassword'];
       
    $useremail_err = $userpassword_err = $confirmpassword_err = "";
 

if($_SERVER["REQUEST_METHOD"]=="POST"){
 
    
    if(empty(trim($_POST["useremail"]))){
        $useremail_err = "Please enter a username.";
    } else{
        
        $sql = "SELECT email FROM customer_login WHERE email = ?";
       
        if($stmt = mysqli_prepare($conn,$sql)){
            
            mysqli_stmt_bind_param($stmt, "s", $param_useremail);
           
            
            $param_useremail = trim($_POST["useremail"]);
           
            
            if(mysqli_stmt_execute($stmt)){
                
                mysqli_stmt_store_result($stmt);
               
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $useremail_err = "This username is already taken.";
                } else{
                    $useremail = trim($_POST["useremail"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
            mysqli_stmt_close($stmt);
        }
           
           
    }
   
    
    if(empty(trim($_POST["userpassword"]))){
        $userpassword_err = "Please enter a password.";    
    } elseif(strlen(trim($_POST["userpassword"])) < 6){
        $userpassword_err = "Password must have atleast 6 characters.";
        echo 'Password must have atleast 6 characters';
    } else{
        $userpassword = trim($_POST["userpassword"]);
    }
   
    
    if(empty(trim($_POST["confirmpassword"]))){
        $confirmpassword_err = "Please confirm password.";    
    } else{
        $confirmpassword = trim($_POST["confirmpassword"]);
        if(empty($userpassword_err) && ($userpassword != $confirmpassword)){
            $confirmpassword_err = "Password did not match.";
            echo 'Password did not match';
        }
    }
   
    
    if(empty($useremail_err) && empty($userpassword_err) && empty($confirmpassword_err)){
   
    
        $sql = "INSERT INTO customer_login (email, password) VALUES ('$useremail','$userpassword')";
         
        if($stmt = mysqli_prepare($conn,$sql)){
            
            if(mysqli_stmt_execute($stmt)){
                           echo 'Registered successfully';
                           ?>
                            <p>Click here to enter your details </p>
                                    <button class="GFG " style="text-align: center;"

                                    onclick="window.location.href ='customer.php'" name="submit">

                                    Click here

                                    </button>
                 <?php          
            } else{
                echo "Something went wrong. Please try again later.";
            }
             mysqli_stmt_close($stmt);

        }
       
         
       
       }

     mysqli_close($conn);


}
?>

