<?php
$numbers = array(9863, 7127, 2020, 80, 131, 55, 100);
$counter;
echo "Unsorted Array: <br>";
print_r($numbers);
for($counter=0; $counter<=6;$counter++){ 

    if($numbers[$counter]%10 !=0){ //checks if number is divisile by 10
     $rounded = round($numbers[$counter], -1); //round function to round the number to the nearest 10
    $numbers[$counter] = $rounded; //get value of rounded number

    }
}
echo "<br>Sorted Array: <br>";
sort($numbers);// used to sort the array into ascending order
print_r($numbers);








?>