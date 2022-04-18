<?php

include 'connection.php';

$query="select * from order_details order by order_no desc ;";

$results=mysqli_query($conn,$query,1);

//$row_users=mysqli_fetch_array($results);

?>
<html xmlns="http://www.w3.org/1999/xhtml" class="CMS">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Cafeteria Management System</title>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
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
        body{
    margin: 0;
    padding: 0;
    background-image: url("");
     -webkit-background-size: cover;
    background-size: cover;
    font-family: Tahoma, sans-serif;   
    
}

    </style>
    
    
<body>
    
         <nav class="navbar navbar-expand-sm bg-white navbar-dark">

                <a class="navbar-brand" href="#" style="color: black;">Ordered Items List</a>

                <ul class="navbar-nav ml-auto">
                    
                    <li class="nav-item">

                        <a class="nav-link" href="afteradminlogin.php" style="color: black;">

                        Home

                        </a>

                    </li>


                    <li class="nav-item">

                        <a class="nav-link" href="logout.php" style="color: black;">

                        LogOut

                        </a>

                    </li>

                </ul>

        </nav>
   			<div class = "row" style ="margin-top:50px">	
					
				</div>
				<div class="col-md-12">
			<div class = "col-md-10" style="color:#006A4E">
					
					<table class="table table-hover" style="color:#cb202d;border:1;">
						<thead>
							<tr>
								<th>Order Number</th>
								<th>Menu ID</th>
								<th>Menu Name</th>
								<th>Quantity</th>
								
								
						</thead>
						<?php
                                                    while($rec=mysqli_fetch_array($results))
                                                     {
                                                ?>
						<tbody style="color:black;">
							<tr>
									<td>
										<?php echo $rec['order_no'] ?>
									</td>
									<td>
										<?php echo $rec['menu_id'] ?>
									</td>
									<td>
										<?php echo $rec['menu_name'] ?>
									</td>
									<td>
										<?php echo $rec['quantity'] ?>
									</td>
                                                                        
                                                                
                                                                
      
									
					<?php
						}
                                                if ($results->num_rows==0) {
                                                echo 'No orders';
                                                }
    					?>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
            </body>
</html>