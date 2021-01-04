<?php

function staircase($n) {
    $result = [];
    for ($i = 1; $i <= $n; $i++) {
        $result[$i] = str_pad('#', $i, '#', STR_PAD_LEFT);
        if (strlen($result[$i]) !== $n) {
            $result[$i] = str_pad($result[$i], $n, ' ', STR_PAD_LEFT);    
        }
    }
    
    foreach ($result as $value) {
        echo $value . PHP_EOL;
    }
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

staircase($n);

fclose($stdin);
