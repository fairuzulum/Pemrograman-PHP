<?php

require_once __DIR__ . "/../helper/input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodolist.php";

function viewRemoveTodoList()
{
    echo "MENGHAPUS TODO".PHP_EOL;

    $pilihan = input("NOMER (x untuk batalkan)");

    if($pilihan == "x"){
        echo "Batal menghapus todo".PHP_EOL;
    } else {
        $succes = removeTodoList($pilihan);

        if($succes){
            echo "Sukses menghapus todo nomer $pilihan".PHP_EOL; 
        } else {
            echo "Gagal menghapus todo nomer $pilihan",PHP_EOL;    }
    }
}