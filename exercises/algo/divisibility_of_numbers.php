<?php
// Get the smallest value between 40 to 100 that is divisible by 7 and 5
// Step 1: Get the values
// Step 2: Get the values divisible by 5 and 7
// $smallestValue = 0;
// for ($i = 40; $i <= 100; $i++) {
//     if (($i % 5 == 0) && ($i % 3 == 0)) {
//         if ($smallestValue == 0) {
//             $smallestValue = $i;
//         } else {
//             if ($i < $smallestValue) {
//                 $smallestValue = $i;
//             } else {
//                 continue;
//             }
//         }
//     }
// }
// echo $smallestValue;


$values = [];
for ($i = 40; $i <= 100; $i++) {
    if (($i % 5 == 0) && ($i % 3 == 0)) {
        array_push($values, $i);
    }
}
var_dump($values);
echo min($values);