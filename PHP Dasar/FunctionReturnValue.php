<?php

function sum(int $first, int $second)
{
    $total = $first + $second;
    return $total;
}

$result = sum(10, 10);
var_dump($result);


function getFinalValue(int $value)
{
    if ($value >= 88) {
        return "A";
    } else if ($value >= 78) {
        return "B";
    } else if ($value >= 68) {
        return "C";
    } else if ($value >= 58) {
        return "D";
    } else {
        return "E";
    }
    
    echo "ups" . PHP_EOL;
}

$score = getFinalValue(90);
var_dump($score);










