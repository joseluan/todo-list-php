<?php

include_once 'controllers/controllercontato.php';

$task = $_POST['task'];

$todo = createTodo($task);

header('Location: index.php');