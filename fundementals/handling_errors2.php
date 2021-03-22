<?php

function age($dob)
{
    if (is_int($dob)) {
        return date('Y') - $dob;
    } else {
        throw new Exception("Error Processing Request: Value must be a number");
    }
}


try {
    echo age(50);
} catch (\Exception $error) {
    echo "There was an error processing your request \n";
    echo "This is the reason: \n";
    echo $error->getMessage();
} finally {
    echo "\n We have finished the codeblock";
}