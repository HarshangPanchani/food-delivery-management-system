<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Placed</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Permanent+Marker&display=swap");
@import url('https://fonts.googleapis.com/css2?family=Tilt+Warp&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Signika+Negative:wght@300&family=Tilt+Warp&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Signika+Negative:wght@300&family=Tilt+Warp&family=Work+Sans:ital,wght@0,300;1,200&display=swap');

body {
    margin-top: 20px;
}
.text-center {
    text-align: center !important;
}
.mb-5 {
    margin-bottom: 3rem !important;
}
.mx-auto {
    margin-right: auto !important;
    margin-left: auto !important;
}
.text-reset {
    --bs-text-opacity: 1;
    color: inherit !important;
}
a {
    color: #5465ff;
    text-decoration: none;
}
body {
    background: #eee;
}
.card {
    box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0, 0, 0, 0.125);
    border-radius: 1rem;
}
.card-body {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.5rem 1.5rem;
}
    </style>
</head>
<body>
  <?php
    $name=$_POST['name'];
  ?>
<div class="container-fluid">
    <div class="container text-center">
        <h1>Thank you.</h1>
        <p class="lead w-lg-50 mx-auto"><?php echo $name ?> Your order has been placed successfully.</p>
        <p class="w-lg-50 mx-auto">Your order number is <a href="#">3</a>. We will immediatelly process your and it will be delivered in 45-60 Minutes  .</p>
    </div>
    <div class="container">
        <h2 class="h5 mb-5 text-center">You may also like these products</h2>
        <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>

            <a href="street-food.php">
                <div class="box-3 float-container">
                    <img src="images/pun.jpg" alt="Street food" class="img-responsive img-curve">
                    
                    <h3 class="float-text text-white">Street food</h3>
                </div>
            </a>
            
            <a href="chinese.php">
                <div class="box-3 float-container">
                    <img src="images/chi.jpg" alt="chinese" class="img-responsive img-curve">
                    
                    <h3 class="float-text text-white">chinese</h3>
                </div>
            </a>
            <a href="Italian.php">
                <div class="box-3 float-container">
                    <img src="images/pizza.jpg" alt="Italian" class="img-responsive img-curve">
                    
                    <h3 class="float-text text-white">Italian</h3>
                </div>
            </a>
            <a href="otherfoods.php">
                <div class="box-3 float-container">
                    <img src="images/bur.jpg" alt="Other foods" class="img-responsive img-curve">
                    
                    <h3 class="float-text text-white">Other Foods</h3>
                </div>
            </a>

                        

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->

   
    <!-- social Section Starts Here -->
    <section class="social">
        <div class="container text-center">
            <ul>
                
                <li>
                    <a href="index.php"><input type="submit" value="Back to home" ></a>
                </li>
            </ul>
        </div>
    </section>
    </div>
</div>

</body>
</html>