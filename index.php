<?php


if(session_id() == '' || !isset($_SESSION)){session_start();}


include('config.php');

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Michael's Ebook Shop</title>
    
    
   <!--css files-->
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="slider/style.css"/>
    
    
    
    <!--js files-->
    <script src="js/vendor/modernizr.js"></script>
    <script src="slider/wowslider.js"></script>
    <script src="slider/script.js"></script>
    
    
    
    
    
    
    
    
    
    
  </head>
<body id="maine">
  
  
  
  

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">Michael's Ebook Shop</a>  </h1>
          <img src="images/logo.png" height="200" width="200">
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>
      

      <section class="top-bar-section">
      <!-- Right  Section -->
        <ul class="right">
          <li><a href="about.php">About</a></li>
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
    
    <h4 align="center" style="color:red">our products</h4>
    
    <br>
    <br>
    <br>
    <br>
<div id="wowslider-container1">
    <div class="ws_images"><ul>
<li><img src="images/prod/anim/a2.jpg" alt="" title="animation book" id="wows1_0"></li>
    <li><img src="images/prod/anim/a3.jpg" alt="" title="animation book2" id="wows1_1"></li>
    <li><img src="images/prod/hac/hac1.jpg" alt="" title="Hacking 1" id="wows1_2"></li>
    <li><img src="images/prod/hac/hac4.jpg" alt="" title="Hacking 2" id="wows1_3"></li>
    <li><img src="images/prod/htm/h2.jpg" alt="" title="html" id="wows1_4"></li>
    <li><img src="images/prod/htm/h6.jpg" alt="" title="html2" id="wows1_5"></li>
    <li><img src="images/prod/jav/j1.jpg" alt="" title="javascript" id="wows1_6"></li>
    <li><img src="images/prod/jav/j2.jpg" alt="" title="javascript2" id="wows1_7"></li>
    <li><img src="images/prod/php/p3.jpg" alt="" title="php" id="wows1_8"></li>
    <li><img src="images/prod/php/p1.jpg" alt="" title="php2" id="wows1_9"></li>
    <li><img src="images/prod/sd/sd1.jpg" alt="" title="sd" id="wows1_10="></li>
    <li><img src="images/prod/sd/sd3.jpg" alt="" title="javascript2" id="wows1_11"></li>
    
    </ul></div>
    
    
    
    <div class="ws_bullets"><div>
    
    
       <a href="#" title="animation"><span><img src="images/prod/anim/a3.jpg" alt="animation1"/>1</span></a>
       <a href="#" title="animation2"><span><img src="images/prod/anim/a2.jpg" alt="animation2"/>2</span></a>
       <a href="#" title="Hacking 1"><span><img src="images/prod/hac/hac1.jpg" alt="hacking 1"/>3</span></a>
       <a href="#" title="html"><span><img src="images/prod/htm/h2.jpg" alt="html"/>4</span></a>
       <a href="#" title="javascript"><span><img src="images/prod/jav/j2.jpg" alt="javascript"/>5</span></a>
       <a href="#" title="php"><span><img src="images/prod/php/p3.jpg" alt="php"/>67</span></a>
       <a href="#" title="sd"><span><img src="images/prod/sd/sd2.jpg" alt="php"/>67</span></a>
       <a href="#" title="sd2"><span><img src="images/prod/sd/sd7.jpg" alt="php"/>67</span></a>
       
    
       </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">jquery image slider</a> by herry prasetyo</div>
       
       <div class="ws_shadow"></div>
</div>
    
    
    
   



    
    
    

<br>

<div class="row" style="margin-top:10px; background-color:#FC3">
      <div class="small-12">

        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;">&copy; 2015 Michael's Ebook Shop. All Rights Reserved.</p>
        </footer>

      </div>
    </div>





<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
      $(document).foundation();
    </script>
</body>
</html>
