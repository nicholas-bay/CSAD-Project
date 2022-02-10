<?php
$array = array("key1" => "value1", "key2" => "value2");
print_r($array);
echo "<br>";
unset($array['key1']);
print_r($array);
echo "<br>";
unset($array['key2']);
print_r($array);
?>