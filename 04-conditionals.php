<?php

// if statements 
$age = 18;
if ($age > 12) {
    echo 'you are old';
} else {
    echo 'not old enought';
}


// else if statement 
if ($age > 12) {
    echo 'you are old';
} elseif ($age == 10) {
    echo 'you are in middle';
} else {
    echo 'not old enought';
}


// ternally operator on if statement.
echo $age == 10 ? 'it is correct' : 'not correct';


// coercion operator(??)
echo $ages ?? 'we do not have have age';


// switch case()
$color = 'red';
switch ($color) {
    case 'red':
        echo "you have $color color ";
        break;
    case 'yellow':
        echo "you have $color color ";
        break;
    case 'black':
        echo "you have $color color ";
        break;
    case 'green':
        echo "you have $color color ";
        break;
    default:
        echo "you have $color color";
}
