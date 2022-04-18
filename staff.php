<?php

  include 'connection.php';
 
?>

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

                <a class="navbar-brand" href="#" style="color: black;">Add Staff details</a>

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
                        
      
                        $sql_query3 = "INSERT INTO staff_details ";
                        $query3= mysqli_query($conn, $sql_qery3);
                }
                
                ?>

               

                <div class="column" style="text-align:left ; margin-top: 80px; color: #d1313e;">

                    
                        <form action="staffprocess.php" method="POST">
                           
                            <h5>Staff details </h5>


                            <div class="form-group">

                                Staff_id :<input type="text" class="form-control" name="staff_id" placeholder="Enter staff id" maxlength="5">

                                 </div>

                                            <div class="form-group">

                                    Name:<input type="text" class="form-control" name="staff_name" placeholder="Enter staff's full name" >

                                 </div>
                            
                                 <div class="form-group">

                                    Email_id:<input type="text" class="form-control" name="a_email" placeholder="Enter valid Email_id" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">

                                 </div>  

                            
                                <div class="form-group">

                                    Gender:<input type="text" class="form-control" name="gender" placeholder="Enter staff gender">

                                 </div>
                            
                            
                            
                                <div class="form-group">

                                    phone_no:<input type="text" class="form-control" name="phno" placeholder="Phone number" maxlength="10" pattern="[789][0-9]{9}">

                                </div>
                                   
                                <div class="form-group">

                                    Designation:<input type="text" class="form-control" name="address" placeholder="Enter staff Designation">

                                 </div> 
                                 
                                 <div class="form-group">

                                    Salary:<input type="text" class="form-control" name="salary" placeholder="Enter staff salary">

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