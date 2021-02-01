<?php include("../inc/header.html") ?>

<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident facere culpa omnis nihil perferendis. Consequatur velit obcaecati labore animi ducimus perspiciatis voluptas quod dignissimos ullam aliquam tempore, esse assumenda molestias?</p>

<?php echo "Francis"; ?>


<?php
$numbers = array(19,1,24,31,12,5,6,7,8,9,24,13);
$index = 0;
while ($index < count($numbers)) {
    echo $numbers[$index] . ',';
    $index++;
}
?>

<?php include("../inc/footer.html") ?>