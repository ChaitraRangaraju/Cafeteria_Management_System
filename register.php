<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Cafeteria Management System</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"  crossorigin="anonymous">
        <script type="text/javascript" src="bootstrap-4.5.3-dist/js/jquery-3.5.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Grid Food Menu</title>

    <!--Google Font-->

    <link href="https://fonts.googleapis.com/css2? family Poppins:wght@400;600&display-swap" rel="stylesheet"><!-- comment -->
    
        <link rel ="stylesheet" href= " style.css " >
    </head>
           
    <body>
        
        
        <div class="heading">
            <h1>CAFETERIA MANAGEMENT SYSTEM</h1>
            <h3>&mdash; REGISTER HERE &mdash; </h3>
        </div>
        
        <div class="form-area">
            <h3>User Signup Form
            </h3>
            <form action="registerprocess.php" method="post">
                <p>Email</p>
                <input type ="text" name="useremail"
                       id="" placeholder="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                <p>Password</p>
                <input type ="password" name="userpassword"
                       id="" placeholder="password" pattern=".{6,}">
                <p>Confirm Password</p>
                <input type ="password" name="confirmpassword"
                       id="" placeholder="retype password" pattern=".{6,}">
                <input type="submit" value ="signup" name="signup">
                            
                <p>Already have an account? <a href="signin.php"> Login here</a>.</p>
                
            </form>
        </div>
        
    </body>
</html>