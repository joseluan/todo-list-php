<?php

include_once 'controllers/controllercontato.php';

$id = $_GET['id'];
$todo = false;
if ($id){
    $todo = find($id);
}else if ($_POST['id']){
    $id = $_POST['id'];
    $task = $_POST['task'];
    $newTodo = updateTodo($id, $task);
    header('Location: index.php');
}

?>

<?php if($todo){ ?>
    <form class="row g-3" id="update" action="/update.php"  method="post">
        <div class="col-auto">
            <input type="text" class="form-control-plaintext" id="task" name="task" value="<?php echo $todo->task; ?>">
            <input type="hidden" name="id" value="<?php echo $todo->id; ?>">
        </div>  
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Alterar</button>
        </div>
    </form>
<?php } ?>