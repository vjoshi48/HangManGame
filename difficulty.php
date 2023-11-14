

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Difficulty</title>
    <link rel="stylesheet" href="Stylesheet.css">
</head>
<body>
<?php
// Start the session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize the selected difficulty level (you can add more validation if needed)
    $selectedDifficulty = isset($_POST['difficulty']) ? $_POST['difficulty'] : '';

    // Store the selected difficulty level in a session variable
    $_SESSION['difficulty'] = $selectedDifficulty;

    // Redirect to the next page
    header("Location: one.php");
    exit();
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
    <h1>Select Difficulty</h1>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="difficulty">Choose Difficulty:</label>
        <select name="difficulty" id="difficulty">
            <option value="easy">Easy</option>
            <option value="medium">Medium</option>
            <option value="hard">Hard</option>
        </select>
        
        <input type="submit" value="Submit">
        <div class="boundstop"></div>
        <div class="boundsbottom"></div>
        <div class="flash1"></div>
        <div class="flash2"></div>
        <div class="flash3"></div>
        <div class="flash4"></div>
        <div class="flash5"></div>
        <div class="flash6"></div>
    </form>
    </div>
</body>
</html>
