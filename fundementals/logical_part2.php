<?php
$x = true;
$y = false;
$z = true;
// $x = 1;
// $y = 0;
// $z = true;

// echo ($x || $y) ? "True" : "False";
// exit;
if ($x == false && $y == false) {
    echo "Both x and y is false";
} 
elseif($z != $y){
    echo "Z is not equal to Y";
}
elseif($x == true){
    echo "X is false";
}
else {
    echo "None of the condition is true";
}

