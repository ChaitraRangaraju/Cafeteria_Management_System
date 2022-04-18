<?php
?>

<?php


session_start();
  include 'connection.php';
  
  if(isset($_REQUEST['ADD TO CART']))
        {
         
                $menu_id = ($_POST['menu_id']);
                $menu_name =($_POST['menu_name']);
                $price = ($_POST['price']);
                
               
                
                $sql_query2 = "INSERT INTO order_details (menu_id,menu_name,price)
           VALUES ('$menu_id_id,'$menu_name','$price');";
                                
                $resultquery= mysqli_query($conn, $sql_query2);

                
                if ($resultquery) 
                {
                    
                    echo 'order details updated successfully';
                  
                    ?>
                    <p>Redirect to staff details page</p>
                     <button class="GFG " style="text-align: center;"

                                    onclick="window.location.href ='orderlist.php'" name="submit">

                                    Click here

                     </button>
                    
               <?php  }
                else
                {
                    echo "Error: " . "" . mysqli_error($conn);
                }
            
            }
     
?>

