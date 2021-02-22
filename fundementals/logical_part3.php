<?php
$username = "John";
$password = null;
// Imagine a situation whereby you want to get only the user that did not enter a password
if ($username != "" && $password == null) {
    echo "Thanks";
} else {
    echo "No";
}
// Equivalent to the above statement using php inbuilt function
if (!empty($username) && empty($password)) {
    echo "Thanks";
} else {
    echo "No";
}



// $x = 1;
// $y = 0;
// $z = true;

// echo ($x || $y) ? "True" : "False";
// exit;
// if ($x == false && $y == false) {
//     echo "Both x and y is false";
// } elseif ($z != $y) {
//     echo "Z is not equal to Y";
// } elseif ($x == true) {
//     echo "X is false";
// } else {
//     echo "None of the condition is true";
// }