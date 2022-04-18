<?php
session_start();

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

                <a class="navbar-brand" href="#" style="color: #cb202d;">Order List</a>

                <ul class="navbar-nav ml-auto">
                    
                    <li class="nav-item">

                        <a class="nav-link" href="menupage.php" style="color: #cb202d;">

                        Home

                        </a>

                    </li>


                    <li class="nav-item">

                        <a class="nav-link" href="logout.php" style="color: #cb202d;">

                        LogOut

                        </a>

                    </li>

                </ul>

        </nav>
    
    
        <?php

            include 'connection.php';
            $eemail= $_SESSION["email"];
            $query5="select order_no,total_amount,time,email from order_info where email='$eemail' order by order_no desc limit 1";
            
            $results5=mysqli_query($conn,$query5,1);
        ?>
                        <div style="font-size: 20px; text-align-last: left; padding: 35px 15px 50px 70px;">
                                    <?php
                                    while($rec5=mysqli_fetch_array($results5)){
                                    ?>
                                    Order Number - <?php echo $rec5['order_no']?>
                                    <?php echo "<br>"?>                               
                                    E-mail - <?php echo $rec5['email']?>
                                    <?php echo "<br>"?>
                                    Time - <?php echo $rec5['time']?>
                                    <?php echo "<br>"?>
                                    Total Amount - Rs <?php echo $rec5['total_amount']?>
                                    <?php echo "<br>"?>
                                    <?php
                                    }
                                    if ($results5->num_rows==0) {
                                        echo 'No orders';
                                     }
                                    ?>
					
                        </div>
                
    <?php

    include 'connection.php';
    $eemail= $_SESSION["email"];
    $query="select menu_id,menu_name,price,quantity,amount,oi.* from order_details od,( select order_no,total_amount,time,email from order_info where email='$eemail' order by order_no desc limit 1 ) as oi where oi.order_no=od.order_no";

    $results=mysqli_query($conn,$query,1);

    ?>    
   			
			<div class="col-md-12">
			<div class = "col-md-10" style="color:#006A4E">
					
					<table class="table table-hover" style="color:#cb202d;border:1;">
						<thead>
							<tr>    
                                                                <th>Menu ID</th>
                                                                <th>Menu Name</th>
                                                                <th>Price</th>
                                                                <th>Quantity</th>
                                                                <th>Amount</th>
							</tr>
						</thead>
						<?php
                                                    while($rec=mysqli_fetch_array($results))
                                                     {
                                                ?>
						<tbody style="color:black;">
							<tr>
									
                                                            <td>
                                                                    <?php echo $rec['menu_id'] ?>
                                                            </td>

                                                            <td>
                                                                    <?php echo $rec['menu_name']?>
                                                            </td>

                                                            <td>
                                                                    <?php echo $rec['price']?>
                                                            </td>
                                                            <td>
                                                                    <?php echo $rec['quantity']?>
                                                            </td>
                                                            <td>
                                                                    <?php echo $rec['amount']?>
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
                                    
                    <div>
                        

                </div>
            </div>
                
			</div>
            </body>
</html>
