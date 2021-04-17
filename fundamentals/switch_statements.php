<?php

$gender = "transgender";
# While this may be a good option to identify the user gender to greet, it has alot of limitations
// if ($gender == "Male") {
//     echo "Good afternoon sir!";
// } else {
//     echo "Good afternoon madam!";
// }

switch ($gender) {
    case 'Male':
        echo "Good afternoon sir!";
        break;
    case 'Female':
        echo "Good afternoon madam!";
        break;
    case 'transgender':
        echo "We don't deal with transgender";
        break;
    default:
        echo "There is nothing like: {$gender}";
        break;
}