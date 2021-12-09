<?php

require_once "../model/Todolist.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/AddTodolist.php";
require_once "../BusinessLogic/ShowTodolist.php";

addTodoList("ahmad");
addTodoList("fairuz");
addTodoList("ulum");
addTodoList("uddin");
addTodoList("budi");
addTodoList("lisa");


showTodoList();

viewRemoveTodoList();

showTodoList();