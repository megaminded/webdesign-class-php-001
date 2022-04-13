<?php
function validated($num1, $num2)
{
    // check if the first value is a numeric string
    if (is_numeric($num1)) {
        // if the first value is a numeric string check for the second value
        if (is_numeric($num2)) {
            // if the second value is numeric then the first value is obviously numeric.
            return true;
        } else {
            // return false since the second value is not numeric
            return false;
        }
    } else {
        // Dont bother checking the second value since the first value is already invalid
        return false;
    }
}
function solve($num1, $num2, $operator)
{
    # Check if the datas are accepted for arithemtic operations
    if (validated($num1, $num2)) {
        // Switch the operations based on the selected operator
        switch ($operator) {
            case '+':
                return $num1 + $num2;
                break;
            case '-':
                return $num1 - $num2;
                break;
            case '*':
                return $num1 * $num2;
                break;
            case '/':
                return $num1 / $num2;
                break;
            default:
                return "Invalid request, operator is not recognized";
                break;
        }
    } else {
        // Throw and error message when the parameters are not accepted.
        return "Invalid parameters, parameters must contain only numbers";
    }
}

$result = solve($_POST['num1'], $_POST['num2'], $_POST['operator']);

echo $result;