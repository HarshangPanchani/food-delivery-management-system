<?php
include "connection.php"; 
$id =  $_GET['id'];
$query = "DELETE FROM customer_master WHERE c_id = '$id'";
$data = mysqli_query($con,$query);
if($data){
    // echo "Record Deleted";
                ?>  
                    <meta http-equiv = "refresh" content = "0; url = http://localhost/Project/New%20Project/Admin%20Pannel/mng_customer.php" />    
                <?php
            }else{
                echo "Fail";
}

?>