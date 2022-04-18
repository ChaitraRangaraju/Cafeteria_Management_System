<?php

?>

<?php


session_start();
  include 'connection.php';
 
  
  if(isset($_REQUEST['submit']))
        {
         
                $menu_id = ($_POST['menu_id']);
                $menu_name = ($_POST['menu_name']);
                $image =($_POST['image']);
                $prices = ($_POST['price']);
                $description = ($_POST['description']);
                
                
               
                
                $sql_query2 = "INSERT INTO menu (menu_id,menu_name,image,price,description)
           VALUES ('$menu_id','$menu_name','$image','$prices','$description');";
                                
                $resultquery= mysqli_query($conn, $sql_query2);

                
                if ($resultquery) 
                {
                    
                    echo 'Item inserted successfully ';
                  
                    ?>
                    <p>Redirect to Home page</p>
                     <button class="GFG " style="text-align: center;"

                                    onclick="window.location.href ='afteradminlogin.php'" name="submit">

                                    Click here

                     </button>
                    
               <?php  }
                else
                {
                    echo "Error: " . "" . mysqli_error($conn);
                }
            
            }
           
?>

