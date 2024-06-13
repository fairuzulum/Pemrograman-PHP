<?php 

// Dot Operator
$name = "Fairuz";

echo "Nama Saya " . $name . PHP_EOL;
echo "Umur Saya " . 17 . " Tahun" . PHP_EOL;

// Konversi ke Number dan Sebaliknya
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"100.25";
var_dump($valueFloat); 

// Mengakses Karakter
$nama = "fairuz";

echo $nama[0] . PHP_EOL;
echo $nama[1] . PHP_EOL;
echo $nama[2] . PHP_EOL;
echo $nama[3] . PHP_EOL;
echo $nama[4] . PHP_EOL;
echo $nama[5] . PHP_EOL;

// Variable Parsing

$umur = 17;
echo "Umur saya $umur" . PHP_EOL;

// Curly Brace
echo "nama saya {$name}s" . PHP_EOL;