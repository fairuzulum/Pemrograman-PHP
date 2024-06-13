<?php 

// Union (menggabungkan array)
$first = [
	"first_name" => "Fairuz",
	"last_name" => "Ulum"
];

$last = [
	"last_name" => "ulum",
	"first_name" => "Fairuz"
];

var_dump($first + $last);

// Equality (key-value sama)
$first = [
	"first_name" => "Fairuz",
	"last_name" => "Ulum"
];

$last = [
	"last_name" => "Ulum",
	"first_name" => "Fairuz"
];

var_dump($first == $last);

// Identity (key-value dan posisi harus sama)
$first = [
	"first_name" => "Fairuz",
	"last_name" => "Ulum"
];

$last = [
	"last_name" => "Ulum",
	"first_name" => "Fairuz"
];

var_dump($first === $last);

// Inequality(Tidak sama)
$first = [
	"first_name" => "Fairuz",
	"last_name" => "Ulum"
];

$last = [
	"last_age" => "1 tahum",
	"first_age" => "17 tahun"
];

var_dump($first != $last);

// Nonidentity (tidak identik)
$first = [
	"first_name" => "Fairuz",
	"last_name" => "Ulum"
];

$last = [
	"last_name" => "Ulum",
	"first_name" => "Fairuz"
];

var_dump($first !== $last);