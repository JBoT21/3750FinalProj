<?php
    session_start();

    ini_set('display_errors', 1); //These 3 lines help with debugging
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
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
    
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $itemName = $_POST['itemName'] ?? '';
        $item_img = $_POST['item_img'] ?? '';
        $price = $_POST['price'] ?? 0;
        $qty = $_POST['qty'] ?? 0;
        if (!empty($itemName) && !empty($user)) { // Make sure important fields are set
            // Build and run the query
            $sql = "INSERT INTO $tableName (itemName, user, qty, item_img, price) VALUES ('$itemName', '$user', '$qty', '$item_img', '$price')";
            
            if ($conn->query($sql) === TRUE) {
                header("Location: cart.php");
                exit();
            } else {
                echo "Error: " . $conn->error;
            }
        } else {
            echo "Missing item name or user.";
        }
    }


    $conn->close();
?>



