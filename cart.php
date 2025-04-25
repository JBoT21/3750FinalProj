<?php
    session_start();

    $serverName = "localhost";
    $username = "root";
    $sqlpassword = "Bus2003s";
    $DBname = "finalprojdb";
    $tableName = "cart";
    $user = $_SESSION["username"];
    echo $user;

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
          <a href="products.php" id="productButton"><button>Continue Shopping</button></a>
        </nav>
      </header>

      <?php

        $result = $conn->query("SELECT itemName, user, qty, item_img, price FROM $tableName");
        if ($result->num_rows > 0) {
            echo '<div class="cart">';
            echo '<ul>';
            while ($row = $result->fetch_assoc()) {
                if($user == $row['user']){
                    echo $row['user'];
                    echo '<li>';
                    echo $row['itemName'];
                    echo '<button class="remove-btn" data-title="' . htmlspecialchars($row["itemName"], ENT_QUOTES) . '">Remove from cart</button>';
                    echo '</li>';
                } 
            }
            echo '</ul>';
            echo '</div>';
        } else {
            echo "<p>No records found.</p>";
        }
      ?>
    </html>