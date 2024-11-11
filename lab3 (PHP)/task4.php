<?php
  $number1=10;
  $number2= 20;
  $number3= 30;

  if($number1>= $number2 && $number1>= $number3){
    echo"The largest Number = $number1 <br>";
} elseif ($number2 >= $number1 && $number2 >= $number3) {
    echo "The largest number is: $number2<br>";
} else {
    echo "The largest number is: $number3<br>";
}
?>