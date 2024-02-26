<?php

$number = [2, 3, 6, 2, 5];
print_r($number);
echo "\n";

//single element
print_r($number[2]);
echo "\n";

//associative array
$color = ['red' => '#088dd', 'blue' => '00123', 'black' => '#00000'];
print_r($color['black']);
echo "\n";

$person = [
    ['name' => 'karera', 'age' => 12, 'gender' => 'male'],
    ['name' => 'olivier', 'age' => 22, 'gender' => 'female'],
    ['name' => 'danny', 'age' => 34, 'gender' => 'male']
];

//echo @person
var_dump(json_encode($person));
echo "\n";

//echo @person at certain index
var_dump(json_encode($person[2]));
// there is also json_decode()