<?php

$name = "fairuz";

$othername =  &$name;
$othername = "ulum";

echo $othername . PHP_EOL;

// pass by reference

function increment(int &$value)
{
    $value++;
}

$counter = 1;
increment($counter);

echo $counter;

