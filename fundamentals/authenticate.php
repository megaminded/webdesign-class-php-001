<?php session_start();
function validate($username, $password)
{
    if ($username && $password != '') {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        return true;
    } else {
        throw new Exception("Error Processing Request, Username or password cannot be empty");
    }
}

try {
    if (validate($_POST['username'], $_POST['password'])) {
        return header('location:session_page.php');
    }
} catch (\Exception $msg) {
    $_SESSION['error_log'] = $msg->getMessage();
    return header('location: login_form.php');
}