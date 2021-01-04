<?php

function birthdayCakeCandles($candles) {
    $tallestCandle = max($candles);
    $countOfTheTallestCandle = array_count_values($candles)[$tallestCandle];
    
    return $countOfTheTallestCandle;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$candles_count = intval(trim(fgets(STDIN)));

$candles_temp = rtrim(fgets(STDIN));

$candles = array_map('intval', preg_split('/ /', $candles_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = birthdayCakeCandles($candles);

fwrite($fptr, $result . "\n");

fclose($fptr);
