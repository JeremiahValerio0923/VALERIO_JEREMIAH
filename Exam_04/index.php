<?php
$date1 = strtotime("2021-01-31");//Input 2 dates for comparing 
$date2 = strtotime("2012-08-15"); 

echo "2021-01-31<br>";
echo "2018-08-15<br>";

$diff = abs($date2 - $date1); // Formula to differentiate the date
$years = floor($diff / (365*60*60*24)); //For year, divide the resultant date into total seconds in a year (365*60*60*24)
$months = floor(($diff - $years * 365*60*60*24)/ (30*60*60*24)); //For Month, subtract it with years and divide the resultant date into total seconds in a month (30*60*60*24)
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));//For Day, subtract it with years and months and divide the resultant date.

echo "<br>Differences: <br>$years Year, $months Month, $days Days";//display difference
?>