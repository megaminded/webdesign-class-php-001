<?php
// echo $_SERVER['REQUEST_METHOD'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (empty($username) || empty($password)) {
        $error = "Username and password is required";
    } else {
        $error = "";
        $success = true;
    }
} else {
    $error = "Please enter username and password";
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
    <?php if (isset($success)) {
        echo "<h1> Welcome: $username </h1>";
    } ?>
    <form action="" method="post" style="<?php if (isset($success)) echo "display: none"; ?>">
        <p style="color:red"><?php echo $error; ?></p>
        <label for="">Username</label>
        <input type="text" name="username">
        <br>
        <label for="">Password</label>
        <input type="password" name="password">
        <br>
        <input type="submit" value="Login">
    </form>
</body>

</html>