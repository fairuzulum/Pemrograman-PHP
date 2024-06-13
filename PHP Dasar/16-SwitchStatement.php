<?php 

$nilai = "E";

switch ($nilai) {
	case "A":
		echo "Anda Lulus dengan Sangat Baik" . PHP_EOL;
		break;
	case "B":
	case "C":
		echo "Anda Lulus" . PHP_EOL;
		break;
	case "D":
		echo "Anda Tidak Lulus" . PHP_EOL;
	default:
		echo "Anda Mungkin Salah Jurusan" . PHP_EOL;
		break;
}