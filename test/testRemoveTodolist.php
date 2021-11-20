<?php

require_once "model/todolist.php";

require_once "busines_logic/removeTodolist.php";
require_once "busines_logic/showTodolist.php";
require_once "busines_logic/addTodolist.php";

addTodolist('hafidz');
addTodolist('alfatih');
addTodolist('ginting');
addTodolist('muhammad');

showTodolist();

removeTodolist(2);

showTodolist();