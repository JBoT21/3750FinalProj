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
          <section>
                <h1>Drivers</h1>
                <h3> 
                Golfly drivers are engineered for maximum distance and stellar performance, crafted with technologies light-years ahead of their time. 
                Blast your shots off the tee with unstoppable power and send your drives soaring across the galaxy.
                </h3>
          </section>
          <section class="store-item">
                <h2><strong>Meta Dark Moon Elite</strong></h2>
                <div class="reviews">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                </div>
                <img src="images/darkMoonDriver.png" alt="Meta Dark Moon Elite" id="itemImg">
                <p>
                    <strong>Price:</strong> $1499.99
                <p>
                  
               
                <form action="addToCart.php" method="POST">
                  <input type="hidden" name="itemName" value="Meta Dark Moon Elite">
                  <input type="hidden" name="price" value="1499.99">
                  <input type="hidden" name="qty" value="1">
                  <input type="hidden" name="item_img" value="images/darkMoonDriver.png">
                  <!-- <input type="hidden" name="user" value="<?php echo htmlspecialchars($username); ?>"> -->
                  <button type="submit">Add To Cart</button>
              </form>

            </section>
      </body>
    </html>
    