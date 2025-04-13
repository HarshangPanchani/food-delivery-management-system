<?php 
include "connection.php";
$search_value = $_POST["search"];
$sql = "SELECT * FROM customer_master WHERE c_name LIKE '%{$search_value}%'";
$result = mysqli_query($con,$sql) or die("Failed");
$output .= "";
if(mysqli_num_rows($result)>0){
    $output='<table>
            <tr>
            <th>ID</th>
            <th>Name<th>
            </tr>';
             while($row = mysqli_fetch_assoc($result)){
                $output .= "<tr><td>{$row["c_id"]}</td><td>{$row["c_name"]}"
             }
             $output .= "</table>";
             mysqli_close($con);
             echo $output;
}else{
    echo "<h2>No Records Found</h2>";
}
?>