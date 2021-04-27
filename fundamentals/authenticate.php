<?php   
include('validator.php');


$username = trim($_POST['username']);
$password = trim($_POST['password']);

$validator->validate('required', $username, 'username');
$validator->validate('required', $password, 'password');

if ($validator->fails()) {
    return header('location: login_form.php');
} else {
    echo "Accepted";
}

