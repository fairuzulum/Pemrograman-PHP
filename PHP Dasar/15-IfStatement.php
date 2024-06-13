<?php 

$nilai1 = 90;
$nilai2 = 98;

if ($nilai1 >= 88 && $nilai2 >= 95 ) {
	echo "Nilai anda A" . PHP_EOL;
} else if ($nilai1 >= 80 && $nilai2 >= 85) {
	echo "Nilai Anda B" . PHP_EOL;
} else if ($nilai1 >= 75 && $nilai2 >= 80) {
	echo "Nilai Anda c" . PHP_EOL;
} else {
	echo "Nilai Anda E" . PHP_EOL;
}

// If StateMent Dengan COLOM

if ($nilai1 >= 88 && $nilai2 >= 95 ):
	echo "Nilai anda A" . PHP_EOL;
elseif ($nilai1 >= 80 && $nilai2 >= 85):
	echo "Nilai Anda B" . PHP_EOL;
elseif ($nilai1 >= 75 && $nilai2 >= 80):
	echo "Nilai Anda c" . PHP_EOL;
else: 
	echo "Nilai Anda E" . PHP_EOL;
endif;