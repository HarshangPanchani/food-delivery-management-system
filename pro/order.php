
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
            </div>
            <!-- Button trigger modal -->
            <span class="shoppingCart" data-toggle="modal" data-target="#exampleModal">
              <i class="fas fa-shopping-cart"></i>
              <span class="shoppingCartAfter"></span>
            </span>
          </div>
          <div class="row">
            <div class="col-sm-6 col-12">
              <div class="card">
                <h2 class="card-title">Street foods From Karnavati</h2>
                <div class="card-body">


                 
                  <?php
                $q1=$_GET['q1'];
                $q2=$_GET['q2'];
                $q3=$_GET['q3'];
                $q4=$_GET['q4'];
                $q5=$_GET['q5'];
                $q6=$_GET['q6'];
                $q7=$_GET['q7'];
                $qp1=0;
                $qp2=0;
                $qp3=0;
                $qp4=0;
                $qp5=0;
                $qp6=0;
                $qp7=0;

            if($q1>0)
            {
                $qp1=$q1*25;
                echo "<div class='row foodItem'>
                    <div class='col-9 foodItemName'>
                      <p>Dabeli <span> </span></p>
                      <p class='text-muted-small'><i class='fas fa-rupee-sign'></i>Qty :$q1</p>
                    </div>
                      <div class='col-3 addCol'>
                          
                          Rs.$qp1                          
                          
                      </div>
                    </div>
                    <hr class='foodItemHr'>";
            }
            if($q2>0)
            {
                $qp2=$q2*40;
                echo "<div class='row foodItem'>
                    <div class='col-9 foodItemName'>
                      <p>Butter Dabeli <span> </span></p>
                      <p class='text-muted-small'><i class='fas fa-rupee-sign'></i>Qty :$q2</p>
                    </div>
                      <div class='col-3 addCol'>
                          
                          Rs.$qp2                          
                          
                      </div>
                    </div>
                    <hr class='foodItemHr'>";
            }
            if($q3>0)
            {
                $qp3=$q3*50;
                echo "<div class='row foodItem'>
                    <div class='col-9 foodItemName'>
                      <p>Cheese Dabeli <span> </span></p>
                      <p class='text-muted-small'><i class='fas fa-rupee-sign'></i>Qty :$q3</p>
                    </div>
                      <div class='col-3 addCol'>
                          
                          Rs.$qp3                          
                          
                      </div>
                    </div>
                    <hr class='foodItemHr'>";
            }
            if($q4>0)
            {
                $qp4=$q4*75;
                echo "<div class='row foodItem'>
                    <div class='col-9 foodItemName'>
                      <p>Butter Cheese Dabeli <span> </span></p>
                      <p class='text-muted-small'><i class='fas fa-rupee-sign'></i>Qty :$q4</p>
                    </div>
                      <div class='col-3 addCol'>
                          
                          Rs.$qp4                          
                          
                      </div>
                    </div>
                    <hr class='foodItemHr'>";
            }
            if($q5>0)
            {
                $qp5=$q5*25;
                echo "<div class='row foodItem'>
                    <div class='col-9 foodItemName'>
                      <p>Oil Vadapav <span> </span></p>
                      <p class='text-muted-small'><i class='fas fa-rupee-sign'></i>Qty :$q5</p>
                    </div>
                      <div class='col-3 addCol'>
                          
                          Rs.$qp5                          
                          
                      </div>
                    </div>
                    <hr class='foodItemHr'>";
            }
            if($q6>0)
            {
                $qp6=$q6*30;
                echo "<div class='row foodItem'>
                    <div class='col-9 foodItemName'>
                      <p>Mumabai Vadapav <span> </span></p>
                      <p class='text-muted-small'><i class='fas fa-rupee-sign'></i>Qty :$q6</p>
                    </div>
                      <div class='col-3 addCol'>
                          
                          Rs.$qp6                          
                          
                      </div>
                    </div>
                    <hr class='foodItemHr'>";
            }
            if($q7>0)
            {
                $qp7=$q7*40;
                echo "<div class='row foodItem'>
                    <div class='col-9 foodItemName'>
                      <p>Butter Vadapav <span> </span></p>
                      <p class='text-muted-small'><i class='fas fa-rupee-sign'></i>Qty :$q7</p>
                    </div>
                      <div class='col-3 addCol'>
                          
                          Rs.$qp7                          
                          
                      </div>
                    </div>
                    <hr class='foodItemHr'>";
                  }
                  $total=$qp1+$qp2+$qp3+$qp4+$qp5+$qp6+$qp7;
                  echo "<font size='7px'><b>Total:$total</b></font>";
                  session_start();
                  $_SESSION['amount']=$total; 
            
            
            ?>
                  
                  

                  

                  

                </div>
              </div>
            </div>


                  

                 

                 

                 
          </div>

          <div class="row checkOutRow">
            <?php
            //echo "<button type="button" class="btn knowMoreBtn" data-toggle="modal" data-target="#exampleModal">Check Out</button>";
            ?>
            <a href="eaddr.php"><input type='submit' value='Give Details' name="order"></a>
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