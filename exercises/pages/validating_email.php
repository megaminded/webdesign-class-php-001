<?php
$message = "";
function validate($case, $data)
{
    switch ($case) {
        case 'email':
            if (filter_var($data, FILTER_VALIDATE_EMAIL)) {
                return true;
            } else {
                return false;
            }
            break;
        case 'password':
            break;
    }
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        if (validate('email', $_POST['user_email'])) {
            $message = "Registration successful";
        } else {
            throw new \Exception("Invalid email");
        }
    } catch (\Exception $error) {
        $message = $error->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><?php echo $message; ?></p>
    <form action="" method="post">
        <input type="text" name="user_email" />
        <input value="VALIDATE" type="submit" />
    </form>
</body>

</html>