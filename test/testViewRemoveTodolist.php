<?php

require_once 'model/todolist.php';
require_once 'view/viewRemoveTodolist.php';
require_once 'busines_logic/addTodolist.php';
require_once 'busines_logic/showTodolist.php';
addTodolist('hafidz');
addTodolist('alfatih');
addTodolist('ginting');
showTodolist();
viewRemoveTodolist();
showTodolist();
