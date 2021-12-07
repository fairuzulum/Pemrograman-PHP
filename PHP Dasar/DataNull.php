<?php 

$name = "Fairuz";
$name = null;
$age = null;

echo "Nama : ";
echo $name;
echo "\n";
echo "Umur : ";
echo "\n";

// Mengecek Data Apakah Null atau Tidak
echo "Is Name Null? : ";
var_dump(is_null($name));
echo "\n";

// Menghapus variable
$contoh = "ulum";
unset($contoh);

var_dump(isset($contoh));