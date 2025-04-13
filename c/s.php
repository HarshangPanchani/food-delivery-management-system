<?php
session_start();
include "connection.php";

if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  
  $query = "SELECT * FROM customer_master WHERE c_email = '$email' and c_pass = '$pass'";
  $result = mysqli_query($con,$query);
  $count = mysqli_num_rows($result);

  if($count > 0){
    $row = mysqli_fetch_assoc($result);
    $cid = $row['c_id'];
    $_SESSION["id"] = $cid;
   
    ?>
<meta http-equiv = "refresh" content = "1; url = http://localhost/c/index.php?id=$cid" />
    <?php
  }else{
    $error = "Wrong Email or Password";
  }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <?php
        if(isset($error)){
            echo '<div class="alert alert-danger">' . $error . '</div>';
        }
        ?>
        <form action="<?php $_PHP_SELF ?>" method="post">
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" required>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="pass" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>    
</body>
</html>


<?php if(isset($error)){ echo $error; } ?>
