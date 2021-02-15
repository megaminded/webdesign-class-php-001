<?php
function greet_user($username)
{
    $current_time  = date('a'); // Get the meridian time here

    if ($current_time == 'am') { // Checking the value of the meridian time
        echo "Good morning, $username";  // Output result 
    } else {
        echo "Good afternoon, $username"; // Output result
    }
}

greet_user("Johnbull"); // But what is users is about to sleep at night? or is evening already
// @class work
// Create a function thats solves this problem