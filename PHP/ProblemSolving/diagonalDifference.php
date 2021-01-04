<?php

function diagonalDifference($arr) {
    $leftToRightDiagonal = 0;
    $rightToLeftDiagonal = 0;
    
    for ($i = 0; $i < count($arr); $i++) {
        $leftToRightDiagonal+= $arr[$i][$i];
        $rightToLeftDiagonal+= $arr[$i][count($arr) - ($i + 1)];
    }
    
    return abs($leftToRightDiagonal - $rightToLeftDiagonal);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr = array();

for ($i = 0; $i < $n; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);
