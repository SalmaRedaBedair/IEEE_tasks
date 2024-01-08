<?php 
$array1 = ['10' => 'apple', '2' => 'banana'];
$array2 = ['2' => 'blueberry', '1' => 'cherry'];

$result = array_merge($array1, $array2);
print_r($result);

$array1 = ['10' => 'apple', '2' => 'banana'];
$array2 = ['2' => 'blueberry', '1' => 'cherry'];

$result = array_replace($array1, $array2);
print_r($result);