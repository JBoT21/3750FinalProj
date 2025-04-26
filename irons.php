<?php
  session_start();
  $user = $_SESSION["username"];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Golfy Irons</title>
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
                <h1> Irons</h1>
                <h3> 
                    Forged to perfection, Golfly irons are designed for precision and control with the 
                    most unique materials in the known universe. Whether you're a beginner or a seasoned pro,
                    our irons will help you hit the cosmic greens with confidence.
                </h3>
            </section>

            <section>
                <h2>Golfly Pro V 100</h2>
                <img src="storeItems/prov100.png" alt="Golfly Pro V 100" id="itemImg">
                <p>
                    <strong>Price:</strong> $1599.99
                <p>
                  
               
                <form action="addToCart.php" method="POST">
                <input type="hidden" name="itemName" value="Golfly Pro V 100">
                <input type="hidden" name="price" value="1599.99">
                <input type="hidden" name="qty" value="1">
                <input type="hidden" name="item_img" value="storeItems/prov100.png">
                <!-- <input type="hidden" name="user" value="<?php echo htmlspecialchars($username); ?>"> -->
                <button type="submit">Add To Cart</button>
              </form>

            </section>
            <section>
                <h2>Golfly Diamond</h2>
                <img src="storeItems/diamond.png" alt="Golfly Diamond" id="itemImg">
                <p>
                    <strong>Price:</strong> $1200.00
                <p>
                <form action="addToCart.php" method="POST">
                <input type="hidden" name="itemName" value="Golfly Diamond">
                <input type="hidden" name="price" value="1200.00">
                <input type="hidden" name="qty" value="1">
                <input type="hidden" name="item_img" value="storeItems/diamond.png">
                <!-- <input type="hidden" name="user" value="<?php echo htmlspecialchars($username); ?>"> -->
                <button type="submit">Add To Cart</button>
                </form>
                
            </section>
            <section>
                <h2>Golfy Eclipse</h2>
                <img src="storeItems/golfyEclipse.png" alt="Golfly Eclipse" id="itemImg">
                <p>
                    <strong>Price:</strong> $899.99
                <p>
                <form action="addToCart.php" method="POST">
                <input type="hidden" name="itemName" value="Golfy Eclipse">
                <input type="hidden" name="price" value="899.99">
                <input type="hidden" name="qty" value="1">
                <input type="hidden" name="item_img" value="storeItems/golfyEclipse.png">
                <!-- <input type="hidden" name="user" value="<?php echo htmlspecialchars($username); ?>"> -->
                <button type="submit">Add To Cart</button>
                </form>
            </section>


                
            
        </body>
    </html>
    