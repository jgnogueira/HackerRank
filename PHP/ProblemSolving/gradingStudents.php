<?php

function gradingStudents($grades) {
    foreach ($grades as $key => $value) {
        if ($value % 5 === 0 || $value < 38) {
            continue;
        }
        $nextMultipleOfFive = 0;
        for ($i = 0; $i < $value; $i = $i + 5) {
            $nextMultipleOfFive = $i;
        }
        $nextMultipleOfFive = $nextMultipleOfFive + 5;
        $difference = $nextMultipleOfFive - $value;
        
        if ($difference < 3) {
            $grades[$key] = $nextMultipleOfFive;
        }
    }
    
    return $grades;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$grades_count = intval(trim(fgets(STDIN)));

$grades = array();

for ($i = 0; $i < $grades_count; $i++) {
    $grades_item = intval(trim(fgets(STDIN)));
    $grades[] = $grades_item;
}

$result = gradingStudents($grades);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($fptr);
