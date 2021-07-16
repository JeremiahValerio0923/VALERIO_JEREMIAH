<?php
$num1 =0;
$num2 =1;
$num3;
$counter;

echo "Fibonacci Sequence up to 10th: $num1 $num2 ";

for($counter =2; $counter<10; ++$counter){ // starts with 2 because 0 and 1 is done
    $num3 = $num1 + $num2; //adds the previous 2 numbers to get the next numer sequence
    echo "$num3 "; // prints the number
    $num1= $num2;//Substitutes the values of the first num to second num
    $num2= $num3;//substitutes the second num to the new value for the next sequence

}

?>