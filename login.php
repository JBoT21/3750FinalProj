<?php
session_start();

ini_set('display_errors', 1); //These 3 lines help with debugging
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$host = ""; //FILL THESE OUT LATER
$dbName = "";
$username = "";
$password = "";

$conn = new mysqli($host, $username, $password, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user = $_POST['username'];
$pass = $_POST['password'];
$action = $_POST['action'];

if ($action == "register"){

    $stmt = $conn->prepare("SELECT userid, password FROM users WHERE username = ?"); //checks to make sure username doesn't exist
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo("Username already exists.");
    } else {
        $hashedpass = password_hash($pass, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $user, $hashedpass);
        if ($stmt->execute()) {
            echo("Account created successfully!");
        } else {
            echo "Error with account creation.";
        }
    }

} else if ($action === "login") {
    
    $stmt = $conn->prepare("SELECT userid, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        if (password_verify($pass, $row['password'])) {
            $_SESSION['userid'] = $row['userid'];
            echo("Login successful!");
        } else {
            echo("Incorrect password.");
        }
    } else {
        echo("Username not found.");
    }
} else {
    echo ("I'm not even sure how you did this, but it's invalid.");
}

$conn->close();

?>