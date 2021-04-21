<?php session_start();
// function validate($username, $password)
// {
//     if ($username && $password != '') {
//         $_SESSION['username'] = $username;
//         $_SESSION['password'] = $password;
//         return true;
//     } else {
//         throw new Exception("Error Processing Request, Username or password cannot be empty");
//     }
// }

// try {
//     if (validate($_POST['username'], $_POST['password'])) {
//         return header('location:session_page.php');
//     }
// } catch (\Exception $msg) {
//     $_SESSION['error_log'] = $msg->getMessage();
//     return header('location: login_form.php');
// }

$username = $_POST['username'];
$password = $_POST['password'];
$errors = [];

if ($username == '') {
    $errors['username'] = "Username cannot be empty" ;  
}

if (strlen($username) <= 5 && $username != '') {
    $errors['username'] = "Username cannot be less than five letters" ;  
}

if ($password == '') {
    $errors['password'] = "Password cannot be empty";
}

if (count($errors)) {
    $_SESSION['errors'] = $errors;
    $_SESSION['values'] = [
        'username' => $username,
        'password' => $password,
    ];
    return header('location: login_form.php');
} else {
    echo "Accepted";
}
