<!-- <?php
echo $_GET['name'];
echo $_GET['con'];
echo $_GET['email'];
?> -->
<?php
include "connection.php"; 
$id =  $_GET['id'];
$querry = "SELECT * FROM customer_master WHERE c_id = '$id'";
$data = mysqli_query($con,$querry);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
?>
<html>
<head>
    <style>
         
        h1{
          font-size:1.5em;
          color:#000000;
        }
        .box {
            background: white;
            width: 600px;
            margin: 0 auto 0 auto;
            padding: 0px 0px 70px 0px;
		border-radius:16px;

        }
        .username{
          background:#ecf0f1;
          border: #ccc 1px solid;
          border-bottom: #ccc 2px solid;
          padding: 8px;
          width:250px;
          color : #aaaa;
          margin-top: 10px;
          font-size: 1em;
          border-radius:4px;
        }
        .button{
          background:#2ecc71;
          width:125px;
          padding-top:5px;
          padding-bottom:5px;
          color:white;
          border-radius:4px;
          border: #27ae60 1px solid;
          margin-top:20px;
          margin-bottom:20px;
          float:left;
          margin-left:88px;
          font-weight:800;
          font-size:0.8em;
        }
        
        
      	
    </style>
</head>
<body>
<table border=1 align=center>
    <div id="absoluteCenteredDiv">
        <form action="" method="post">
            <div class="box">
                <center>
                <h1>Update Customer Details:</h1>
                </center>
			<tr>
                <td>Name :  <input class="username" name="c_name" type="text" value="<?php echo $result['c_name']; ?>" placeholder="name"></td>
                 	</tr>
		    <tr>
		   <td>Email  : <input class="username" name="c_email" type="text" value="<?php echo $result['c_email']; ?>" placeholder="email"></td>
		    </tr>
			<tr>
		    <td>Number  :  <input class="username" name="c_contact_no" type="number" value="<?php echo $result['c_contact_no']; ?>" placeholder="mobilenumber" ></td>
			</tr>
			
		    <!-- <tr>
		    </td>Password  : <input class="username" name="psw" type="password" placeholder="password"></td>
		    </tr> -->
		    <tr>
		    <td>Address  : <textarea class="username" name="addr" rows="4" cols="50" placeholder="address"></textarea></td>
		    </tr>
		    <tr>
                <!-- <td><a href="mng_customer.php"><div class="button">Ubdate</div></a><td> -->
                    <td><input type="submit" value="update" name="submit"></td>
		   </tr>
		    
            </div>
        </form>  
         
    </div>        
    <?php
    // if($SERVER_REQUEST=="POST"){

         if(isset($_POST['submit'])){
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
            // }
        }
    ?>
</body>
</html>
