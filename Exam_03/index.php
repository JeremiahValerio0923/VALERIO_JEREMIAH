<?php
function Fibonacci($n){
  
    $num1 = 1;
    $counter = 0;
    $s1=0;
    $s2=0;
    while ($counter < $n){
        $s1 = 5*(pow($num1, 2))+4;
        $s2 = 5*(pow($num1, 2))-4;
        if(floor(sqrt($s1)) === sqrt($s1) || floor(sqrt($s2)) === sqrt($s2)){ //condition check to see if it is a fibonacci numer
            echo "$num1 is a Fibonacci Number. <br>";
        }
        else{
            echo "$num1 is not a Fibonacci Number. <br>";
        }
        $num1++;
        $counter++;
    }
}
$n = 20; //nth numbber
Fibonacci($n);
?>