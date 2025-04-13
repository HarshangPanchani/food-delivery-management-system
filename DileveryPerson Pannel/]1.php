<?php
include "connection.php";
?>
<html>
<head>
    <title>Home</title>
</head>
<body>
<form method="POST" action="home.php">
  <select name="mydropdown">
    <option value="Paldi">Paldi</option>
    <option value="Vastrapur">Vastrspur</option>
    <option value="Nikol">Nikol</option>
  </select>
  <button type="submit">Submit</button>
</form>
</body>
</html>
<?php
if (isset($_POST['mydropdown'])) {
  $selected_value = $_POST['mydropdown'];
//   echo "The selected value is: " . $selected_value;
$select = "SELECT * FROM cust_address_master WHERE c_area = '$selected_value' ";
$query = mysqli_query($con,$select);
$result = mysqli_num_rows($query);
}
?>


