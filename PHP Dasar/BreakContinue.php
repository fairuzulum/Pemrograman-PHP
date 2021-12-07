<?php 

// Break 
$counter = 1;

while (true) {
	echo "Perulangan ke-$counter" . PHP_EOL;
	$counter++;

	if ($counter > 10) {
		break;
	}
}

// Continue 
for ($Nilai=1; $Nilai <= 100 ; $Nilai++) { 
	if ($Nilai % 2 == 1) {
		continue;
	}
	echo "Nilai ke-$Nilai" . PHP_EOL;
}