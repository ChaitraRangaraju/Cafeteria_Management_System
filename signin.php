<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Cafeteria Management System</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"  crossorigin="anonymous">
        <script type="text/javascript" src="bootstrap-4.5.3-dist/js/jquery-3.5.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!--Google Font-->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
        <!--Stylesheet-->


        <link rel ="stylesheet"
              href= " style.css " type="text/css" >
    </head>
    <body>
        

        <div class="heading">
            <h1>CAFETERIA MANAGEMENT SYSTEM</h1>
            <h3>&mdash; WELCOME &mdash; </h3>
        </div>

        <div>
            <form action="loginprocess.php" method="post">
                <div class="form-area">
                <h3>Login Form</h3>
            <form action="">
                <p>Email</p>
                <input type ="text" name="loginemail"
                       id="" placeholder="email">
                <p>Password</p>
                <input type ="password" name="loginpassword"
                       id="" placeholder="password">
                <input type="submit" value ="Sign In" onclick="window.location.href='loginprocess.php';" name="signin">
                <p>Not yet registered? <a href="register.php"> register here</a>.</p>
                <p>Are you admin? <a href="adminlogin.php"> Login here</a>.</p>
                </div>
                
            </form>
        </div>
        
    </body>
</html>