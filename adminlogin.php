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
            <h3>&mdash; WELCOME ADMIN! &mdash; </h3>
        </div>
        <div>
            <form action="adminloginprocess.php" method="post">
        <div class="form-area">
            <h3>Admin Login 
            </h3>
            <form action="">
                <p>Email</p>
                <input type ="text" name="aloginemail"
                       id="" placeholder="email">
                <p>Password</p>
                <input type ="password" name="aloginpassword"
                       id="" placeholder="password">
                <input type="submit" value ="signIn" onclick="window.location.href='adminloginprocess.php';" name="signin">
                
                
                </div>
                
            </form>
        </div>
        
    </body>
</html>