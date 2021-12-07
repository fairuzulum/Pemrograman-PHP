<?php 

$names = ["Ahmad", "Fairuz", "Ulum"];

// foreach ($names as $names) {
// 	echo "Data $names" . PHP_EOL;
// }

foreach ($names as $index => $names) {
	echo "Data ke $index = $names" . PHP_EOL;
}


$person = [
	"first_name" => "Ahmad",
	"middle_name" => "Fairuz",
	"last_name" => "ulum"
];
foreach ($person as $key => $value) {
	echo "$key : $value" . PHP_EOL;
}

