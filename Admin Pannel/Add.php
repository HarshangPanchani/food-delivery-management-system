<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Customer</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="search.css">
    <link rel="stylesheet" href="dropbtn.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Warp&display=swap" rel="stylesheet">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Tilt+Warp&display=swap');
     
      
.container{
    width: 1200px;
    /* background-color: red; */
}
.r{
    font-size: 25px;
    padding: 10px;
  text-decoration: none;
  color: white;
  font-weight: 400;
  border-radius: 5px;
  line-height: 70px;
   color: black;
    font-family: Tilt Warp;
}
.r:hover{
    color: white;
}
    </style>
</head>
<body>
    <div class="nav">
        <nav class="navv">
            <h2>Near By Food Court</h2>
            <h1>Admin</h1>
        </nav>
    </div>
    

    <div class="sidebar">
    <p>Menu</p><hr class="hr">
        <aside class="side">
            <ul class="list">
                <li><a class="ah" href="home.php">Dashboard</a></li>
                <div class="dropdown">
                <button class="dropbtn">Manage Customer</button>
                            <div class="dropdown-content">
                             <a href="mng_customer.php">Manage</a>
                             <a href="cust_address.php">Other Details</a>    
                     </div>
</div>
                <li><a class="ah" href="mng_shop.php">Manage Shop</a></li>
                <li><a class="ah" href="mng_deliveryperson.php">Manage Delivery person</a></li>
                <li><a class="ah" href="shopaddress.php">Shop Address</a></li>
                <li><a class="ah" href="deliverylic.php">Delivery Person Details</a></li>
                <li><a class="ah" href="Add.php">Add</a></li>
                <!-- <li><a class="ah" href="cust_address.php">Customer Full Details</a></li> -->
                <li><a class="ah" href="logout.php">Log Out</a></li>


            </ul>
        </aside>
    </div>
    <div class="container">
    
    <center>
        <div class="btn">
            <a class="r"  href="custregistration.php">Add Customer</a>
        </div>
        <div class="btn">
            <a class="r"  href="shopregistration.php">Add Shop</a>
        </div>
        <div class="btn">
            <a class="r"  href="deliverypersonregistration.php">Add DeliveryPerson</a>
        </div>
    </center>
    

    </div>
</body>
</html>
