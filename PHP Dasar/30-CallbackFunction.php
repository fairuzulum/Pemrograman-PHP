<?php

function sayHello(string $name, callable $filter)
{
    $finalname = call_user_func($filter, $name);
    echo "Hello $finalname".PHP_EOL;
}

sayHello("fairuz", "strtoupper");
sayHello("FAIRUZ", "strtolower");
sayHello("fairuz", function(string $name): string {
    return strtoupper($name);
});
sayHello("FAIRUZ", fn($name) => strtolower($name));