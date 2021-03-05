<?php function set_level($level)
{
    return " style='width: {$level}%'";
}

function set_class($level)
{
    if ($level > 50) {
        return "class='green'" . set_level($level);
    } else {
        return "class='red'" . set_level($level);
    }
}

function display_error($error)
{
    $html = "<div id='circle'> {$error}</div>";
    return $html;
}

function display_rectangle($level)
{
    if (is_int($level)) {
        $html = "<div id='rectangle' " . set_class($level) . "> </div>";
        return $html;
    } else {
        return display_error("Invalid level enter, please try again with a number");
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
    <style>
    #rectangle {
        width: 500px;
        height: 100px;
    }

    #circle {
        width: 400px;
        height: 400px;
        border-radius: 100%;
        background-color: red;
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .red {
        background-color: red;
    }

    .green {
        background-color: green;
    }
    </style>
</head>

<body>
    <?php echo display_rectangle("James"); ?>
</body>

</html>