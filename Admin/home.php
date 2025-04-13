<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="box.css">
    <link rel="stylesheet" href="back.css">
    <link rel="stylesheet" href="dropbtn.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Permanent+Marker&display=swap" rel="stylesheet">
    <style>
        .container{
            width: 1200px;
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
                <li><a class="ah" href="mng_customer.php">Manage Shop</a></li>
                <li><a class="ah" href="mng_deliveryperson.php">Manage Delivery Person</a></li>
                <li><a class="ah" href="shopaddress.php">Shop Address</a></li>
                <li><a class="ah" href="deliverylic.php">Delivery Person Details</a></li>
                <!-- <li><a class="ah" href="totalorders.php">Order Details</a></li> -->
                <li><a class="ah" href="Add.php">Add</a></li>
                <li><a class="ah" href="logout.php">Log Out</a></li>



            </ul>
        </aside>
    </div>
    <div class="container">
        <div class="main-container">
            <div class="container-emp">
                <div class="box">
                    <span class="title">Total Customer</span>
            <div>
                <p> <?php
                    include "connection.php";
                    $query = "SELECT * FROM customer_master";
                    if ($result = mysqli_query($con, $query)) {
                        // Return the number of rows in result set
                        $rowcount = mysqli_num_rows($result);
                        echo ($rowcount);
                        // Free result set
                        mysqli_free_result($result);
                    } else {
                        echo "Error";
                    }
                    ?></p>
            </div>
            </div>
            <div class="container-emp2">
         <div class="box">
            <span class="title">Total Shop</span>
            <div>
                <p> <?php
                    include "connection.php";
                    $query = "SELECT * FROM shop_master";
                    if ($result = mysqli_query($con, $query)) {
                        // Return the number of rows in result set
                        $rowcount = mysqli_num_rows($result);
                        echo ($rowcount);
                        // Free result set
                        mysqli_free_result($result);
                    } else {
                        echo "Error";
                    }
                    ?></p>
            </div>
            </div>
            <div class="container-emp3">
         <div class="box">
            <span class="title">Total Delivery Person</span>
            <div>
                <p> <?php
                    include "connection.php";
                    $query = "SELECT * FROM dperson_master";
                    if ($result = mysqli_query($con, $query)) {
                        // Return the number of rows in result set
                        $rowcount = mysqli_num_rows($result);
                        echo ($rowcount);
                        // Free result set
                        mysqli_free_result($result);
                    } else {
                        echo "Error";
                    }
                    ?></p>
            </div>
            </div>
            <div class="container-emp4">
         <div class="box">
            <span class="title">Total Foods</span>
            <div>
                <p> <?php
                    include "connection.php";
                    $query = "SELECT * FROM food_master";
                    if ($result = mysqli_query($con, $query)) {
                        // Return the number of rows in result set
                        $rowcount = mysqli_num_rows($result);
                        echo ($rowcount);
                        // Free result set
                        mysqli_free_result($result);
                    } else {
                        echo "Error";
                    }
                    ?></p>
            </div>
            </div>
            <div class="container-emp5">
         <div class="box">
            <span class="title">Total Orders Yet</span>
            <div>
                <p> <?php
                    include "connection.php";
                    $query = "SELECT * FROM order_detail_master";
                    if ($result = mysqli_query($con, $query)) {
                        // Return the number of rows in result set
                        $rowcount = mysqli_num_rows($result);
                        echo ($rowcount);
                        // Free result set
                        mysqli_free_result($result);
                    } else {
                        echo "Error";
                    }
                    ?></p>
            </div>
            </div>
            <div class="container-emp6">
         <div class="box">
            <span class="title">Total Food Category</span>
            <div>
                <p> <?php
                    include "connection.php";
                    $query = "SELECT * FROM food_category_master";
                    if ($result = mysqli_query($con, $query)) {
                        // Return the number of rows in result set
                        $rowcount = mysqli_num_rows($result);
                        echo ($rowcount);
                        // Free result set
                        mysqli_free_result($result);
                    } else {
                        echo "Error";
                    }
                    ?></p>
            </div>
            </div>
            
        </div>
        
    </div>
    
</body>
</html>