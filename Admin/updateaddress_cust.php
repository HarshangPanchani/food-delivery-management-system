
<?php
include "connection.php"; 
$id =  $_GET['id8'];
$querry = "SELECT * FROM cust_address_master WHERE c_id = '$id'";
$data = mysqli_query($con,$querry);
// $total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
echo $id;
?>
<html>
<head>
    <style>
       .form {
  background-color: #fff;
  display: block;
  padding: 2rem;
  max-width: 379px;
  margin: 5rem;
  border-radius: 0.5rem;
  box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
}

.form-title {
  font-size: 1.25rem;
  line-height: 1.75rem;
  font-weight: 600;
  font-family: 'Signika Negative', sans-serif;
  text-align: center;
  color: #000;
}

.input-container {
  position: relative;
}

.input-container input, .button {
  outline: none;
  border: 1px solid #e5e7eb;
  margin: 8px 0;
}

.input-container input {
  background-color: #fff;
  padding: 1rem;
  padding-right: 3rem;
  font-size: 0.875rem;
  line-height: 1.25rem;
  width: 300px;
  border-radius: 0.5rem;
  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
}
.button {
  display: block;
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  padding-left: 1.25rem;
  padding-right: 1.25rem;
  background-color: #4F46E5;
  color: #ffffff;
  font-size: 0.875rem;
  line-height: 1.25rem;
  font-weight: 500;
  width: 100%;
  border-radius: 0.5rem;
  text-transform: uppercase;
}
.button:hover{
  cursor: pointer;
}

.signup-link {
  color: #6B7280;
  font-size: 0.875rem;
  line-height: 1.25rem;
  text-align: center;
}

.signup-link a {
  text-decoration: underline;
}
.title{
  font-family: 'Signika Negative', sans-serif;
  
}
        
      	
    </style>
</head>
<body>
<center>
        <form class="form" action="" method="post">
        <h2 class="title">Near By FoodCourt</h2>
       <p class="form-title">Update Customer Address</p>
			<div class="input-container">
             <input placeholder="Enter City" class="username" name="c_name" type="text" value="<?php echo $result['c_city']; ?>" >
                </div>
		    <div class="input-container">   
		    <input placeholder="Enter Pincode" class="username" name="c_email" type="text" value="<?php echo $result['c_pincode']; ?>" ></td>
           </div>
			<div class="input-container">
		      <input placeholder="Enter Area" name="c_contact_no" type="text" value="<?php echo $result['c_area']; ?>" >
			  </div> 
        <div class="input-container">
		      <input placeholder="Enter Address" name="c_addr" type="text" value="<?php echo $result['c_address']; ?>" >
			  </div>       
        <div class="input-container">
		      <input placeholder="Type of Address" name="type" type="text" value="<?php echo $result['type']; ?>" >
			  </div> 
       <input class="button" type="submit" value="update" name="submit">
        </div>
        </form>  
        </center>
    <?php
    // if($SERVER_REQUEST=="POST"){

         if(isset($_POST['submit'])){
            $c_name = $_POST['c_name'];
            $cemail = $_POST['c_email'];
            $ccno = $_POST['c_contact_no'];
            $caddr = $_POST['c_addr'];
            $type = $_POST['type'];
            
            $querry = "UPDATE cust_address_master  SET c_city='$c_name', c_pincode='$cemail', c_area='$ccno', c_address = '$caddr', type='$type'  WHERE c_id='$id'";
            $data = mysqli_query($con,$querry);
            if($data){
                echo "<script>confirm('Record Updated');</script>";
                ?>  
                    <meta http-equiv = "refresh" content = "0; url = http://localhost:81/Project/New%20Project/Admin%20Pannel/cust_address.php" />    
                <?php
            }
            else{
                echo "<script>alert('Failed to update Record');</script>";
            }
            // }
        }
    ?>
</body>
</html>
