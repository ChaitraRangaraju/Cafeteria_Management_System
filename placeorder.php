<?php
    session_start();
    include 'connection.php';
    $data = $_POST['json_string'];
  
    
    $dj = json_decode($data);
  
    $email= $_SESSION["email"];
    $totalamount= $dj ->amount;
    $order_details= $dj->orderDetails;
    
    $sql_order_info = "INSERT INTO order_info( email, total_amount, status) VALUES ('$email',$totalamount,'DELIVERED');";
                                
    $resultquery= mysqli_query($conn, $sql_order_info);
    $order_id = mysqli_insert_id($conn);/*last insert auto increment id*/
       
    
    
    foreach($order_details as $orderItem){
       
        
        $sql_orderdet = "INSERT INTO order_details(order_no,menu_id,menu_name,quantity,price,amount) VALUES ($order_id,$orderItem->menu_id,'$orderItem->menu_name',$orderItem->quantity,$orderItem->price,$orderItem->amt);";
        $resultquery= mysqli_query($conn, $sql_orderdet);
       
    }
    
    echo "Order_Success";
?>



