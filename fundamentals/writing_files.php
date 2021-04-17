<?php
$document = 'book.txt';
$file = fopen($document, 'w');
fwrite($file, "A new sentence");

fclose($file);