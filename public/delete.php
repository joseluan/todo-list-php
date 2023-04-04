<?php

include_once 'controllers/controllercontato.php';

$id = $_POST['id'];

$delete = deleteTodo($id);

header('Location: index.php');