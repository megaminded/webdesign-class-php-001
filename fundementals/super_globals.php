<?php
session_start();

$server = $_SERVER; // Information about our server;
$post   = $_POST; // Information about a post form
$cookie = $_COOKIE; // Information stored on the user browser cookies
$get = $_GET; // Information about a get form
$request = $_REQUEST; // Information on both the post and the get form
$session = $_SESSION; // Gets information stored on the server level

session_destroy();

function ourloop($items) // Written a loop that will help us loop through the superglobals
{
    foreach ($items as $key => $value) {
        echo $key . ":" . $value;
        echo "\n";
    }
}
// <form action="" method="get"></form>
// <form action="" method="post"></form>

ourloop($request);