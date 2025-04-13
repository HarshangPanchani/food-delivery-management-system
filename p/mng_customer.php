<form method="POST" action="<?php $_PHP_SELF ?>">
    Name: <input type="text" name="c_name" id="">
    Email: <input type="email" name="c_email" id="">
    
    <input type="submit" value="Enter" name="submit">
</form>
<?php
    
 

    
    if(isset($_POST['submit']))
    {
        include "connection.php";
    $Name=strval($_POST['c_name']);
    $Email=strval($_POST['c_email']);
    $q=mysqli_query($con,"SELECT * FROM `customer_master` WHERE c_name='$Name' AND c_email='$Email'");

    echo "<table border=1><tr>
    <th> c_id   </th>
    <th> c_name   </th>
    <th> c_email  </th>
    <th> c_pass  </th>
    <th> c_contact_no  </th>
    </tr>";
        while($row=mysqli_fetch_array($q))
        {
            echo "<tr>";
            echo "<td>", $row['c_id']."</td>";
            echo "<td>". $row['c_name']. "</td>";
            echo "<td>". $row['c_email']. "</td>"; 
            echo "<td>". $row['c_pass']. "</td>";
            echo "<td>". $row['c_contact_no']. "</td>";
            echo "</tr>";
        }
        echo "</table>";

    }

    
?>
<br>
<br>
<h3>update</h3>
<form method="POST" action="<?php $_PHP_SELF ?>">
    id no: <input type="number" min=1 name="uc_id_no" id="">
    Name: <input type="text" name="uc_name" id="">
    Email: <input type="email" name="uc_email" id="">
    Password: <input type="password" name="uc_pass" id="">
    contact no: <input type="number" name="uc_contact_no" id="">
    
    <input type="submit" value="Enter" name="usubmit">
</form>
<?php
    
    if(isset($_POST['usubmit'])) {
        
        $uname =strval($_POST['uc_name']);
        $uemail = strval($_POST['uc_email']);
        $ucontact = $_POST['uc_name'];
        $upass = $_POST['uc_pass'];
        $uid = $_POST['uc_id_no'];

        include "connection.php";
        $u=mysqli_query($con,"UPDATE `customer_master` SET `c_name`='$uname',`c_email`='$uemail',`c_pass`='$upass',`c_contact_no`='$ucontact' WHERE `c_id`='$uid'");
        if ($u)
        {
            echo "record updated successfully";
        }
        else{
            die("query doesn't executed");
        }
    }
    
?>

<br>
<br>
<br>
<h3>delete</h3>
<form method="POST" action="<?php $_PHP_SELF ?>">
    id no: <input type="number" min=1 name="dc_id_no" id="">
    <input type="submit" value="Enter" name="dsubmit">
</form>
<?php
    
    if(isset($_POST['dsubmit'])) {
        
       
        $uid = $_POST['dc_id_no'];

        include "connection.php";
        $d=mysqli_query($con,"DELETE FROM `customer_master` WHERE `c_id`='$uid'");
        if ($d)
        {
            echo "record deleted successfully";
        }
        else{
            die("query doesn't executed");
        }
    }
    
?>
<br><br><br>
<h2>customers</h2>
<?php
    
    include "connection.php";
  
    $s_t=mysqli_query($con,"SELECT * FROM `customer_master`");

    echo "<table border=1><tr>
    <th> c_id   </th>
    <th> c_name   </th>
    <th> c_email  </th>
    <th> c_pass  </th>
    <th> c_contact_no  </th>
    </tr>";
        while($row=mysqli_fetch_array($s_t))
        {
            echo "<tr>";
            echo "<td>", $row['c_id']."</td>";
            echo "<td>". $row['c_name']. "</td>";
            echo "<td>". $row['c_email']. "</td>"; 
            echo "<td>". $row['c_pass']. "</td>";
            echo "<td>". $row['c_contact_no']. "</td>";
            echo "</tr>";
        }
        echo "</table>";
    
?>
