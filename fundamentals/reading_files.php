<?php
$document = 'book.txt';
$file = fopen($document, 'r');
$data = fread($file, filesize($document));
echo $data;

fclose($file);