<?php


?>

<?php


session_start();
  include 'connection.php';
  
  if(isset($_REQUEST['submit']))
        {
         
                $staff_id = ($_POST['staff_id']);
                $staff_name = ($_POST['staff_name']);
                $a_email =($_POST['a_email']);
                $Gender = ($_POST['gender']);
                $ph_no = ($_POST['phno']);
                $address = ($_POST['address']);
                $salary = ($_POST['salary']);
                
                
               
                
                $sql_query2 = "INSERT INTO staff_details (staff_id,staff_name,a_email,gender,phno,address,salary)
           VALUES ('$staff_id','$staff_name','$a_email','$Gender','$ph_no','$address','$salary');";
                                
                $resultquery= mysqli_query($conn, $sql_query2);

                
                if ($resultquery) 
                {
                    
                    echo 'Staff details updated successfully';
                  
                    ?>
                    <p>Redirect to staff details page</p>
                     <button class="GFG " style="text-align: center;"

                                    onclick="window.location.href ='viewstaff.php'" name="submit">

                                    Click here

                     </button>
                    
               <?php  }
                else
                {
                    echo "Error: " . "" . mysqli_error($conn);
                }
            
            }
     
?>


