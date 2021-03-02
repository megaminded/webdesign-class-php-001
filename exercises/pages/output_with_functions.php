<?php
function display_triangle()
{
    $level = 10;
    $html = "<div id='triangle'";
    // $html = 
    if ($level > 50) {
        $html .= ' class="green"';
    } else {
        $html .= ' class="red"';
    }

    $html .= ' style="width:' . $level . '%">';

    $html .= "</div>";
    return $html;
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
    #triangle {
        width: 500px;
        height: 100px;
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
    <?php echo display_triangle(); ?>
</body>

</html>