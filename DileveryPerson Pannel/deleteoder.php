<?php
include "connection.php"; 
$id =  $_GET['id'];
$query = "DELETE FROM order_food_master WHERE order_id = '$id'";
$data = mysqli_query($con,$query);
if($data){
    echo "Record Deleted";
                ?>  
                    <meta http-equiv = "refresh" content = "0; url = http://localhost:81/project/New%20Project/Admin%20Pannel/mng_customer.php" />    
                <?php
            }else{
                echo "Fail";
}

?>