<?php
    session_start();

    //Check if user is logged in
    if (!isset($_SESSION["username"])) {
        echo "Not logged in";
        exit;
    }

    // MySql Connection Variables
    $servername = "localhost";
    $user = "root";
    $sqlpassword = "Bus2003s";
    $DBname = "finalprojdb";
    $tableName = "cart";
    $username = $_SESSION["username"];
    // Create connection
    $conn = new mysqli($servername, $user, $sqlpassword, $DBname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $data = json_decode(file_get_contents("php://input"), true);
    $user = $data["user"];

    $sql = "DELETE FROM $tableName WHERE user='$user'";
    $conn->query($sql);
    $conn->close();
?>