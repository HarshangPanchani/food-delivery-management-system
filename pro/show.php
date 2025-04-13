<meta http-equiv="refresh" content="4;url=show.php">
<?php
    include "connection.php";
    $q= mysqli_query($con,"SELECT * FROM customer_master WHERE c_id='1'");
    $row= mysqli_fetch_assoc($q);
    echo $row['c_name'];
?>