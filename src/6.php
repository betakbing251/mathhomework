 <?php
 // Create an array of 10 numbers between 1 and 50
 $numbers = range(1, 50);
 shuffle($numbers);

 // Generate a random number between 1 and 10
 $randomNumber = $numbers[array_rand($numbers)];

 // Print the random number
 echo $randomNumber;
 ?>