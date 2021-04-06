<?php
function set_numbers($count = 200)
{
    $numbers = [
        'even' => [],
        'odd'  => []
    ];
    for ($i = 0; $i < $count; $i++) {
        if ($i % 2 == 0 && $i != 0) {
            array_push($numbers['even'], $i);
        } elseif (true) {
            array_push($numbers['odd'], $i);
        }
    }
    return $numbers;
}
function loop_table_row($numbers, $index)
{
    $even = "";
    $odd = "";
    if (isset($numbers['even'][$index])) {
        $even = $numbers['even'][$index];
    } else {
        $even = "-";
    }
    if (isset($numbers['odd'][$index])) {
        $odd = $numbers['odd'][$index];
    } else {
        $odd = "-";
    }

    $tr = "<tr> <td>" . $even . "</td>  <td>" . $odd . "</td> </tr>";
    return $tr;
}

$numbers = set_numbers(50);

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
        <tr>
            <th>Even</th>
            <th>Odd</th>
        </tr>
        <?php for ($i = 0; $i < count($numbers['even']); $i++) {
            echo loop_table_row($numbers, $i);
        } ?>
    </table>
</body>

</html>