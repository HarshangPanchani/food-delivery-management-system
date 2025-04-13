<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="search.css">
    
    <title>Orders....</title>
    <style> 
@import url('https://fonts.googleapis.com/css2?family=Tilt+Warp&display=swap');
@import url("https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Permanent+Marker&display=swap");
 
    button {
    display: flex;
    height: 3em;
    width: 100px;
    align-items: center;
    justify-content: center;
    background-color: #eeeeee4b;
    border-radius: 3px;
    letter-spacing: 1px;
    transition: all 0.2s linear;
    cursor: pointer;
    border: none;
    background: #fff;
   }
   
   button > svg {
    margin-right: 5px;
    margin-left: 5px;
    font-size: 20px;
    transition: all 0.4s ease-in;
   }
   
   button:hover > svg {
    font-size: 1.2em;
    transform: translateX(-5px);
   }
   
   button:hover {
    box-shadow: 9px 9px 33px #d1d1d1, -9px -9px 33px #ffffff;
    transform: translateY(-2px);
   }


.heading{
  font-size: 30px;
  /* font-family: TiltWarp; */
  font-family: 'Tilt Warp', cursive;
  text-align: center;
  font-weight: 600;
  height: 10px;
}
 #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 60%;
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
    
}
    </style>
 </head>
 <body>
    <div class="container">
    <?php
    // if(isset($_POST['view'])){
    //   header("Location: cust_address.php"); 
    // }
    include "connection.php";
    error_reporting(0);
    $result = $_GET['id'];
   $result1 = $_GET['id1'];
   $result5 = $_GET['id2'];
   $result4 = $_GET['id3'];
   $querry = "SELECT * FROM cust_address_master";
   $data = mysqli_query($con,$querry);
   $total = mysqli_num_rows($data);

  
//   $querry3  ="SELECT * FROM order_detail_master WHERE c_id='$result' ";
//       $data2 = mysqli_query($con,$querry3);
//       $total2= mysqli_num_rows($data2); 


      $querry3  ="SELECT * FROM cust_payment_master WHERE order_id='$result1' ";
      $data4 = mysqli_query($con,$querry3);
      $total4= mysqli_num_rows($data4); 

  

   $querry3 = "SELECT * FROM order_food_master WHERE c_id=  '$result' ";
   $data3 = mysqli_query($con,$querry3);
   $total3 = mysqli_num_rows($data3);

   $querry3  ="SELECT * FROM food_master WHERE f_id='$result' ";
      $data5 = mysqli_query($con,$querry3);
      $total4= mysqli_num_rows($data5); 

      $querry3  ="SELECT * FROM shop_master WHERE s_id='$result' ";
      $data6 = mysqli_query($con,$querry3);
      $total4= mysqli_num_rows($data6); 


  //  $result1= mysqli_fetch_assoc($data1);
  
   if($total != 0){
    // echo "Table has $total records";
   
    if($total1 !=0){
      echo "Table has no record";
    }  
    ?>
    <center>

    <span><h3 class="heading" style="color: black">Customer Orders</h3><br>
    </span>
    
    <table border="3" cellspacing="5" width=""  id="customers">
        <tr>
        <th width="5%">Order_Id</th>
        <th width="5%">Customer_Id</th>
        <th width="5%">Shop_Name</th>
        <!-- <th width="5%">DileveryPer_Id</th> -->
        <th width="5%">Food_Name</th>
        <th width="5%">Qty</th>
        <th width="5%">Total</th>
        <th width="10%">Status</th>
        <th width="10%">Time</th>
        <!-- <th width="10%">Cust_Pay_Id</th> -->
        </tr>
    
    <?php

    while($result = mysqli_fetch_assoc($data)){
      $result1 = mysqli_fetch_assoc($data3);
      $result4 = mysqli_fetch_assoc($data4);
      $result5 = mysqli_fetch_assoc($data2);
      $result6 = mysqli_fetch_assoc($data5);
      $result7 = mysqli_fetch_assoc($data6);
        echo "<tr>
                <td>".$result1['order_id']."</td>
                <td>".$result1['c_id']."</td>
                <td>".$result7['s_name']."</td>
                <td>".$result6['f_name']."</td>
                <td>".$result5['Qty']."</td>
                <td>".$result1['total']."</td>
                <td>".$result1['status']."</td>
                <td>".$result1['o_time']."</td> 
             </tr>";

    }
    }else{
    echo "No Records";
   }
    ?>
    </table>
    </center>
   
    </div>
 </body>
 </html>