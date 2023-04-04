<?php include_once 'controllers/controllercontato.php'; ?>

<?php function form_delete($id) { ?>
    <form class="row g-3" id="Delete" action="/delete.php"  method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <button type="submit" class="btn btn-danger">X</button>
    </form>
    <form class="row g-3" id="Delete" action="/update.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <button class="btn btn-warning">Alterar</button>
    </form>
<?php } ?>
    

<ul class="list-group">
    <?php 
        $lista = listAll();
        foreach ($lista as $linha) { 
    ?>
            <li class="list-group-item">
                <?php echo $linha->task; ?>
                <?php echo form_delete($linha->id); ?>
            </li>
    <?php } ?>
</ul>
