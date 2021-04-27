<?php
include('validator.php');

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
    <form action="/authenticate.php" method="post">


        <label for="">Username:</label>
        <input type="text" name="username" id="" value="<?php echo isset($_SESSION['values']['username']) ? $_SESSION['values']['username'] : ''; ?>">
        <p style="color:red">
            <?php echo $validator->report_error('username'); ?>
        </p>


        <label for="">Password:</label>
        <input type="password" name="password" id="" value="<?php echo isset($_SESSION['values']['password']) ? $_SESSION['values']['password'] : ''; ?>">
        <p style="color:red">
            <?php echo $validator->report_error('password'); ?>
        </p>


        <input type="submit" value="Submit">
    </form>
</body>

</html>

<?php session_destroy(); ?>