<?php
include "connection.php";
// error_reporting(0);
// if($_SERVER['REQUEST_METHOD'] == "GET"){
// $id =  $_GET['id'];
// $querry = "SELECT * FROM admin_master WHERE a_id = '$id'";
// $data = mysqli_query($con,$querry);
// $total = mysqli_num_rows($data);
// $result = mysqli_fetch_assoc($data);
// }
  if(isset($_POST['update'])){
  $pass = $_POST['password'];
  
  $queery = "UPDATE admin_master SET a_pass = '$pass' WHERE a_id = '1'";
  $result1 = mysqli_query($con,$queery);
  // $count = mysqli_num_rows($result1);
    if($result1){
      header ("Location: loginform.php");
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
          <!-- <span>
            <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
            </svg>
          </span> -->
      </div>
      <div class="input-container">
          <input placeholder="Confirm New Password" type="password" name="password" required>

          <!-- <span>
            <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
              <path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
            </svg>
          </span> -->
        </div>
         <button class="submit" type="submit" name="update">
        Update
      </button>

      <!-- <p class="signup-link">
        No account?
        <a href="">register</a><br><br> 
        
      </p>-->
   </form>
   </center>
