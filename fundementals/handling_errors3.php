<?php
$array = "10, 11, 40, 20,";

function loop($array)
{
    if (is_array($array)) {
        if (count($array) > 0) {
            for ($i = 0; $i < count($array); $i++) {
                if (is_int($array[$i]) != 0) {
                    echo $array[$i] + 2 . ",";
                } else {
                    throw new UnexpectedValueException("Value should be an integer");
                }
            }
        } else {
            throw new RangeException("Array cannot be empty");
        }
    } else {
        throw new LogicException("Parameter must be an array");
    }
}

try {
    loop($array);
} catch (\UnexpectedValueException $msg) {
    echo "Nawa for you oh, you nor knw say na integer before?";
    echo "\n {$msg->getMessage()}";
} catch (\RangeException $msg) {
    echo "Why you go put empty array before?";
    echo "\n {$msg->getMessage()}";
} catch (\LogicException $msg) {
    echo "You too dull, oga put array for me";
    echo "\n {$msg->getMessage()}";
}