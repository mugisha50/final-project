<?php



if(session_id() == '' || !isset($_SESSION)){session_start();}


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us || Michael's Ebook Shop</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="slider/style.css"/>
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body id="maine">

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">Michael's Ebook Shop</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li class="active"><a href="about.php">About</a></li>
          <li><a href="products.php">Products</a></li>
          <li><a href="cart.php">View Cart</a></li>
          <li><a href="orders.php">My Orders</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php
    
          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>




    <div class="row" style="margin-top:30px;">
      <div class="small-12">
        <p style="color:yellow">Michael's Ebook Shop is a project on E-Commerce Website. All products listed are of the Correct Quality.    .</p>

        <p style="color:yellow"> <img src="images/100_3420.JPG" alt="" width="400" height="300">My name is  mugisha michael A second year IT student at st lawrence University. Email:mugishamike8888@gmail.com </p>
       
        
        
       



      <br>
      <br>
      <div class="row" style="margin-top:90px; background-color:#FC3">
      <div class="small-12">

        <footer>
           <p style="text-align:center; font-size:0.8em;">Copyright &copy; 2015 Michael Ebook Shop. All Rights Reserved.</p>
        </footer>

     
    </div>
    </div>
    </div>
    </div>







    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
