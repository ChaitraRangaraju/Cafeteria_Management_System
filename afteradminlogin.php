<!DOCTYPE html>

<html>

    <head>
      
      <!--Google Font-->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
        <!--Stylesheet-->

           <meta charset="ISO-8859-1">

           <title>Cafeteria Management System</title>

           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"  crossorigin="anonymous">

        <script type="text/javascript" src="bootstrap-4.5.3-dist/js/jquery-3.5.1.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

   

    </head>

   

<body>
        <div class="heading">
            <h1>CAFETERIA MANAGEMENT SYSTEM</h1>
            <h3>&mdash; Admin Options &mdash; </h3>


        </div>
        <style>
            .heading{
    
                background-color : #cb202d;
                color:#ffffff;
                margin-bottom: 30px;
                 padding: 120px 0 30px 0;
                 grid-column: 1/-1;
                text-align: center;
              }

              .heading>h1{
                font-weight: 400;
                font-size: 30px;
                letter-spacing: 10px;
                margin-bottom: 10px;

                }

              .heading>h3{
                 font-weight: 600; 
                font-size: 22px;
                letter-spacing: 5px;
                }
              .heading>p{
               width: 80%;
                margin: 0 auto;
                padding: 0.5%;
               
                text-align-last: right;
                font-size: 20px;
                
                }


        </style>
            <nav class="navbar navbar-expand-sm bg-white navbar-dark">
                

                    
                    <h5 class="nav-item"><a class="nav-link" href="viewstaff.php" style="color:black">Staff details</a>
                    <br>
                    <a class="nav-link" href="viewcustomer.php" style="color:black">Customer details</a>
                    <br>
                    <a class="nav-link" href="staff.php" style="color:black">Add staff details</a>
                    <br>
                    <a class="nav-link" href="adminvieworder.php" style="color:black">View Customer Orders</a>
                    <br>
                    <a class="nav-link" href="addmenu.php" style="color:black">Add items to menu </a>
                   <br>
                    <a class="nav-link" href="orderlistforcook.php" style="color:black">Ordered Items List</a>
                    </h5>
                    <br>

                    
                    
                   
                    
                

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">

                        <a class="nav-link" href="logout.php" style="color: black">

                        LogOut

                        </a>

                    </li>

                </ul>