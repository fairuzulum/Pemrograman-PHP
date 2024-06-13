 <?php

 function foo()
 {
     echo "FOO" . PHP_EOL;
 }
 function bar()
 {
     echo "BAR" . PHP_EOL;
 }

 $functionYangAkanDipanggil = "foo";
 $functionYangAkanDipanggil();

 $functionYangAkanDipanggil = "bar";
 $functionYangAkanDipanggil();

// penggunaan varibale function

function sayHello(string $name, $filter)
{
    $finalname = $filter($name);
    echo " Hello $finalname" . PHP_EOL;
}

function sample(string $name): string {
    return "fairuz $name";
}

sayHello("ulum", "sample");
sayHello("ulum", "strtoupper");









