<?php
echo "<pre>";
// echo print_r($_POST);
echo $_POST['username'];
echo " You selected " . count($_POST['subjects']) . " which include: ";
foreach ($_POST['subjects'] as $value) {
    echo $value;
    echo ",";
}