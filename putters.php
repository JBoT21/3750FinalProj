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
          <a href="features.html" id="productButton"><button>Features</button></a>
          <a href="cart.php" id="productButton"><button>View Cart</button></a>
        </nav>
      </header>
    <body>
        <section>
            <h1>Putters</h1>
            <h3> 
            Engineered for ultimate feel and accuracy, Golfly putters are crafted with futuristic precision from materials not of this world. 
            Master the greens of any galaxy with a putter that brings your short game into perfect cosmic alignment.
            </h3>
        </section>

            <section class="store-item">
                <h2>The Pioneer</h2>
                <div class="reviews">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                </div>
                <img src="storeItems/pioneer.png" alt="G" id="itemImg">
                <p>
                    <strong>Price:</strong> $350.00
                <p>
                  
               
                <form action="addToCart.php" method="POST">
                <input type="hidden" name="itemName" value="The Pioneer">
                <input type="hidden" name="price" value="350">
                <input type="hidden" name="qty" value="1">
                <input type="hidden" name="item_img" value="storeItems/pioneer.png">
                <!-- <input type="hidden" name="user" value="<?php echo htmlspecialchars($username); ?>"> -->
                <button type="submit">Add To Cart</button>
              </form>
            </section>

            <section class="store-item">
                <h2>Cosmic</h2>
                <div class="reviews">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                </div>
                <img src="storeItems/cosmic.png" alt="G" id="itemImg">
                <p>
                    <strong>Price:</strong> $3000.00
                <p>
                  
               
                <form action="addToCart.php" method="POST">
                <input type="hidden" name="itemName" value="Cosmic">
                <input type="hidden" name="price" value="3000">
                <input type="hidden" name="qty" value="1">
                <input type="hidden" name="item_img" value="storeItems/cosmic.png">
                <!-- <input type="hidden" name="user" value="<?php echo htmlspecialchars($username); ?>"> -->
                <button type="submit">Add To Cart</button>
              </form>
            </section>

            <section class="store-item">
                <h2>The Astro v2.0</h2>
                <div class="reviews">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                </div>
                <img src="storeItems/astro.png" alt="G" id="itemImg">
                <p>
                    <strong>Price:</strong> $2549.00
                <p>
                  
               
                <form action="addToCart.php" method="POST">
                <input type="hidden" name="itemName" value="The Astro v2.0">
                <input type="hidden" name="price" value="2549">
                <input type="hidden" name="qty" value="1">
                <input type="hidden" name="item_img" value="storeItems/astro.png">
                <!-- <input type="hidden" name="user" value="<?php echo htmlspecialchars($username); ?>"> -->
                <button type="submit">Add To Cart</button>
              </form>
            </section>

            <section class="store-item">
                <h2>The Infinity</h2>
                <div class="reviews">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                </div>
                <img src="storeItems/infinite.png" alt="G" id="itemImg">
                <p>
                    <strong>Price:</strong> $15,000.00
                <p>
                  
               
                <form action="addToCart.php" method="POST">
                <input type="hidden" name="itemName" value="The Infinity">
                <input type="hidden" name="price" value="15000">
                <input type="hidden" name="qty" value="1">
                <input type="hidden" name="item_img" value="storeItems/infinite.png">
                <!-- <input type="hidden" name="user" value="<?php echo htmlspecialchars($username); ?>"> -->
                <button type="submit">Add To Cart</button>
              </form>
            </section>
    </body>
    </html>
    