<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
  
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/nbfclgoo.jpeg" alt="Restaurant Logo" class="lgo">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="categories.html">Categories</a>
                    </li>
                    <li>
                        <a href="foods.html">Foods</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <form action="food-search.html" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <!-- CAtegories Section Starts Here -->
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
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="#">Near By Food Court</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

</body>
</html>