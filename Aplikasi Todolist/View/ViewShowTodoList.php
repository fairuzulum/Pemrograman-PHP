<?php

require_once __DIR__ . "/../model/Todolist.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodolist.php";
require_once __DIR__ . "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";
require_once __DIR__ . "/../helper/input.php";

function viewShowTodoList()
{
   while (true){
    showTodoList();

    echo "MENU".PHP_EOL;
    echo "1. Add Todo".PHP_EOL;
    echo "2. Remove Todo".PHP_EOL;
    echo "x. Exit".PHP_EOL;

    $pilihan = input("Pilih");

    if($pilihan == "1"){
        viewAddTodoList();
    }else if($pilihan == "2"){
        viewRemoveTodoList();
    }else if($pilihan == "x"){
        break;
    }else{
        echo "Pilihan tidak dimengerti".PHP_EOL;
    }
   }

   echo "Sampai Jumpa Lagi".PHP_EOL;
}