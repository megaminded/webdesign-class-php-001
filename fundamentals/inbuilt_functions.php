<?php


# Most time require a parameter
# Parameter are values passed into a function to process them
# functionName($parameter)
$even = array(2, 4, 6, 8, 10, 12, 14, 16, 18, 20);
$odd  = array(1, 3, 5, 7, 9, 11, 13, 15, 17, 19);
$result = max($even);
// echo $result;

# Most function require more than one parameter
# Example
$numbers = array_merge($even, $odd);
echo var_dump($numbers);