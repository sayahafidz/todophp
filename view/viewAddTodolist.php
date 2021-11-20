<?php
require_once __DIR__ . "/../model/todolist.php";
require_once __DIR__ . "/../helper/input.php";
require_once __DIR__ . "/../busines_logic/addTodolist.php";
function viewaddtodolist()
{
    echo "Menambah Todo " . PHP_EOL;
    $todo = input("Todo (x untuk keluar) : ");
    if ($todo == 'x') {
        echo "batal menambah todo";
    } else {
        addTodolist($todo);
    }
}
