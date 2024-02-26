
<?php

// - sting : series of characters surrounded by single or double quote
// - Interger : Whole numbers
// - Float : Decimal number
// - Boolean : true or false
// - Array : Variable that can hold more values
// - Object : A class
// - NULL : empty variable
// - Resources : special variable that holds a resource

// Variable rules 

// - Variables must be prefixed with $. 
// - Variables must start with letter or underscore character. 
// - Variable can't start with a number.
// - variable can only contain alpha-numerics and underscore (A-Z , 1-9 and _).
// - Variables are case-sensitive ($name and $NAME are two different variables) 



$name = 'Karera';
$age = 34;
$is_young = true;
$cash_on_hand = 23.4;

echo "$name is $age years old, has $cash_on_hand";
//or 
echo "${name} is ${age} years old, has ${cash_on_hand}";

$x = 5 + 5;

echo 5 + 5;

echo 5 * 5;

echo 5 - 5;

echo 5 / 5;


// constants
// we use define to create a constant

define('HOST', 'localhost');
define('NAME', 'karera');

echo HOST;
