<?php
$numbers = array(19, 1, 24, 31, 12, 5, 6, 7, 8, 9, 24, 13);

$index = 0;
while ($index < count($numbers)) {
    if ($numbers[$index] == 5) {
        echo "Ooops, we dont accept 5 as a value";
        break;
    } else {
        echo $numbers[$index] . ',';
        $index++;
    }
}