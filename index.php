<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome!</title>
    <link rel="stylesheet" href="Stylesheet.css">
</head>
<body>
<?php
// Start or resume the session
session_start();

// Setting up variables for the game
$_SESSION['totalIncorrectGuesses'] = 0;
$_SESSION['enteredLetters'] = [];
$_SESSION['incorrectGuesses'] = 0;

if (isset($_POST['username'])) {
    // Read the contents of the users.txt file
    $usersFile = "users.txt";
    $usernames = file($usersFile, FILE_IGNORE_NEW_LINES);

    // Check if the entered username is in the list
    $enteredUsername = $_POST['username'];
    if (in_array($enteredUsername, $usernames)) {
        $_SESSION['username'] = $enteredUsername;
        header("Location: difficulty.php");
        exit(); // Make sure to exit after redirecting
    } else {
        echo "<p>Invalid username. Please try again.</p>";
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

    <h1>WELCOME TO HANGMAN</h1>
    <p>Enter a username to start:</p>
    <form method="post" action="index.php">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <input type="submit">
    </form>
    <a href="register.php">Register here</a>
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

