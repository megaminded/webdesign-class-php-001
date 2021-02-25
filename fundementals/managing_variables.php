<?php
$name = "James";
$wife = null;
$children = ["Peter", "John", "James"];
# The unset variables removes the existence of a variable
// unset($name);

// print(isset($children[6])); exit;
# The isset function helps us check if a variable is set or not
// if (isset($name)) {
//     print("Name is set");
// } else {
//     print("Name is not set");
// }

# Checking if a variables has an empty value
// using the empty() function

// if (empty($name)) {
//     print "Name is empty";
// } else {
//     print "Name is not empty";
// }

// Variables has scopes
$age = 12;
function get_gender()
{
    // echo $age; # Not accessible;
    $gender = "Boy";
    return $gender; # Return the value to make it accessible outside
}

// echo $gender; # Not accessible from the outside
// One way of getting the gender is by returning it in the function

$gender = get_gender();

echo $gender;