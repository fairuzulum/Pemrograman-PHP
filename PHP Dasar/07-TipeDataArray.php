<?php 

$name = array("lala", "lili", "lulu", "lele", "lolo");
var_dump($name);

// Mengakses data pada array
var_dump($name[0]);

// Mengubah data pada array
$name[1]= "ulum";
var_dump($name);

// Menambahkan data pada array
$name[]= "fairuz";
var_dump($name);

// Menghapus data pada array
unset($name[3]);
var_dump($name);

// Mengambil total data array
var_dump(count($name));

// Array sebagai MAP
$ulum = array (
	"id" => "fairuz",
	"name" => "Fairuz Ulum",
	"age" => 17
);
var_dump($ulum);
var_dump($ulum["id"]);

// Array dalam array
$ulum = array (
	"id" => "fairuz",
	"name" => "Fairuz Ulum",
	"age" => 17,
	"address" => array (
		"city" => "Bekasi",
		"country" => "Indonesia"
	)
);
var_dump($ulum);
var_dump($ulum["address"]["city"]);
