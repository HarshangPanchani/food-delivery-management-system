<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Address</title>
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


        .update{
            background-color: green;
            color: white;
            width: 120px;
            border-radius: 10px;
            outline: none;    
            height: 40px;
            font-weight: bold;
        }
        .update:hover{
            background-color: lightgreen;
            cursor: pointer;
        }
        .drop{
            background-color: red;
            color: white;
            width:122px;
            height: 40px;
            border-radius: 10px;
            outline: none;
            font-weight: bold;
            align: right;
        }
        .drop:hover{
            background-color: #FF726F;
            cursor: pointer;
        }
        .heading{
            font-size: 30px;
            /* font-family: TiltWarp; */
            font-family: 'Tilt Warp', cursive;
            text-align: center;
            font-weight: 400;
        }


        #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 90%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: rgb(243, 134, 57);
  color: white;
}
.tdd{
    text-align: center;
}
.container{
    width:1200px;
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
                <!-- <li><a class="ah" href="totalorders.php">Order Details</a></li> -->
                <li><a class="ah" href="Add.php">Add</a></li>
                <li><a class="ah" href="logout.php">Log Out</a></li>


            </ul>
        </aside>
    </div>
    <div class="container">

    <?php
    include "connection.php";
    error_reporting(0);
    $querry = "SELECT * FROM shop_master";
   $data = mysqli_query($con,$querry);
   $total = mysqli_num_rows($data);
   
   
   if($total != 0){
    // echo "Table has $total records";
    ?>
     <div class="group">
      <svg class="icon" aria-hidden="true" viewBox="0 0 24 24"><g><path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg>
      <input placeholder="Search" type="search" class="input">
    </div>
    <center>
    <h3 class="heading" style="color: black">Shop Address</h3><br>
    
    <table border="3" cellspacing="5" width="" id="customers">
        <tr>
        <th width="5%">Id</th>
        <th width="20%">Name</th>
        <th width="20%">City</th>
        <th width="20%">Area</th>
        <th width="40%">Address</th>
        <th width="15%">Pincode</th>
        <th width="20%">Update</th>

        </tr>
    
    <?php

    while($result = mysqli_fetch_assoc($data)){
        echo "<tr>
                <td>".$result['s_id']."</td>
                <td>".$result['s_name']."</td>
                <td>".$result['s_city']."</td>
                <td>".$result['s_area']."</td>
                <td>".$result['s_address']."</td>
                <td>".$result['s_pincode']."</td>
                <td class='tdd'><a href='updateshopaddr.php?id=$result[s_id]'><input type='submit' value='Update' class='update'></a>
                </td>

                </tr>";
                
    }
}else{
    echo "No Records";
   }
    ?>
</table>
</center>
<script>
    function confirmdelete(){
        return confirm('Are you sure?');
    }
</script>


    </div>
</body>
</html>
