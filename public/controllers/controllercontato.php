<?php

include_once 'models/contato.php';


function listAll(){
    $todos = Todo::list();
    return $todos;
}

function find($id){
    $todos = Todo::find($id);
    return $todos;
}

function createTodo($task){
    $todo = Todo::insert($task);
    return $todo;
}

function deleteTodo($id){
    $todo = Todo::delete($id);
    return $todo;
}

function updateTodo($id, $task){
    $todo = Todo::update($id, $task);
    return $todo;
}