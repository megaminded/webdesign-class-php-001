<?php
// The $_GET and $_POST super global is an array, and can accessed using the key which are the name of the input
// print_r($_GET);
// print_r($_POST);

$username = $_POST['username'];

// echo $date_of_birth;
// echo "<br/>";
// echo $username;

$raw_date = $_POST['dob'];
// The challenge
// Transform the date to this format: 20th December, 2021
// $transformed_date = date('jS M, Y', strtotime($raw_date));
// echo $transformed_date;
// End of challenge

// Challenge
// Transform birth date to a sentence eg, Hello $username, you were born on the 12th of Feb.

$message = "Hello " . $username;
$message .= " you were born on the ";
$message .= date("jS", strtotime($raw_date));
$message .= " of ";
$message .= date("F", strtotime($raw_date));

echo $message;