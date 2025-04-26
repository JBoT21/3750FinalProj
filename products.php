<?php
  session_start();
  $user = $_SESSION["username"];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Golfy Products Page</title>
        <link rel="stylesheet" href="styles.css">
        <script src="products.js" defer></script>
    </head>
    <header id="pghead">
        <div class="header-grid">
          
          <!-- Left: Welcome text -->
          <div class="header-left">
            <h1>Welcome to <img src="images/golfly.png"></h1>
          </div>
      
          <!-- Center: Logo -->
          <div class="header-center">
            <img src="images/golflyLogo.png" alt="Golfly Logo" class="logo-main">
          </div>
      
          <!-- Right: Login and Search -->
          <div class="header-right">
            
            <!-- NEW: Login Button added above search bar -->
            <a href="login.php"><button id="loginButton">Logout</button></a>
      
          </div>
        </div>
      
        <!-- Navigation -->
        <nav id="menu">
          <a href="baseApp.php" id="homeButton"><button>Home</button></a>
          <a href="products.php" id="productButton"><button>Products</button></a>
          <a href="about.html" id="productButton"><button>About</button></a>
          <a href="proposal.html" id="productButton"><button>Proposal</button></a>
          <a href="cart.php" id="productButton"><button>View Cart</button></a>
        </nav>
      </header>
    <body>
        <div class="shop">
            <h1>Check Out The Shop!</h1>
        </div>
        <div class="product-home">
            <div class="club-type">
                <div id="driver" class="link">
                    <img src="images/drivers.png" alt="">
                    <div class="overlay-text">Drivers</div>
                </div>
            </div>
            <div class="club-type">
                <div id="wood" class="link">
                    <img src="images/woods.png" alt="">
                    <div class="overlay-text">Woods</div>
                </div>
            </div>
            <div class="club-type">
                <div id="iron" class="link">
                    <img src="images/Irons.png" alt="">
                    <div class="overlay-text">Irons</div>
                </div>
            </div>
            <div class="club-type">
                <div id="putter" class="link">
                    <img src="images/putters.png" alt="">
                    <div class="overlay-text">Putters</div>
                </div>
            </div>
        </div>
    </body>
</html>