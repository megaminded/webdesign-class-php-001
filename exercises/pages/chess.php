<?php
$box_per_row = 8;
$box_per_column = 8;
$current_row = 0;
$letters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'];

$user_letter = "B";
$user_number = 3;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: peru;
            display: flex;
            justify-content: space-around;
            align-content: center;
        }

        .row {
            display: flex;
        }

        .box {
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .black {
            background-color: black;
            color: white;
        }

        .white {
            background-color: white;
            color: black;
        }
        .selected{
            background-color: yellow;
            color: red;
        }
    </style>
</head>

<body>
    <div id="chess">
        <?php for ($i = 1; $i <= $box_per_row; $i++) : ?>
            <?php $current_row++; ?>
            <?php if ($i % 2 == 0) : ?>
                <div class="row">
                    <?php foreach ($letters as $key => $letter) : ?>
                        <?php $class = $key % 2 ? 'white' : 'black'; ?>
                        <?php
                            if($user_letter == $letter && $user_number == $current_row){
                                $selected = 'selected';
                            }else{
                                $selected = false;
                            }
                        ?>
                        <div class="box <?php echo $class. ' '. $selected ?>"><?php echo $letter; ?><?php echo $current_row; ?></div>
                    <?php endforeach; ?>
                </div>
            <?php else : ?>
                <div class="row">
                    <?php foreach ($letters as $key => $letter) : ?>
                        <?php $class = $key % 2 ? 'black' : 'white'; ?>
                        <?php
                            if($user_letter == $letter && $user_number == $current_row){
                                $selected = 'selected';
                            }else{
                                $selected = false;
                            }
                        ?>
                        <div class="box  <?php echo $class. ' '. $selected ?>"><?php echo $letter; ?><?php echo $current_row; ?></div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        <?php endfor; ?>
    </div>
</body>

</html>