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
                <h1>Woods</h1>
                <h3> 
                Golfly woods are designed for cosmic versatility and out-of-this-world control. 
                Whether you're launching from the fairway or navigating alien landscapes, our woods deliver the perfect blend of distance and precision to keep your game light-years ahead.
                </h3>
          </section>
      <section class="store-item">
                <h2><strong>Stardust</strong></h2>
                <div class="reviews">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                </div>
                <img src="storeItems/stardust.png" alt="" id="itemImg">
                <p>
                    <strong>Price:</strong> Sale! Only $549.99
                <p>
                  
               
                <form action="addToCart.php" method="POST">
                  <input type="hidden" name="itemName" value="Stardust">
                  <input type="hidden" name="price" value="549.99">
                  <input type="hidden" name="qty" value="1">
                  <input type="hidden" name="item_img" value="storeItems/stardust.png">
                  <!-- <input type="hidden" name="user" value="<?php echo htmlspecialchars($username); ?>"> -->
                  <button type="submit">Add To Cart</button>
              </form>
            </section>

            <section class="store-item">
                <h2><strong>Starshaft</strong></h2>
                <div class="reviews">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                </div>
                <img src="storeItems/starshaft.png" alt="" id="itemImg">
                <p>
                    <strong>Price:</strong> $1500
                <p>
                  
               
                <form action="addToCart.php" method="POST">
                  <input type="hidden" name="itemName" value="Starshaft">
                  <input type="hidden" name="price" value="1500">
                  <input type="hidden" name="qty" value="1">
                  <input type="hidden" name="item_img" value="storeItems/starshaft.png">
                  <!-- <input type="hidden" name="user" value="<?php echo htmlspecialchars($username); ?>"> -->
                  <button type="submit">Add To Cart</button>
              </form>
            </section>

            <section class="store-item">
                <h2><strong>The Gee Man Pro v1</strong></h2>
                <div class="reviews">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                  <img src="images/star.png" alt="">
                </div>
                <img src="storeItems/prov1000.png" alt="" id="itemImg">
                <p>
                    <strong>Price:</strong> $9,999.99
                <p>
                  
               
                <form action="addToCart.php" method="POST">
                  <input type="hidden" name="itemName" value="The Gee Man Pro v1">
                  <input type="hidden" name="price" value="9999.99">
                  <input type="hidden" name="qty" value="1">
                  <input type="hidden" name="item_img" value="storeItems/prov1000.png">
                  <!-- <input type="hidden" name="user" value="<?php echo htmlspecialchars($username); ?>"> -->
                  <button type="submit">Add To Cart</button>
              </form>
            </section>
      </body>
    </html>
    