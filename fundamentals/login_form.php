<?php
session_start();
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
    <p style="color:red">
        <?php
        if (isset($_SESSION['error_log'])) {
            echo $_SESSION['error_log'];
        }
        ?>
    </p>
    <form action="/authenticate.php" method="post">
        <label for="">Username:</label>
        <input type="text" name="username" id="">
        <label for="">Password:</label>
        <input type="password" name="password" id="">
        <input type="submit" value="Submit">
    </form>
</body>

</html>

<?php session_destroy(); ?>