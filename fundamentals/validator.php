<?php
session_start();
class Validator{

    /**
     * Checks if an error exists
     *
     * @return boolean
     */
    function fails()
    {
        if (isset($_SESSION['errors'])) {
            return true;
        } else {
            return false;
        }
        
    }

    /**
     * Reports any error found
     *
     * @param String $input
     * @return void
     */
    function report_error($input)
    {
        if (isset($_SESSION['errors'][$input])) {
            echo $_SESSION['errors'][$input];
        }        
    }
    /**
     * Validates and input field
     * @param [string] $rule Determine the rule to validate
     * @param [string] $data The input value from our user
     * @param [string] $input The input tag
     * @return void
     */
    function validate($rule, $data, $input)
    {
        switch ($rule) {
            case 'required':
                if ($data == '') {
                    $this->save_error($input, 'Field cannot be empty');
                    return false;
                } else {
                    return true;
                }
                
                break;
            case 'email':
                if (filter_var($data, FILTER_VALIDATE_EMAIL)) {
                    return true;
                } else {
                    $this->save_error($input, 'Field contains an invalid email');
                    return false;
                }
                
                break;
            default:
                # code...
                break;
        }
    }
    /**
     * Save errors encountered while processing the input
     *
     * @param [type] $field
     * @param [type] $error_message
     * @return void
     */
    function save_error($field, $error_message)
    {
        $_SESSION['errors'][$field] = $error_message;
    }
}
$validator = new Validator();