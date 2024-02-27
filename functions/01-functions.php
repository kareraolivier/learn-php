<?php
echo "functions \n";

function greatings()
{
    echo 'hello';
};
greatings();



// accessing global variable
$x = 12;
function add($nbr1 = 2, $nbr3 = 4)
{
    global $x;
    echo $x;
    return $nbr1 + $nbr3;
};
echo add(98, 67);


//Arrow function 
// $message = fn () => {
//     if (2 == 2) {
//         return 'olivier';
//     }
//     return 'karera';
// };

echo $message();
