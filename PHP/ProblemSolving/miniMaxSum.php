<?php

function miniMaxSum($arr) {
    sort($arr);
    $minArray = $arr;
    $maxArray = $arr;

    unset($minArray[count($arr) - 1]);
    unset($maxArray[0]);

    echo array_sum($minArray) . ' ' . array_sum($maxArray);
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);

fclose($stdin);
