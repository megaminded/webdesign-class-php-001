<?php
# Methods of looping through arrays
$numbers = array(19,1,24,31,12,5,6,7,8,9,24,13);

# Using the foreach loop technique
// foreach ($numbers as $value) {
//     echo $value;
// }


# Using the for loop technique
// @todo
// We will learn more about built in functions and user defined functions
// echo count($numbers);  # -> gets the number of items in the array;
// echo $numbers[4];   # -> gets the element in an index specified;
// for ($i=0; $i < count($numbers); $i++) { 
//     echo $numbers[$i] . ',';
// }

#Using the while loop technique
$index = 0;
while ($index < count($numbers)) {
    echo $numbers[$index] . ',';
    $index++;
}

// echo $numbers[10];