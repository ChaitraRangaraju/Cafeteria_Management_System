<!DOCTYPE html>

<html>

<head>

           <meta charset="ISO-8859-1">

           <title>Cafeteria Management System</title>

           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"  crossorigin="anonymous">

        <script type="text/javascript" src="bootstrap-4.5.3-dist/js/jquery-3.5.1.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

       
    <!--Google Font-->

    <link href="https://fonts.googleapis.com/css2? family Poppins:wght@400;600&display-swap" rel="stylesheet">

    <!--Stylesheet-->
        <link rel="stylesheet" type="text/css" href="style.css">

   

</head>

<body>
    <div class="menu">
        <div class="heading">
            <h1>CAFETERIA MANAGEMENT SYSTEM</h1>
            
        </div>

<style>

    body, html

    {

        height: 100%;

    }

        body

    {

       
       ​height: 100%;

       background-position: center;

       background-repeat: no-repeat;

       background-size: cover;
       
       background-attachment: fixed;

    }

    * {

  box-sizing: border-box;

}

 

    /* Create three equal columns that floats next to each other */

    .column {

        float: left;

        width: 100%;

        padding: 10px;

        height: 300px; /* Should be removed. Only for demonstration */

    }


    /* Clear floats after the columns */

    .row:after {

        content: "";

        display: table;

        clear: both;

    }

 

</style>

<body>

           <nav class="navbar navbar-expand-sm bg-white navbar-dark">

                <a class="navbar-brand" href="#" style="color: black;">Add your details</a>

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">

                        <a class="nav-link" href="logout.php" style="color: black;">

                        LogOut

                        </a>

                    </li>

                </ul>

   

        </nav>

   

        <div class="container">

            <div class="row">
                
                <?php
                    //echo $Total_members;
                if(isset($_POST['submittotalmembers'])) {
                        
      
                        $sql_query3 = "INSERT INTO customer_details ";
                        $query3= mysqli_query($conn, $sql_qery3);
                }
                
                ?>

               

                <div class="column" style="text-align:left ; margin-top: 80px; color: #d1313e;">

                    
                        <form action="customerprocess.php" method="POST">
                           
                            <h5>Your details </h5>


                            <div class="form-group">

                                Enter your user ID (unique):<input type="text" class="form-control" name="cust_id" placeholder="Enter user id"  maxlength="5">

                            </div>

                            <div class="form-group">

                                Enter your Name:<input type="text" class="form-control" name="cust_name" placeholder="Enter your full name" >

                            </div>
                            
                            <div class="form-group">

                                Enter the same Email id<input type="text" class="form-control" name="email" placeholder="Enter your Email_id">

                            </div>  

                            
                            <div class="form-group">

                                Gender:<input type="text" class="form-control" name="gender" placeholder="Enter your gender">

                            </div>
                            
                            <div class="form-group">

                                Phone no:<input type="text" class="form-control" name="phno" placeholder="Phone number" maxlength="10" pattern="[789][0-9]{9}">

                            </div>
                    
                    <?php  
                    
                    ?>
                            <button class="GFG " style="text-align: center; "

                                 name="submit"  >

                                Submit

                            </button>
                        </form>

                    
                </div> 
            </div>

        </div>

</body>

</html>