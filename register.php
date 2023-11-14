<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="Stylesheet.css">
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if a username is submitted
    if (isset($_POST['username'])) {
        $newUsername = $_POST['username'];

        // Read the contents of the users.txt file
        $usersFile = "users.txt";
        $usernames = file($usersFile, FILE_IGNORE_NEW_LINES);

        // Check if the username already exists
        if (!in_array($newUsername, $usernames)) {
            // Add the new username to the users.txt file
            file_put_contents($usersFile, $newUsername . PHP_EOL, FILE_APPEND);

            // Redirect to a success page or perform any other action
            header("Location: index.php");
            exit();
        } else {
            echo "<p>Username already exists. Please choose another username.</p>";
        }
    } else {
        echo "<p>Invalid request. Please provide a username.</p>";
    }
}
?>
    <div class="grid1">
        <div class="column1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
        </div>
        <div class="column1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            </div>
        <div class="column1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
        </div>
        <div class="column1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
        </div>
        <div class="column1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
            <img src="WP Assets/Rectangle.png" alt="block" class="img1">
        </div>
    </div>
    <div class="grid2">
        <div class="column2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
        </div>
        <div class="column2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            </div>
        <div class="column2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
        </div>
        <div class="column2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
        </div>
        <div class="column2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
            <img src="WP Assets/Rectangle.png" alt="block" class="img2">
        </div>
    </div>
    <div class="container">
    <h1>User Registration</h1>
    <p>Enter a username to register:</p>
    <form method="post" action="register.php">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <input type="submit" value="Register">
    </form>
    
        <div class="boundstop"></div>
        <div class="boundsbottom"></div>
        <div class="flash1"></div>
        <div class="flash2"></div>
        <div class="flash3"></div>
        <div class="flash4"></div>
        <div class="flash5"></div>
        <div class="flash6"></div>
    </div>
</body>
</html>
