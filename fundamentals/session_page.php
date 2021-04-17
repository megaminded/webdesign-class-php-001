<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Username: <?php echo $_SESSION['username'] ?? 'No user found'; ?><br>
    Password: <?php echo $_SESSION['password'] ?? 'No user found'; ?>

</body>

</html>
<?php session_destroy();
?>