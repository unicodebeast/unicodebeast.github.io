<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KWASU EATERY</title>
    <link rel="stylesheet" href="normalize.min.css">
    <link rel="stylesheet" href="main.css">
    </head>
<body>
  <?php

$fullName = $_POST['fullName'];
 ?>    <div class="container">
      
<header class="header">
            <div class="logo"><img class="logoimg" width="130px" height="70px" src="Other Files/logo.png" alt="">
            <h4>KwasuDelight</h4>
            </div>
            <div class="nav-items">
                <ul>
                    <!-- <li><a href="index.php">HOME</a></li> -->
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="services.php">SERVICES</a></li>
                    <li><a href="contact.php">CONTACT US</a></li>
                </ul>
            </div>
            <div class="log-button">
                <a href="login.php"><input type="button" value="Login"></a>
            </div>
        </header>
        <section class="section">
        <!-- <?php if (isset($fullName)) {
     echo "<div class='dashboard'> <h3> Welcome $fullName </h3>
           </div>";
 } ?> -->
          
            <div class="background">
                <img width="407px" height="154px" src="Other Files/logo1.png" alt="" class="compname">
                <div class="motto">Your Satisfaction is our Priority</div>
                <img class="image" src="IMAGES/top.png" alt="FoodImg">
                <h3>Kindy Login to Explore our Services</h3>
                <!-- <div class="Varieties">
                        <a href="foods.php"><img src="IMAGES/i6.png" alt="food" class="images"></a>
                        <a href="barbique.php"><img src="IMAGES/i3.png" alt="food" class="images"></a>
                        <a href="drinks.php"><img src="IMAGES/i9.png" alt="food" class="images"></a>
                        <a href="pasteries.php"><img src="IMAGES/i12.png" alt="food" class="images"></a>
                </div> -->
                </div>
            </div>            
        </section>
      <?php
      require_once 'footer.php';
      ?>
    </div>
</body>
</html>
