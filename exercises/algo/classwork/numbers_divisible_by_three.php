<?php
# Checks for numbers divisible by three and return these numbers as an array
function divisible_by_three()
{
    $numbers = [];
    $x = 0;
    while ($x <= 50) {
        if ($x % 3 == 0 && $x != 0) {
            array_push($numbers, $x);
        }
        $x++;
    }
    return $numbers;
}

$result = divisible_by_three();

foreach ($result as $number) {
    echo $number;
    echo ",";
}