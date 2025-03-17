<?php
// Generate a random number between 1 and 100
$randomNumber = rand(1, 100);

// Ask the user to guess the number
echo "Guess the number!";
$guess = readline();

// Compare the user's guess with the generated number
if ($guess == $randomNumber) {
    echo "You win! The number was $randomNumber.";
} else {
    echo "Sorry, you lost. The correct answer is $randomNumber.";
}
?>