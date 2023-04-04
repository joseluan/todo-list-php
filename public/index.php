<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>TODOS</title>

    <link rel="stylesheet" href="staic/css/mystyle.css">

  </head>
  <body>  
    <div class="container">
        <div class="row">
            <div class="col-12 justify-content-center">
                <h1>Tarefas</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 justify-content-center">
                <form class="row g-3" id="cadastrar" action="/insert.php"  method="post">
                    <div class="col-auto">
                        <input type="text" class="form-control-plaintext" id="task" name="task" placeholder="Minha tarefa ...">
                    </div>  
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12 justify-content-center">
                <?php  include_once 'list.php'; ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>