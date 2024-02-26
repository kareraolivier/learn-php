<?php

// for loop
for ($x = 1; $x <= 10; $x++) {
    echo $x;
}


// while loop
$x = 1;
while ($x < 10) {
    echo "loops \n";
    $x++;
}

// do while loop
$nbr = 20;
do {
    echo "$nbr loops with do while \n";
    $nbr++;
} while ($nbr < 10);


// forEach loop

$arrays = ['one', 'two', 'three', 'four', 'five'];
$person = [
    ['name' => 'karera', 'age' => 12, 'gender' => 'male'],
    ['name' => 'olivier', 'age' => 22, 'gender' => 'female'],
    ['name' => 'danny', 'age' => 34, 'gender' => 'male']
];

foreach ($arrays as $array) {
    echo "$array \n";
}

foreach ($person as $key) {
    print_r(json_encode($key));
}
