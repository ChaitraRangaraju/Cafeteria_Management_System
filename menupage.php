<?php

include 'connection.php';

$query="select * from menu";

$results=mysqli_query($conn,$query,1);

//$row_users=mysqli_fetch_array($results);

?>

<!DOCTYPE html>

<html>
<head>
    <title>Grid Food Menu</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"  crossorigin="anonymous">

        <script type="text/javascript" src="bootstrap-4.5.3-dist/js/jquery-3.5.1.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Google Font-->

    <link href="https://fonts.googleapis.com/css2? family Poppins:wght@400;600&display-swap" rel="stylesheet">


    <!--Stylesheet--> 
    <link rel="stylesheet" href="menustyle.css">
    
    <script>
        cart_items={};
        window.onload= function(){
            updateCart();
        }

        function addtocart( id,name,price ){
            if(!cart_items.hasOwnProperty(id)){
                cart_items[id]={
                    name,
                    price,
                    quantity:1
                    
                };
                
            }
            updateCart();
        }
        function clearCart(){
            cart_items={};
            updateCart();
        }
        function quantityDec(id){
            if(cart_items[id].quantity>0){
               cart_items[id].quantity=cart_items[id].quantity-1;
            }
            updateCart();
        }
        function quantityInc(id){
            cart_items[id].quantity=cart_items[id].quantity+1;
            updateCart();
        }
        
        function updateCart(){
            var cartElement = document.getElementById("cart");
            var totalPriceElement = document.getElementById("cart-total-price");
            var totalPrice=0;
            if(Object.keys(cart_items).length){
                cartElement.innerHTML="";
                for(id in cart_items){
                    var amt=cart_items[id].quantity * cart_items[id].price;
                    cartElement.innerHTML+="<div class=\"cart-item\">"
                        + "<div class=\"cart-item-name\">"
                        + cart_items[id].name
                        + "</div>"
                        + "<div class=\"cart-item-quantity\">"
                            + "<button class=\"amt-buttonplusminus\" onclick=\"quantityDec("+id+")\">-</button>"
                            +"<span>"
                                + cart_items[id].quantity
                            +"</span>"
                            + "<button class=\"amt-buttonplusminus\" onclick=\"quantityInc("+id+")\">+</button>"
                        + "</div>"
                        + "<div class=\"cart-item-amount\">"
                        + amt
                        + "</div>"
                    + "</div>";
                   
                    totalPrice+= amt;     
                }
            }
            else{
                cartElement.innerHTML="Add items to cart to place orders";

            }
            totalPriceElement.innerHTML = "Total Price --- Rs." + totalPrice;
        }
        
        function placeOrder(){
            console.log("Placing order",cart_items);
            var totalPrice=0;
            var orderDetails=[];
            if(Object.keys(cart_items).length){
                for(id in cart_items){
                    
                    if(cart_items[id].quantity<=0){
                        continue;
                    }
                    var amt=cart_items[id].quantity * cart_items[id].price;
                    totalPrice+= amt; 
                    var o={
                        menu_id:id,
                        menu_name:cart_items[id].name, 
                        quantity:cart_items[id].quantity,
                        price:cart_items[id].price,
                        amt
                    };
                    orderDetails.push(o);
                }
                
                if(orderDetails.length==0){
                    alert("No items with quantity to place order");
                }
                else{
                    fetch("http://localhost/PhpProject1/placeorder.php", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/x-www-form-urlencoded; charset=UTF-8"
                        },
                        body: "json_string=" + JSON.stringify({amount:totalPrice,orderDetails})
                    })
                        .then((response) => response.text())
                        .then((res) => {
                            console.log(res);
                            
                            alert("Order placed successfully");
                            clearCart();
                        })
                
                        .catch((error)=>{
                            console.log(error);
                    
                            alert("Order failed! Please try again");
                        });
                }
            }
            else{
                alert("Add items to cart to place order");
                
        }
         
        }
        
    </script>

</head>
<body>
    <div class="menu">
        <div class="heading">
            <h1>CAFETERIA MANAGEMENT SYSTEM</h1>
            <h3>&mdash; MENU &mdash; </h3>
        </div>
        <div class="main-container"> 

            <div class="foodmenu-container">
                <?php
                	while ($row_users= mysqli_fetch_array($results)) {
                            $cart_parameter= $row_users['menu_id'].",'" .$row_users['menu_name']."',".$row_users['price'];
                            echo" <div class=\"food-items\">";
                                echo" <div class=\"food-items-img\">";
                                    echo"<img src=\"".($row_users['image'])."\"/>";
                                echo"</div>";

                                echo"<div class=\"details-sub\">";
                                echo"<h5 class='details'>".($row_users['menu_id']." - " .$row_users['menu_name'])."</h5>";



                                     echo"<div class='details'>";
                                        echo"<h5  class='price'>" ."Rs ".($row_users['price'])."</h5>";
                                       echo"</div>";

                                      echo"<div class='details'>";
                                        echo"<p>".($row_users['description'])."</p>";
                                      echo"</div>";
                                echo"</div>";
                                echo"<div class='details'>";
                                echo"<button class=\"menu-button1\" onclick=\"addtocart(".$cart_parameter.")\">Add To Cart</button>";
                                echo"</div>";
                            echo"</div>";
                        }
                ?>
            </div>    
            
                    
            <div class="cart-container">
                <div class="cart-mycart">
                    <h5> MY CART</h5>
                </div>
                <div class="cart-items-container" id="cart">
                    Add items to cart to place orders
                </div>
                <div class="cart-price-container" id="cart-total-price">
                    totalprice: 0 
                </div>
                <div class="cart-order-container">
                    <button class="menu-button1" onclick="placeOrder()">place order</button>
                </div>
                <!--<div class="cart-order-container">
                    <button class="menu-button1" >place order</button>-->
                <h5><a class="nav-link" href="orderlist.php" style="color:#cb202d">View My latest Orders</a></h5>
                    
                    <a class="nav-link" href="logout.php" style="color:#cb202d">Logout</a>
                    
                    
                    
                    
                

                </div>
            </div>
                
       </div>     
    </div>
        
</body>
</html>