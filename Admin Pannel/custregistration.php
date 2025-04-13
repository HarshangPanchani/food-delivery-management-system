<?php
include 'connection.php';
error_reporting(0);
if (isset($_POST['register'])){
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $contact=mysqli_real_escape_string($con,$_POST['contact']);
    $password=mysqli_real_escape_string($con,$_POST['password']);
    $pincode = $_POST['pincode'];
    $area = $_POST['area'];
    $city = $_POST['city'];
    $address = $_POST['addr'];
    $querry="SELECT * FROM shop_master WHERE s_pass='$password'";
    $r=mysqli_query($con,$querry);
    $c=mysqli_fetch_array($r);
   
    if($r){
        if(mysqli_num_rows($r) == 1){
            session_start();
            $_SESSION['password'] = true;
            
            exit();
        }else{
            echo "No";
        }
    }
    
    if($contact > 10){
        $error = "number atleast of 10";
    } 
    elseif(strlen($password) < 6 ){
        $error = "";
     } 
    elseif($password=0){
        $check_email = "SELECT * FROM shop_master WHERE s_email = '$email'";
        $data=mysqli_query($conn,$check_email);
        $result=mysqli_fetch_array($data);
        if($result>0){
            $error = "";
            echo "<script>
            alert ('Email aleready Exsist');
            </script>";
        }
      }
    else{
        $insert = "INSERT INTO `shop_master`(`s_name`, `s_pass`, `s_contact_no`, `s_email`, `s_pincode`, `s_city`, `s_area`, `s_address`) VALUES ('$name', '$password', '$contact', '$email', '$pincode', '$city', '$area', '$address')";
        $q=mysqli_query($conn,$insert);
          if(!$q){
            $error = "<script>
            alert ('Email aleready Exsist');
            </script>";
        }else
        {
          header("Location: Add.php");
        }
    }
}


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
  <form class="form" action="custregistration.php" method="post">
  <h2 class="title">Near By FoodCourt</h2>
       <p class="form-title">Register to Customer</p>
       <div class="input-container">
        <input placeholder="Enter Name" type="text" name="name" required>
        
    </div>
        <div class="input-container">
          <input placeholder="Enter email" type="email" name="email" required>
         
      </div>
      
      <div class="input-container">
          <input placeholder="Create password" type="password" name="password" required>
        </div>
        <div class="input-container">
          <input placeholder="Contact Number" type="text" name="contact" required>
                </div>
      <div class="input-container">
             <input placeholder="Enter City" class="username" name="city" type="text" required>
                </div>
		    <div class="input-container">   
		    <input placeholder="Enter Pincode" class="username" name="pincode" type="text" required></td>
           </div>
			<div class="input-container">
		      <input placeholder="Enter Area" name="area" type="text" required>
			  </div> 
        <div class="input-container">
		      <input placeholder="Enter Address" name="addr" type="text" required>
			  </div>
         <button class="submit" type="submit" name="register">
        REGISTER
      </button>

      <!-- <p class="signup-link">
        Already Registered?
        <a href="">register</a><br><br> -->
      </p>
   </form>
   </center>
</body>
<html>