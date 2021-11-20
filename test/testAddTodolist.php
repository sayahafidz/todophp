<?php

require_once 'model/todolist.php';
require_once 'busines_logic/addTodolist.php';

addTodolist('hafidz');
addTodolist('serpatu');
addTodolist('soffel');

var_dump($todolist);
