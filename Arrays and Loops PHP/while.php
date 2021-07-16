<?php
$num = 0;
$sum = 0;
while($num <= 10){ //Checks the loop condition if it is lower than 10 
    if($num%2 ==0){//condition checikng  if it is an even number
    $sum = $sum+$num; //sum fuction to add even numbers
    }
    $num++;
}
echo "The Sum is : $sum";// outputs the total sum 
?>
