
<?php
include "connection.php"; 
$id =  $_GET['id'];
$querry = "SELECT * FROM dperson_master WHERE dp_id = '$id'";
$data = mysqli_query($con,$querry);
$total = mysqli_num_rows($data);
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

.title{
  font-family: 'Signika Negative', sans-serif;
  
}
        
      	
    </style>
</head>
<body>
<center>
        <form class="form" action="" method="post">
        <h2 class="title">Near By FoodCourt</h2>
       <p class="form-title">Update Delivery Person</p>
			<div class="input-container">
             <input placeholder="Enter Name"  name="c_name" type="text" value="<?php echo $result['dp_name']; ?>" >
                </div>
		    <div class="input-container">   
		    <input placeholder="Enter Email"  name="c_email" type="email" value="<?php echo $result['dp_email']; ?>" >
           </div>
			<div class="input-container">
		      <input placeholder="Enter contact no" name="c_contact_no" type="text" value="<?php echo $result['dp_contact_no']; ?>" >
			  </div> 
        <div class="input-container">
		      <input placeholder="Enter License No" name="c_addr" type="text" value="<?php echo $result['dp_licence_no']; ?>" >
			  </div>       
       <input class="button" type="submit" value="update" name="submit">
        </div>
        </form>  
        </center>
    <?php
    error_reporting(0);
    if(isset($_POST['submit'])){
      $c_name = $_POST['c_name'];
      $cemail = $_POST['c_email'];
      $ccno = $_POST['c_contact_no'];
      $lno = $_POST['c_addr'];
      
      $querry = "UPDATE dperson_master  SET dp_name='$c_name', dp_email='$cemail', dp_contact_no='$ccno', dp_licence_no='$lno' WHERE dp_id='$id'";
      $data = mysqli_query($con,$querry);
      if($data){
          echo "<script>confirm('Record Updated');</script>";
          ?>  
              <meta http-equiv = "refresh" content = "0; url = http://localhost/Project/New%20Project/Admin%20Pannel/mng_deliveryperson.php" />    
          <?php
      }
      else{
          echo "<script>alert('Failed to update Record');</script>";
      }
    
  }
    ?>
</body>
</html>
