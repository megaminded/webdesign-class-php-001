<?php
echo "While loop \n";
$i = 0;
$times = 4;
while ($i <= 100) {
    $result = $i * $times;
    echo $times ." x ".$i." = ".$result."\n";
    // echo "{$times} x {$i} is {$result} \n";
    // $i++;
}