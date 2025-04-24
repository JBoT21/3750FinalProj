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

$stmt = $conn->prepare("SELECT id, pss FROM accounts WHERE username = ?");
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

$conn->close();

?>