<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>You win!</title>
    <link rel="stylesheet" href="Stylesheet.css">
</head>
<body>
    <div class="container">
<?php
// Start or resume the session
session_start();
$currentUser = $_SESSION['username'];
$currentUserScore = $_SESSION['totalIncorrectGuesses'];
echo "Good job " . $currentUser . "! " . "Your score was: " . $currentUserScore . "<br>";

// Unset the 'username' session variable
unset($_SESSION['username']);

// Read the contents of the leaderboard file into an array
$leaderboardFile = 'leaderboard.txt';
$lines = file($leaderboardFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Add the current user's score to the array
$newLine = $currentUser . ': ' . $currentUserScore;
$lines[] = $newLine;

// Sort the array based on scores in ascending order
usort($lines, function($a, $b) {
    list(, $scoreA) = explode(': ', $a);
    list(, $scoreB) = explode(': ', $b);
    return (int)$scoreA - (int)$scoreB;
});

// Save the sorted array back to the leaderboard file
file_put_contents($leaderboardFile, implode("\n", $lines));

// Display the leaderboard
echo "<h2>Leaderboard</h2>";
echo "<ul>";
foreach ($lines as $line) {
    echo "<li>$line</li>";
}
echo "</ul>";

echo '<a href="index.php">Play again? </a>';
?>
</div>
</body>
</html>
