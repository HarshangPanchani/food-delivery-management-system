<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Momo Town</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Marck+Script&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/momotown.css">

</head>

<body>

 
  

  
  <br>

  

      <!-- Menu -->
      <div class="menuDiv">

        <!-- Modal -->
        

        <div id="momos" >
          <div class="row menuHeading">
            <div class="col-12">
              <h1>foods</h1>
            
          <div class="row">
            <div class="col-sm-6 col-12">
              <div class="card">
                <h2 class="card-title">Street foods From Karnavati</h2>
                <div class="card-body">


                  <?php 
                  $sid=$_GET['sid'];
                    include "connection.php";
                    $q= mysqli_query($con,"SELECT *  FROM food_master WHERE f_cat_id = '1' AND s_id='$sid'");
    
                    echo "<form method='get' action='order.php'>";
                    $qty=1;
                    while($row2 = mysqli_fetch_assoc($q))
                    {/*
                        $name = $row2['f_name'];
                        $price = $row2['f_price'];
                    echo "<div class='row foodItem'>
                    <div class='col-9 foodItemName'>
                      <p>".$name." <span> </span></p>
                      <p class='text-muted-small'><i class='fas fa-rupee-sign'></i>".$price."</p>
                    </div>
                      <div class='col-3 addCol'>
                          <span class='menuBtn minus'><i class='fas fa-minus'></i></span>
                          <span class='quantity'>0</span>
                          <span class='menuBtn plus'><i class='fas fa-plus'></i></span>
                      </div>
                    </div>
                    <hr class='foodItemHr'>";
                    */
                    
                    $name = $row2['f_name'];
                        $price = $row2['f_price'];
                    echo "<div class='row foodItem'>
                    <div class='col-9 foodItemName'>
                      <p>".$name." <span> </span></p>
                      <p class='text-muted-small'><i class='fas fa-rupee-sign'></i>".$price."</p>
                    </div>
                      <div class='col-3 addCol'>
                          
                          <input  type='number' name='q$qty' value=0>
                          
                          
                      </div>
                    </div>
                    <hr class='foodItemHr'>";
                    $qty++;
                    }
                  ?>
                  
                  

                  

                  

                </div>
              </div>
            </div>


                  

                 

                 

                 
          </div>

          <div class="row checkOutRow">
            <?php
            //echo "<button type="button" class="btn knowMoreBtn" data-toggle="modal" data-target="#exampleModal">Check Out</button>";
            ?>
            <input type='submit' name="chk">
                  </form>
            </div>

        </div>

      

    </div>
  </section>

  

  

  <!-- #fdfefd, #0d1010, #281e16 -->

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <!-- JQuery CDN -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Custom JS -->
  <script src="js/index.js"></script>

</body>

</html>