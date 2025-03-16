<?php
// Function to generate a random number between 1 and 10
function getRandomNumber() {
    return rand(1, 10);
}

// Function to calculate the sum of two numbers
function calculateSum($num1, $num2) {
    return $num1 + $num2;
}

// Function to calculate the product of two numbers
function calculateProduct($num1, $num2) {
    return $num1 * $num2;
}

// Function to calculate the difference between two numbers
function calculateDifference($num1, $num2) {
    return $num1 - $num2;
}

// Main code
$randomNumber = getRandomNumber();
$sum = calculateSum(10, 5);
$product = calculateProduct(6, 3);
$difference = calculateDifference(8, 2);
echo "Random number: $randomNumber <br>";
echo "Sum of 10 and 5: $sum <br>";
echo "Product of 6 and 3: $product <br>";
echo "Difference between 8 and 2: $difference";
?>
