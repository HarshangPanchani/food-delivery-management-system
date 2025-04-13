<?php
include "connection.php";
if(!empty($_SESSION["dp_id"])){
    $id = $_SESSION["dp_id"];
    $result = mysqli_query($con, "SELECT * FROM dperson_master WHERE dp_id = $id");
    $row =  mysqli_fetch_assoc($result);
}else{
    echo "NO";
}
error_reporting(0);
?>
<style>
@import url("https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Permanent+Marker&display=swap");
@import url('https://fonts.googleapis.com/css2?family=Tilt+Warp&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Signika+Negative:wght@300&family=Tilt+Warp&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Signika+Negative:wght@300&family=Tilt+Warp&family=Work+Sans:ital,wght@0,300;1,200&display=swap');

* {
  padding: 0;
  margin: 0;
}
.nav {
  height: 100px;
  /* width: 500px; */
  background-color: rgb(243, 134, 57);
}
.nav,
.h2 {
  color: white;
  font-size: 30px;
  /* font-family: Lato; */
  font-family: Lato;
  text-align: left;

}
.navv {
  padding-top: 20px;
}
.nav,
h1 {
  color: white;
  text-align: center;
  font-weight: 300;
  /* font-family: Lato, Dois; */
  font-family: Tilt Warp;
  /* margin: 1px */
  display:block;
}
.navv,
h1 {
  font-size: 40px;
}
.container{
    padding: 38px;
}
 .h3{
    font-family: 'Oswald', sans-serif;
}
h3{
    font-family: 'Work Sans', sans-serif;
}
.button {
  background-color:  rgb(243, 134, 57);
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button:hover {
  background-color: #555555;
  color: white;
}
</style>
        <body>
        <div class="nav">
        
        <nav class="navv">
            <h2 class="h2">Near By Food Court</h2>
            <h1>Food Shop
            </h1>
        </nav>
        </div>
            <center>
                <div class="container">
        <h2 class="h3">Welcome <?php echo $row["dp_name"]; ?></h2><br>
        <h3>Thank You For Joining us.<br>
            <br><br>
            <input type="checkbox" id="check" onclick="enable()"> Agree and continue With Terms and Condition<a href="tc.html">Terms&Condition?</a>
        </h3><br>
            <a href="home2.php">
            <button type="submit" class="button" name="btn" disabled="true" id="btn">View Orders >></button></a>
                </div>
            </center>
        </body>
<script>
function enable(){
    var check = document.getElementById("check");
    var btn = document.getElementById("btn");
    if(check.checked){
        btn.removeAttribute("disabled");
    }else{
        btn.disabled = "true";
    }
}
</script>
