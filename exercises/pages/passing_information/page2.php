<?php
// var_dump($_GET);
// exit;
$topic;

if (isset($_GET['topic'])) {
    $topic = $_GET['topic'];
} else {
    $topic = 'Not found';
}

switch ($topic) {
    case 'biology':
        echo "This is a topic in biology";
        break;
    case 'physics':
        echo "This is a topic in physics";
        break;
    case 'chemistry':
        echo "This is a topic in chemistry";
        break;
    default:
        echo "Topic not selected";
        break;
}