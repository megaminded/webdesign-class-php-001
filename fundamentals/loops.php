<?php
// echo "While loop \n";
$i = 0;
$times = 4;
// while ($i <= 100) {
//     $result = $i * $times;
//     echo $times . " x " . $i . " = " . $result . "\n";
//     // echo "{$times} x {$i} is {$result} \n";
//     // $i++;
// }

$numbers = range(20, 30);
// for ($i = 0; $i < count($numbers); $i++) {
//     // echo $i;
//     // echo ";";
//     echo $numbers[$i];
//     echo ";";
// }
// $a = 0;
// while ($a < count($numbers)) {
//     echo $numbers[$a];
//     echo ";";
//     $a++;
// }
$profile = ['name' => 'james', 'age' => '10'];

foreach ($numbers as $value) {
    echo $value;
    echo ";";
}