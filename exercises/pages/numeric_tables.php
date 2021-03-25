<?php
$numbers = [
    'even' => [2, 4, 6, 8],
    'odd'  => [1, 3, 5, 7]
];
function loop_table_row($numbers, $index)
{
    $tr = "<tr> <td>" . $numbers['even'][$index] . "</td>  <td>" . $numbers['odd'][$index] . "</td> </tr>";
    return $tr;
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
    <table border="1">
        <?php for ($i = 0; $i < count($numbers['even']); $i++) {
            echo loop_table_row($numbers, $i);
        } ?>
    </table>
</body>

</html>