<?php
include "connection.php"
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
  margin: 6rem;
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
  <form class="form" action="registerdp.php" method="post">
  <h2 class="title">Near By FoodCourt</h2>
       <p class="form-title">Register to DileveryPerson</p>
       <div class="input-container">
        <input placeholder="Enter Name" type="text" name="name" required>
     </div>
        <div class="input-container">
          <input placeholder="Enter email" type="email" name="email" required> 
      </div>
    </div>
    <div class="input-container">
        <input placeholder="Contact Number" type="text" name="contact" required>
    </div>
    <div class="input-container">
        <input placeholder="Licence No." type="text" name="lno" required>
    </div>
    <div class="input-container">
        <input placeholder="Create password" type="password" name="password" required> 
         <button class="submit" type="submit" name="register">
        REGISTER
      </button>
      <p class="signup-link">
        Have an Account
        <a href="logindp.php">Login..</a><br>
        <!-- <span><a href="forgetpwd.php">Forget Password?</a></span> -->
      </p>
</form>
</body>
</html>
<?php
error_reporting(0);
if(isset($_POST['register'])){
    $name = mysqli_real_escape_string($con ,$_POST['name']);
    $email = mysqli_real_escape_string($con ,$_POST['email']);
    $contact = mysqli_real_escape_string($con ,$_POST['contact']);
    $lno = mysqli_real_escape_string($con ,$_POST['lno']);
    $pass = mysqli_real_escape_string($con ,$_POST['password']);
    $pass1 = password_hash($pass, PASSWORD_BCRYPT);
    $emailconfirm = "SELECT * FROM dperson_master WHERE dp_email = '$email'";
    $querry = mysqli_query($con, $emailconfirm);
    $emailcount = mysqli_num_rows($querry);
    if($emailcount>0){
        echo "<script> alert('Email already exsist'); </script>";
    }else if($contact < 10){
        echo "<script> alert('Enter Valid Contact NO'); </script>";
    }else{
        $insert = "INSERT INTO dperson_master(dp_name, dp_contact_no, dp_pass, dp_email, dp_licence_no) VALUES ('$name', '$contact', '$pass', '$email', '$lno')";
        $result = mysqli_query($con,$insert);
        header('Location: logindp.php'); 
        echo "<script> alert('Registration Completed'); </script>";
    }
}
?>