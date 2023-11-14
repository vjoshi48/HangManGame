    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Letter Display</title>
        <link rel="stylesheet" href="Stylesheet.css">
    </head>
    <body>
    <?php
// Start or resume the session
session_start();

// Check if the enteredLetters variable exists in the session
if (!isset($_SESSION['totalIncorrectGuesses'])) {
    // If it doesn't exist, initialize it as an empty array
    $_SESSION['totalIncorrectGuesses'] = 0;
}

// Check if the enteredLetters variable exists in the session
if (!isset($_SESSION['enteredLetters'])) {
    // If it doesn't exist, initialize it as an empty array
    $_SESSION['enteredLetters'] = [];
}

// Check if the incorrectGuesses variable exists in the session
if (!isset($_SESSION['incorrectGuesses'])) {
    // If it doesn't exist, initialize it to 0
    $_SESSION['incorrectGuesses'] = 0;
}

$_SESSION['max_guesses'] = 6;

if ($_SESSION['difficulty'] == 'easy') {
    $word = 'MAT';
} elseif ($_SESSION['difficulty'] == 'medium') {
    $word = 'BUMP';
} elseif ($_SESSION['difficulty'] == 'hard') {
    $word = 'IMPOSSIBLE';
}

// Check if a letter is submitted
if (isset($_POST['letter'])) {
    // Get the submitted letter and convert to uppercase for consistency
    $enteredLetter = strtoupper($_POST['letter']);

    // Convert all letters in the session array to uppercase for consistency
    $_SESSION['enteredLetters'] = array_map('strtoupper', $_SESSION['enteredLetters']);

    // Check if the letter is not already in the array
    if (!in_array($enteredLetter, $_SESSION['enteredLetters'])) {
        // Add the entered letter to the session array
        $_SESSION['enteredLetters'][] = $enteredLetter;

        // Check if the entered letter is not in the word
        if (!in_array($enteredLetter, str_split($word))) {
            $_SESSION['incorrectGuesses']++;
        }

        // Check if the maximum guesses limit is reached
        if ($_SESSION['incorrectGuesses'] == $_SESSION['max_guesses']) {
            // Redirect to lose.php
            header("Location: lose.php");
            exit();
        }
    }
}

// Display the current state of the word with underscores for missing letters
$currentWordState = '';
foreach (str_split($word) as $letter) {
    if (in_array(strtoupper($letter), $_SESSION['enteredLetters'])) {
        // If the letter is guessed, show the letter
        $currentWordState .= $letter . ' ';
    } else {
        // If the letter is not guessed, show an underscore
        $currentWordState .= '_ ';
    }
}

// Display hangman image based on the number of incorrect guesses
$hangmanImageNumber = $_SESSION['incorrectGuesses'];
if ($hangmanImageNumber > 5) {
    $hangmanImageNumber = 5; // Cap the image number to the maximum available
}

$hangmanImage = "hangman_" . $hangmanImageNumber . ".png";
echo "<div class='container'>";
echo '<img src="' . $hangmanImage . '" alt="Hangman Image"><br>';

// Display all entered letters and the current state of the word
echo "User: " . $_SESSION['username'] . "<br>";
echo "Letters you entered: " . implode(', ', $_SESSION['enteredLetters']) . "<br>";
echo "Hangman: $currentWordState<br>";
echo "Difficulty level: " . $_SESSION['difficulty'] . "<br>";
echo "Total Incorrect Guesses: " . $_SESSION['totalIncorrectGuesses'] . "<br>";

// Check if all unique letters in the word are entered
$uniqueWordLetters = array_unique(str_split(strtoupper($word)));
sort($uniqueWordLetters);

$missingLetters = array_diff($uniqueWordLetters, $_SESSION['enteredLetters']);

if (empty($missingLetters)) {
    $_SESSION['totalIncorrectGuesses'] += $_SESSION['incorrectGuesses'];
    // Check if the enteredLetters variable exists before unsetting it
    if (isset($_SESSION['enteredLetters'])) {
        unset($_SESSION['enteredLetters']);
    }
    if (isset($_SESSION['incorrectGuesses'])) {
        unset($_SESSION['incorrectGuesses']);
    }
    echo '<p><a href="win.php">Congratulations! Click here to see your score.</a></p>';
} elseif ($_SESSION["incorrectGuesses"] >= $_SESSION['max_guesses']) {
    // Check if the enteredLetters variable exists before unsetting it
    if (isset($_SESSION['enteredLetters'])) {
        unset($_SESSION['enteredLetters']);
    }
    if (isset($_SESSION['incorrectGuesses'])) {
        unset($_SESSION['incorrectGuesses']);
    }

    if (isset($_SESSION['totalIncorrectGuesses'])) {
        unset($_SESSION['totalIncorrectGuesses']);
    }
    header("Location: lose.php");
} else {
    // Display the form for entering a letter
    ?>
    <!-- Form for entering a letter -->
    <form method="post" action="">
        <label for="letter">Enter a letter:</label>
        <input type="text" name="letter" maxlength="1" pattern="[A-Za-z]" title="Please enter a single letter (A-Z, a-z)" required>
        <button type="submit">Submit</button>
    </form>
</div>
    </body>
    </html>
<?php
}
?>
