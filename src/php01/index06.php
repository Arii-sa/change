<?php

echo "<br />";

function score($score1, $score2, $score3)
{
    $cost = $score1 + $score2 + $score3;
    
if (210 < $cost){
    echo $cost . "合格点は00なので合格です";
}else{
    echo $cost . "合格点は00なので不合格です";
}
}
echo (score(90,77,88));

function effect($under1, $under2, $under3)
{
    $total = $under1 * $under2 / $under3;
    return $total;
}

$value = effect(6,3,2);
echo $value;

