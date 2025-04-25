<?php
  session_start();
  $username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
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
          <a href="" id="homeButton"><button>Home</button></a>
          <a href="products.html" id="productButton"><button>Products</button></a>
          <a href="#" id="aboutButton"><button>About</button></a>
          <a href="#" id="contactButton"><button>Contact</button></a>
          <a href="about.html"><button>DevPage</button></a>
        </nav>
      </header>

      <body>
        <div class="clubs">
          <div class="item-container">
            <div class="item-info">
              <h1>New!</h1>
              <h2>Meta Dark Moon Elite</h2>
              <p>Price: $1499.99</p>
              <div class="reviews">
                <img src="images/star.png" alt="">
                <img src="images/star.png" alt="">
                <img src="images/star.png" alt="">
                <img src="images/star.png" alt="">
                <img src="images/star.png" alt="">
              </div>
              <form action="addToCart.php" method="POST">
                <input type="hidden" name="itemName" value="Meta Dark Moon Elite">
                <input type="hidden" name="price" value="1499.99">
                <input type="hidden" name="qty" value="1">
                <input type="hidden" name="item_img" value="images/darkMoonDriver.png">
                <!-- <input type="hidden" name="user" value="<?php echo htmlspecialchars($username); ?>"> -->
                <button type="submit">Add To Cart</button>
              </form>
            </div>
            <div class="item">
              <img src="images/darkMoonDriver.png" alt="">
            </div>
          </div>
          
        </div>
        
       
      </body>
    </html>
    