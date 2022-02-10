<?php
$array = array();
array_push($array, 'nicholas');
array_push($array, 'HONGWEI');
array_push($array, 'HONGWEI');
array_push($array, 'HOGN');
array_push($array, 'RYAN');
print_r($array);
echo "<br>";
$test = array_count_values($array);
echo "<br>";
print_r($test);
echo "<br>";  
echo $test['nicholas'];
echo "<br>";
print_r($test);
?>