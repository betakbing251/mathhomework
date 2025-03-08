 <?php 
$numbers = range(1, 20); 
shuffle($numbers); 
echo "Random numbers: "; 
foreach ($numbers as $number) { 
echo "$number "; 
} ?>
