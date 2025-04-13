<html>
    <head>
        <meta charset="UTF-8">
        <!-- Important to make website responsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bu Restaurant Website</title>
    
        <!-- Link our CSS file -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        
<!-- fOOD MEnu Section Starts Here -->
      
    <section class="food-menu">
        
        <div class="container">
            <h2 class="text-centerR">Best shops for Street Food</h2>

                <?php

                include "connection.php";
                $q= mysqli_query($con,"SELECT DISTINCT s_id  FROM food_master WHERE f_cat_id = '1'");
                    
                while($row2 = mysqli_fetch_array($q))
                {
                    echo "<div class='food-menu-box'>
                

                <div class='food-menu-desc'>";
                    
                        
                    $sid = $row2['s_id'];
                    $q1= mysqli_query($con,"SELECT * FROM shop_master WHERE s_id = '$sid'");
                    $row1 = mysqli_fetch_assoc($q1);
                    $sname = $row1['s_name'];
                    echo "<h4>".$sname."</h4>";

                    
                    echo "<p class='food-detail'>".
                        $row1['s_address'].",".$row1['s_area'].",".$row1['s_city']
                    ."</p>
                    <br>

                    <a href='streetf.php?sid=$sid?catid=1' class='btn btn-primary'>Order Now</a>
                    </div>
            </div>";
                    }
                ?>
                    
                

            

        


            <div class="clearfix"></div>

            

        </div>

        <p class="text-center">
            <a href="#">See All Foods</a>
        </p>
    </section>
    <!-- fOOD Menu Section Ends Here -->
</body>
</html>