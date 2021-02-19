<?php
function solve($adj = null, $opp = null, $hyp = null)
{
    if (empty($adj)) {
        echo "Adjacent \n";
        // $solution = opp^2 - hyp^2  
        $hypotenuse = pow($hyp, 2);
        $opposite = pow($opp, 2);

        $solution = sqrt($hypotenuse - $opposite);
        return $solution;
    }
    if (empty($opp)) {
        echo "Opposite \n";

        // $solution = hyp^2 - adj^2 
        $hypotenuse = pow($hyp, 2);
        $adjacent   = pow($adj, 2);

        $solution = sqrt($hypotenuse - $adjacent);
        return $solution;
    }
    if (empty($hyp)) {
        echo "Hypotenuse \n";
        // $solution = opp^2 + adj^2 
        $adjacent = pow($adj, 2);
        $opposite = pow($opp, 2);

        $solution = sqrt($adjacent + $opposite);
        return $solution;
    }
}

echo solve(null, 15, 17);