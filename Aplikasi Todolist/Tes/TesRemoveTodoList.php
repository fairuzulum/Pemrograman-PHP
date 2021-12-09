<?php

require_once "../model/Todolist.php";
require_once "../BusinessLogic/AddTodolist.php";
require_once "../BusinessLogic/ShowTodolist.php";
require_once "../BusinessLogic/RemoveTodolist.php";

addTodoList("ahmad");
addTodoList("fairuz");
addTodoList("ulum");
addTodoList("uddin");

showTodolist();

removeTodolist(3);

showTodolist();

$succes = removeTodolist(4);
var_dump($succes);

showTodolist();