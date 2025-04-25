<?php
  session_start();
  $user = $_SESSION["username"];
  echo $user;
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
            <a href="login.html"><button id="loginButton">Login</button></a>
      
            <!-- Search bar stays below the login button -->
            <div id="search">
              <button id="searchButton">Search</button>
              <input type="text" id="searchInput" placeholder="Search for products...">
            </div>
      
          </div>
        </div>
      
        <!-- Navigation -->
        <nav id="menu">
          <a href="baseApp.php" id="homeButton"><button>Home</button></a>
          <a href="products.php" id="productButton"><button>Products</button></a>
          <a href="#" id="aboutButton"><button>About</button></a>
          <a href="#" id="contactButton"><button>Contact</button></a>
          <a href="about.html"><button>DevPage</button></a>
        </nav>
      </header>
    <body>
        <div class="shop">
            <h1>Check Out The Shop!</h1>
        </div>
        <div class="product-home">
            <div class="club-type">
                <div id="driver" class="link">
                    <img src="images/driverLink.png" alt="">
                    <div class="overlay-text">Drivers</div>
                </div>
            </div>
            <div class="club-type">
                <div id="wood" class="link">
                    <img src="images/woodLink.png" alt="">
                    <div class="overlay-text">Woods</div>
                </div>
            </div>
            <div class="club-type">
                <div id="iron" class="link">
                    <img src="images/ironLink.png" alt="">
                    <div class="overlay-text">Irons</div>
                </div>
            </div>
            <div class="club-type">
                <div id="putter" class="link">
                    <img src="images/putterLink.png" alt="">
                    <div class="overlay-text">Putters</div>
                </div>
            </div>
        </div>
    </body>
</html>