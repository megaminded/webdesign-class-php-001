<?php
// We use the keyword "function" to define functions
// It is followed by the name of the function
// Its is often followed by a pair of bracket
function greet()
{
    // Implementation of the function
    echo "welcome";
}
// Invoking functions or calling a function
// greet();


function count_array()
{
    $numbers = array(19, 1, 24, 31, 12, 5, 6, 7, 8, 9, 24, 13, 10, 100, 19);

    $total_item = 0;
    foreach ($numbers as $item) {
        $total_item++;
    }
    echo $total_item;
}
// count_array();
// PHP functions unlike variables in php are automatically loaded, and does not matter if there are declared before use.

// PHP functions are able to perform tasks and implementation of operations and can also return values as result
function count_array2()
{
    $numbers = array(19, 1, 24, 31, 12, 5, 6, 7, 8, 9, 24, 13, 10, 100, 19);

    $total_item = 0;
    foreach ($numbers as $item) {
        $total_item++;
    }
    return $total_item;
}
$var = count_array2();
echo $var + 10;