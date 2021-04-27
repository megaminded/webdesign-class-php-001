<?php
include('validator.php');


$validator->validate('required', '', 'user_name');
$validator->validate('email', 'jamesgmail.com', 'user_email');
$validator->validate('required', '', 'user_password');

echo $validator->report_error('user_name');
echo $validator->report_error('user_password');
echo $validator->report_error('user_email');