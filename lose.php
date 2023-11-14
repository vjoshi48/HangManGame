<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>You lost!</title>
    <link rel="stylesheet" href="Stylesheet.css">
</head>
<body>
    <div class="container">
<?php
// Start or resume the session
session_start();
echo "Sorry " . $_SESSION['username'] . "! " . " You lost!<br>";

// Unset the 'username' session variable
unset($_SESSION['username']);

echo '<a href="index.php">Play again? </a>';
?>
</div>
</body>
</html>
