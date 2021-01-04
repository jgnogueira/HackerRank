<?php

function plusMinus($arr) {
    $countPositiveNumbers = 0;
    $countNegativeNumbers = 0;
    $countZeroNumbers = 0;
    $countArray = count($arr);
    
    foreach ($arr as $value) {
        if ($value === 0) {
            $countZeroNumbers++;
        } elseif ($value > 0) {
            $countPositiveNumbers++;
        } else {
            $countNegativeNumbers++;
        }
    }
    
    $proportionOfPositiveNumbers = number_format(($countPositiveNumbers / $countArray), 6);
    $proportionOfNegativeNumbers = number_format(($countNegativeNumbers / $countArray), 6);
    $proportionOfZeroNumbers = number_format(($countZeroNumbers / $countArray), 6);
    
    echo $proportionOfPositiveNumbers . PHP_EOL . $proportionOfNegativeNumbers . PHP_EOL . $proportionOfZeroNumbers;
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);

fclose($stdin);
