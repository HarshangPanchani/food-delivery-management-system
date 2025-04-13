
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
    </style>
</head>
<body>
<div class="nav">
        <nav class="navv">
            <h2 class="h2">Near By Food Court</h2>
            <h1>Address</h1>
        </nav>
        </div>
    <div class="container">

    <?php
   /* include "connection.php";
    error_reporting(0);
    $id=$_GET['id'];
   $querry = "SELECT * FROM order_detail_master WHERE order_id=$id";
   $data = mysqli_query($con,$querry);
   $total = mysqli_num_rows($data);
  
   
   
   if($total != 0){
    // echo "Table has $total records";
    */ 
    ?>
    <center>

    <!-- <span><h3 class="heading" style="color: black">Customer Address</h3><br> -->
    </span>
    
    <table border="3" cellspacing="5" width=""  id="customers">
        <tr>
        <!-- <th width="5%">Address_Id</th>
        <th width="5%">Customer_Id</th> -->
        <th width="15%">Food name</th>
        <th width="10%">Quantity</th>
        
        </tr>
    
    <?php
    /*error_reporting(0);
    while($result = mysqli_fetch_assoc($data)){
      $fid=$result['f_id'];
        
        $data1 = mysqli_query($con,"SELECT * FROM food_master WHERE f_id= $fid");
        $result2= mysqli_fetch_assoc($data1);
        $fname=$result1['f_name'];
        $qty= $result['qty'];*/
        echo "<tr>
               
                <td>Dabeli</td>
                <td>2</td>
                
                
                
        </tr>";
 /*   }
    }else{
    echo "No Records";
   }*/
    ?>
    </table>
    </center>
    

    </div>
</body>
</html>
