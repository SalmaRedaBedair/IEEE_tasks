<?php
if (file_exists('todo.json')) {
    $json = file_get_contents('todo.json');
    $todos = json_decode($json, true);
    $todoName = $_POST['todo_name'];
    unset($todos[$todoName]);
    file_put_contents('todo.json', json_encode($todos, JSON_PRETTY_PRINT));
    header('Location: index.php');
    exit;
}