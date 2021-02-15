<?php
// PHP has an inbuilt date function, that helps us get the value of our current date and time
// by specifying the function with various parameter,
// Parameters include: F, d, Y, m, M etc
$date = date('F d, Y');
// echo "February 15, 2021";
// echo $date;

// Learnt that date can be parsed and formatted
// $date2 = date('F d, Y', 1713383953); // Using Unix timestamp
$date3 = date('M', strtotime("02/15/2021")); // Using our own version of date

echo $date3;