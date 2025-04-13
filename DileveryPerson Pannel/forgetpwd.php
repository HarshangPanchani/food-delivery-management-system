<?php
include "connection.php";
  if(isset($_POST['update'])){
  $pass = $_POST['password'];
  
  $queery = "UPDATE dperson_master SET dp_pass = '$pass' WHERE dp_id = '8'";
  $result1 = mysqli_query($con,$queery);
  // $count = mysqli_num_rows($result1);
    if($result1){
        echo "<script>alert('Updated');</script>";
      header ("Location: logindp.php");
    }else{
      echo "<script>alert('Incorect Information');</script>";
    }
  }

?>


<style>

  @import url('https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300&family=Tilt+Warp&display=swap');

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
<center>
  <form class="form" action="" method="post">
  <h2 class="title">Near By FoodCourt</h2>
       <p class="form-title">Update Password</p>
        <div class="input-container">
          
          <input placeholder="Enter New Password" type="password" name="newpass" required>
         
      </div>
      <div class="input-container">
          <input placeholder="Confirm New Password" type="password" name="password" required>

         
        </div>
         <button class="submit" type="submit" name="update">
        Update
      </button>

     
     
   </form>
   </center>
