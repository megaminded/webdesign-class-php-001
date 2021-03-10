<?php
function get_current_year()
{
    return date('Y');
}

function calculate_age($dob)
{
    $age = get_current_year() - $dob;
    return $age;
}


$age = calculate_age(1997);

echo $age;