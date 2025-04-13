<!-- <?php
echo $_GET['name'];
echo $_GET['con'];
echo $_GET['email'];
?> -->
<?php
include "connection.php"; 
$id =  $_GET['id'];
$id1 = $_GET['id'];
$querry = "SELECT * FROM customer_master WHERE c_id = '$id'";
$data = mysqli_query($con,$querry);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
// $querry1 = "SELECT * FROM customer_address_master WHERE c_id = '$id1'";
// $data1 = mysqli_query($con,$querry1);
// $total = mysqli_num_rows($data1);
// $result1 = mysqli_fetch_assoc($data1);
?>

<html>
<head>
</head>
<style>
 .form {
  background-color: #fff;
  display: block;
  padding: 2rem;
  max-width: 379px;
  margin: 11rem;
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

.input-container input, .form button {
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

.input-container span {
  display: grid;
  position: absolute;
  top: 0;
  bottom: 0;
  right: 1px;
  padding-left: 1rem;
  padding-right: 1rem;
  place-content: center;
}

.input-container span svg {
  color: #9CA3AF;
  width: 1rem;
  height: 1rem;
}

.submit {
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
.submit:hover{
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
<body>
<center>
  <form class="form" action="updatecust.php" method="post">
  <h2 class="title">Near By FoodCourt</h2>
       <p class="form-title">Update Customer</p>
       <div class="input-container">
        <input placeholder="Enter Name" type="text" name="c_name" value="<?php echo $result['c_name']; ?>" required>
       
    </div>
        <div class="input-container">
          <input placeholder="Enter email" type="email" name="c_email" value="<?php echo $result['c_email']; ?>" required>
         
      </div>
      
      
        <div class="input-container">
          <input placeholder="Contact Number" type="text" name="c_contact_no" value="<?php echo $result['c_contact_no']; ?>" required>
      </div>
         <button class="submit" type="submit" name="update">
        UPDATE
      </button>

      <!-- <p class="signup-link">
        Already Registered?
        <a href="">register</a><br><br> -->
      </p><?php
      if(isset($_POST['update'])){
            $c_name = $_POST['c_name'];
            $cemail = $_POST['c_email'];
            $ccno = $_POST['c_contact_no'];
            
            $querry = "UPDATE customer_master  SET c_name='$c_name', c_email='$cemail', c_contact_no='$ccno' WHERE c_id='$id'";
            $data = mysqli_query($con,$querry);
            if($data){
                echo "<script>confirm('Record Updated');</script>";
                ?>  
                    <meta http-equiv = "refresh" content = "0; url = http://localhost:81/Project/New%20Project/Admin%20Pannel/mng_customer.php" />    
                <?php
            }
            else{
                echo "<script>alert('Failed to update Record');</script>";
            }
        
        }?>
   </form>
   </center>
</body>
<html>