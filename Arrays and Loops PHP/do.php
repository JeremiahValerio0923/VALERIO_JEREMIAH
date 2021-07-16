<?php
$num=0;

do{
    if($num % 2 !=0){ //checks if the number is odd number
        echo "$num<br>";//displays the odd numbers
    }
    $num++;

}while($num<=10);//condition to check if iterator is less than or equal to 10
?>