<?php


?>

<?php


session_start();
  include 'connection.php';
  
  if(isset($_REQUEST['submit']))
        {
         
                $cust_id = ($_POST['cust_id']);
                $cust_name = ($_POST['cust_name']);
                $cemail =($_POST['email']);
                $Gender = ($_POST['gender']);
                $ph_no = ($_POST['phno']);
                
                $sql_query2 = "INSERT INTO customer_details (cust_id,cust_name,email,gender,phno)
           VALUES ('$cust_id','$cust_name','$cemail','$Gender','$ph_no');";
                                
                $resultquery= mysqli_query($conn, $sql_query2);

                
                if ($resultquery) 
                {
                    echo 'your details inserted successfully';
                  
?>
                    <p>Redirect to login page</p>
                    <button class="GFG " style="text-align: center;"

                            onclick="window.location.href ='signin.php'" name="submit">

                            Click here

                    </button>
                    
               <?php  }
                else
                {
                    echo "Error: " . "" . mysqli_error($conn);
                }
            }  
                ?>


