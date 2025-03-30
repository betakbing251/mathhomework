<?php
// Define variables and constants
$var1 = "value1";
$var2 = 5;
$var3 = "example";

// Check if $var1 is equal to $var2
if ($var1 == $var2) {
    echo "The values are equal.";
} else {
    echo "The values are not equal.";
}

// Define variables and constants for different operations
$num1 = 10;
$operation = "+";
$num2 = 3;

// Perform the operation
$result = $num1 + $num2 * $operation;

// Check if the result is an integer
if (is_int($result)) {
    echo "The result is an integer.";
} else {
    echo "The result is not an integer.";
}
?>
