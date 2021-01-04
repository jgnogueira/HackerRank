<?php

function compareTriplets($a, $b) {
    $aScore = 0;
    $bScore = 0;

    foreach ($a as $key => $value) {
        if ($value > $b[$key]) {
            $aScore++;
        } elseif ($value < $b[$key]) {
            $bScore++;
        }
    }

    return [$aScore, $bScore];
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$b_temp = rtrim(fgets(STDIN));

$b = array_map('intval', preg_split('/ /', $b_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = compareTriplets($a, $b);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($fptr);
