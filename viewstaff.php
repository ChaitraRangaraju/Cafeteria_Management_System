<?php

include 'connection.php';

$query="select * from staff_details;";

$results=mysqli_query($conn,$query,1);

//$row_users=mysqli_fetch_array($results);

?>

</html>


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

      
       height: 100% ;
       background-position: center;

       background-repeat: no-repeat;

       background-size: cover;

    }

</style>

   

<body style="background-color: white">

           <nav class="navbar navbar-expand-sm bg-white navbar-dark">

                <a class="navbar-brand" href="#" style="color: black;">Staff details</a>

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
					
            <table class="table table-hover" style="color:#cd202d;border:1;">
		<thead>
                    <tr>
			<th>Staff id</th>
			<th>Staff name</th>
			<th>E-mail</th>
			<th>Gender</th>
			<th>Phone Number</th>
                        <th>Designation</th>
                        <th>Salary</th>
							
                    </tr>
		</thead>
		<?php
                         while($rec=mysqli_fetch_array($results))
                            {
                ?>
				<tbody style="color: black">
					<tr>
						<td>
							<?php echo $rec['staff_id'] ?>
						</td>
						<td>
							<?php echo $rec['staff_name'] ?>
						</td>
						<td>
							<?php echo $rec['a_email'] ?>
						</td>
						<td>
							<?php echo $rec['gender'] ?>
						</td>
						<td>
							<?php echo $rec['phno']?>
						</td>
                                                <td>
							<?php echo $rec['address']?>
                                                </td> 
                                                <td>
                        				<?php echo $rec['salary']?>
                        			</td>
									
									
                                            <?php
						}
                                                if ($results->num_rows==0) {
                                                echo 'No details found';
                                                }
                                            ?>
					</tr>
				</tbody>
            </table>
	</div>
    </div>

</body>
</html>