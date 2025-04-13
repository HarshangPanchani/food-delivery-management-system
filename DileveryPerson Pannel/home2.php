<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Permanent+Marker&display=swap");
@import url('https://fonts.googleapis.com/css2?family=Tilt+Warp&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Signika+Negative:wght@300&family=Tilt+Warp&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Signika+Negative:wght@300&family=Tilt+Warp&family=Work+Sans:ital,wght@0,300;1,200&display=swap');

* {
  padding: 0;
  margin: 0;
}
.nav {
  height: 100px;
  /* width: 500px; */
  background-color: rgb(243, 134, 57);
}
.nav,
.h2 {
  color: white;
  font-size: 30px;
  /* font-family: Lato; */
  font-family: Lato;
  text-align: left;

}

.navv {
  padding-top: 20px;
}
.nav,
h1 {
  color: white;
  text-align: center;
  font-weight: 300;
  /* font-family: Lato, Dois; */
  font-family: Tilt Warp;
  /* margin: 1px */
  display:block;
}
.navv,
h1 {
  font-size: 40px;
}
.container{
    padding: 38px;
}
 .h3{
    font-family: 'Oswald', sans-serif;
}
h3{
    font-family: 'Work Sans', sans-serif;
    
}
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
        /* .heading{
            font-size: 30px;
            font-family: Dosis, Lato;
            text-align: center;
            font-weight: 800;
        } */


        #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  position: relative;
  
  
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
    /* width: 1200px; */
    height: 558px;
    /* background-color: red; */
}
.drop1{
  background-color: green;
            color: white;
            width:122px;
            height: 40px;
            border-radius: 10px;
            outline: none;
            font-weight: bold;
          
}
.drop1:hover{
  cursor: pointer;
}
.footer {
  text-align: center;
  padding: 20px;
  background-color:rgb(243, 134, 57);
  color: white;
  align: bottom;
}
.ft{
  font-family:Work Sans;
}
    </style>
</head>
<body>
        <div class="nav">
        <nav class="navv">
            <h2 class="h2">Near By Food Court</h2>
            <h1>Delivery Person</h1>
        </nav>
        </div>
        <div class="container">
        <?php
        
    include "connection.php";
    error_reporting(0); 
   $querry = "SELECT * FROM order_food_master";
   $data = mysqli_query($con,$querry);
   $total = mysqli_num_rows($data);
   $querry1 = "SELECT * FROM customer_master";
   $data1 = mysqli_query($con,$querry1);
   $total1 = mysqli_num_rows($data1);
   $querry2 = "SELECT * FROM shop_master";
   $data2 = mysqli_query($con,$querry2);
   $total = mysqli_num_rows($data2);
  //  $querry3 = "SELECT * FROM shop_address_master";
  //  $data3 = mysqli_query($con,$querry3);
  //  $total = mysqli_num_rows($data3);
   
   if($total != 0){
    // echo "Table has $total records";
    ?>
    <center>

    <span><h2 class="h3" style="color: black">Orders</h2><br>
    </span>
    
    <table border="3" cellspacing="5" width=""  id="customers">
        <tr>
        <th width="5%">Id</th>
        <th width="10%">Customer Name</th>
        <th width="10%">Shop Name</th>
        <th width="10%">Customer CNO</th>
        <th width="10%">Shop CNO</th>
        <th width="10%">Total</th>
        <th width="10%">Shop Address</th>
        <th width="10%">Customer Address</th>
        <th width="10%">Delivered</th>
        </tr>
    
    <?php
    while($result = mysqli_fetch_assoc($data)){
    $result1 = mysqli_fetch_assoc($data1);
    $result2 = mysqli_fetch_assoc($data2);
    // $result3 = mysqli_fetch_assoc($data3);
          
        echo "<tr>
                <td>".$result['order_id']."</td>
                <td>".$result1['c_name']."</td>
                <td>".$result2['s_name']."</td>
                <td>".$result1['c_contact_no']."</td>
                <td>".$result2['s_contact_no']."</td>
                <td>".$result['total']."</td>
                <td>".$result2['s_area']."</td>
                <td><a href='show.php?id=$result[c_id]'><input type='submit' value='Show' class='drop1'></a></td>
                <td><a href='deleteoder.php?id=$result[order_id]'><input type='submit' value='Deliered' class='drop' onclick='return confirmdelete()'></a></td>
                </tr>";
    }
    }else{
    echo "No Oders..";
   }
    ?>
    </table>
    </center>
    <script>
    function confirmdelete(){
        return confirm('Confirm Delivery');
    }
    </script>
        </div>
        <div class="footer">
        <p class="ft">Near By Food Court <br>
        </div>
</body>
</html>