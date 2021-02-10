<?php
# An algo that divides even numbers by 2 from a specific point to another
$x = 0;
$results = [];
while ($x <= 100) {
    if ($x % 2 == 0) {
        $result =  $x / 2;
        array_push($results, $result);
    }
    $x++;
}
var_dump($results);