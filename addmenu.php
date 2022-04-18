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

                <a class="navbar-brand" href="#" style="color: black;">Add Items to Menu</a>

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
                        
      
                        $sql_query3 = "INSERT INTO menu ";
                        $query3= mysqli_query($conn, $sql_qery3);
                }
                
                ?>

               

                <div class="column" style="text-align:left ; margin-top: 80px; color: #d1313e;">

                    
                        <form action="addmenuprocess.php" method="POST">
                           
                            <h5>Fill to add food item into menu </h5>


                            <div class="form-group">

                                Menu ID :<input type="text" class="form-control" name="menu_id" placeholder="Enter Menu ID" maxlength="5">

                                 </div>

                                            <div class="form-group">

                                    Menu Name:<input type="text" class="form-control" name="menu_name" placeholder="Enter menu name" >

                                 </div>
                            
                                 <div class="form-group">

                                    Image :<input type="text" class="form-control" name="image" placeholder="Enter image link">

                                 </div>  

                            
                                <div class="form-group">

                                    Price :<input type="text" class="form-control" name="price" placeholder="Enter price">

                                 </div>
                            
                            
                            
                                <div class="form-group">

                                    Description :<input type="text" class="form-control" name="description" placeholder="Enter Description of the item" maxlength="200">

                                </div>
                                   
                                
                                 
                            
                          
                    
                    <?php  
                    
                    ?>
                              <button class="GFG " style="text-align: center; "

                                    onclick="window.location.href ='addmenuprocess.php'" name="submit"  >

                                    Submit

                     </button>
                        </form>

                    
                     </div> 
            </div>

        </div>

</body>

</html>


