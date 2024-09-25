<?php
$a = 2;

if ($a === 5) {
    echo "\$aは5です";
    }elseif($a === 7){
    echo "\$aは7です";
    }else{
    echo "\$aは５と７以外です";
    }

    echo "<br />";

$people = "Taro";

switch ($people){
    case "Taro";
    echo "太郎です";
    break;
    case "Jiro";
    echo "次郎です";
    break;
    case "Saburo";
    echo "三郎です";
    break;
}
echo "<br />";

$b =7;
$result = ($b === 7) ? "TRUE" : "FALSE";
echo $result;




