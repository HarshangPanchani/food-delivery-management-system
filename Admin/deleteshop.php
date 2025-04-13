<?php
include "connection.php"; 
$id =  $_GET['id'];
$query = "DELETE FROM shop_master WHERE s_id = '$id'";
$data = mysqli_query($con,$query);
if($data){
    echo "Record Deleted";
                ?>  
                    <meta http-equiv = "refresh" content = "0; url = http://localhost/New%20Project/Admin%20Pannel/mng_shop.php" />    
                <?php
            }else{
                echo "Fail";
}

?>