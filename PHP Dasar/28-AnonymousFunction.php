<?php

$sayHello = function (string $name) {
    echo "Hello $name". PHP_EOL;
};

$sayHello("Fairuz");
$sayHello("Ulum");


function sayGoodBye(string $name, $filter)
{
    $finalname = $filter($name);
    echo "Selamat tinggal $finalname" . PHP_EOL;
}

$filterfunction = function(string $name): string {
    return strtolower($name);
};

sayGoodBye("fairuz", function(string $name): string {
    return strtoupper($name);
});

sayGoodBye("ULUM", $filterfunction);


// mengakses variable diluar closure

$firstname = "fairuz";
$lastname = "ulum";

$sayHellofairuz = function() use($firstname, $lastname) {
    echo "Hello $firstname $lastname".PHP_EOL;
};

$sayHellofairuz();














