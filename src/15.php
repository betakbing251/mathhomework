<?php
function getRandomInt($min, $max) {
    return intval(rand() * (float)(($max - $min + 1)) + $min);
}

echo "Random number between 0 and 9: " . getRandomInt(0, 9);
?>
