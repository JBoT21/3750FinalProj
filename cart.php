<?php
    session_start();

    $serverName = "localhost";
    $username = "root";
    $sqlpassword = "Bus2003s";
    $DBname = "finalprojdb";
    $tableName = "cart";
    $user = $_SESSION["username"];

    // Create connection
    $conn = new mysqli($serverName, $username, $sqlpassword, $DBname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
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
          <a href="products.php" id="productButton"><button>Continue Shopping</button></a>
        </nav>
      </header>

      <?php
        $result = $conn->query("SELECT itemName, user, qty, item_img, price FROM $tableName");
        $total = 0;
        if ($result->num_rows > 0) {
            echo '<div class="cart">';
            while ($row = $result->fetch_assoc()) {
                if($user == $row['user']){
                  echo '<div class="cart-item">';
                  echo '<div class="cart-info">';
                  echo '<p>';
                  echo $row['itemName'];
                  echo '</p>';
                  echo '<p>';
                  echo '$';
                  echo $row['price'];
                  echo '</p>';
                  echo '</div>';
                  $total += $row['price'];
                  echo '<button class="remove-btn" data-item-name="' . htmlspecialchars($row["itemName"], ENT_QUOTES) . '">Remove from cart</button>';
                  echo '</div>';
                } 
            }
            echo '<h1>';
            echo 'Total = $';
            echo $total;
            echo '</h1>';
            echo '<button id="checkOut" data-user="' . htmlspecialchars($user, ENT_QUOTES) . '">Check Out</button>';
            echo '</div>';
        } else {
            echo "<p>No records found.</p>";
        }
      ?>
      <div id="purchased"></div>
    </html>