 <?php
  $num1 = rand(1,10);
  $num2 = rand(1,10);
  if($num1>$num2){
     echo "The number $num1 is greater than $num2";
  }elseif($num1==$num2){
     echo "The number $num1 is equal to $num2";
  }else{
      echo "The number $num2 is greater than $num1";
  }
?>