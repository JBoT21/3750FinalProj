<?php
session_start();

ini_set('display_errors', 1); //These 3 lines help with debugging
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost"; //FILL THESE OUT LATER
$dbName = "finalprojdb";
$username = "root";
$password = "Bus2003s";
$tableName = "accounts";

$conn = new mysqli($servername, $username, $password, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["username"], $_POST["password"])) {
    $user = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $foundP = 0;
    $foundU = 0;
    // Check if fields are not empty
    if ($user !== "" && $password !== "") {
        // Display table
        $result = $conn->query("SELECT username, pss FROM $tableName");
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if($row["username"] == $user && $row["pss"] == $password){
                    $_SESSION["username"] = $user;
                    header("Location: baseApp.php"); // or whatever your logged-in page is
                    exit;
                }
                if($row["username"] == $user){
                    $foundU = 1;
                }
                if($row["pss"] == $password){
                    $foundP = 1;
                }
            }
            if($foundU == 0){
                echo '<h1 style="color: white">No user found</h1>';
            }
            else if($foundP == 0){
                echo '<h1 style="color: white">Incorrect Password</h1>';
            }
        } else {
            echo "<p>No records found.</p>";
        }
    } else {
        echo '<h1 style="color: white">Enter a username and password</h1>';
    }

    $conn->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css"> <!-- Ensure this points to your CSS file -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    
    <section id="loginpage">
        <img src="images/golflyLogo.png">
        <h1>Login</h1>
        <form id="login" action="login.php" method="POST">
            <input type="text" id="username" name="username" placeholder="Username" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <button type="submit" id = "loginButton">Login</button><br>
        </form>
        <div class="login-btns">
            <a href="addAccount.php"><button id="login-btn">Sign Up</button></a>
        </div>
       
    </section>

    <!-- <script src="logic.js"></script> -->
</body>
</html>