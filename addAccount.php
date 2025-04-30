<?php
        // MySql Connection Variables
        $servername = "localhost";
        $username = "nmnzbzmy_clemsontg1";
        $sqlpassword = "Datiboy@01";
        $DBname = "nmnzbzmy_finalprojdb";
        $tableName = "accounts";
    
        // Create connection
        $conn = new mysqli($servername, $username, $sqlpassword, $DBname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        // Handle form submission
        if (isset($_POST["newUsername"], $_POST["newPassword"])) {
            $newUsername = trim($_POST["newUsername"]);
            $newPassword = trim($_POST["newPassword"]);
    
            // Check if fields are not empty
            if ($newUsername !== "" && $newPassword !== "") {
                $sql = "INSERT INTO $tableName (username, pss) VALUES ('$newUsername', '$newPassword')";
    
                if ($conn->query($sql) === TRUE) {
                    echo "<p>New account created successfully.</p>";
                } else {
                    echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
                }
            } else {
                echo "<div class='create'><h1>Enter a username and password</h1></div>";
            }
    
            $conn->close();
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Account Page</title>
    <link rel="stylesheet" href="styles.css"> <!-- Ensure this points to your CSS file -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    
    <section id="loginpage">
        <img src="images/golflyLogo.png">
        <h1>Create An Account!</h1>
        <form action="addAccount.php" method="post">
            <input type="text" name="newUsername" placeholder="Enter a new username">
            <input type="text" name="newPassword" placeholder="Create a new password">
            <input type="submit" name="submit" value="Create Account">
        </form>
        <a href="login.php"><button>Back</button></a>
    </section>

    <!-- <script src="logic.js"></script> -->
</body>
</html>