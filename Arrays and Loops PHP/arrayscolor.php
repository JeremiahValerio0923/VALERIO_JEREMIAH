<?php
$colors = array("red", "blue", "black", "red", "blue", "blue", "blue", "red", "gold");
$colorsfinal = array();
$counter;
$i;
$j;

for($i = 0; $i<= 8; $i++){
    $counter =0;

    for($j=0; $j<=8; $j++){
        if($colors[$i] == $colors[$j]){ //condition checking if has duplicate
            $counter++;//if there is duplciate, counter will increment
        } 
    }
    if($counter == 1){//if counter is greater than 1, it means it is not unique
        array_push($colorsfinal, $colors[$i]);//if counter is only one, it is unique and will put that value onto another array 
    }
}
print_r($colorsfinal); // printing the array that contains unique values




?>