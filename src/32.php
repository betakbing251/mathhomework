<?php 
  function getRandomInt($min, $max) {
    $range = $max - $min + 1;
    $random = rand(0, $range - 1);
    return $min + $random;
  }
?>
