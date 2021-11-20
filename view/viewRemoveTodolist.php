<?php

require_once __DIR__ . '/../helper/input.php';
require_once __DIR__ . '/../busines_logic/removeTodolist.php';
function viewRemoveTodolist()

{
    echo "Menghapus Todolist" . PHP_EOL;
    $pilihan = input("Nomor (x untuk batal) : ");
    if ($pilihan == 'x') {
        echo 'batal menghapus todo' . PHP_EOL;
    } else {
        $success = removeTodolist($pilihan);
        if ($success) {
            echo "sukses menghapus todolis nomor $pilihan" . PHP_EOL;
        } else {
            echo "gagal menghapus todolis nomor $pilihan" . PHP_EOL;
        }
    }
}
