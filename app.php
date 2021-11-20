<?php
require_once __DIR__ . "/model/todolist.php";
require_once __DIR__ . "/busines_logic/addTodolist.php";
require_once __DIR__ . "/busines_logic/showTodolist.php";
require_once __DIR__ . "/busines_logic/removeTodolist.php";

require_once __DIR__ . "/view/viewAddTodolist.php";
require_once __DIR__ . "/view/viewRemoveTodolist.php";
require_once __DIR__ . "/view/viewShowTodolist.php";

echo "Aplikasi Todolist" . PHP_EOL;
viewShowTodolist();