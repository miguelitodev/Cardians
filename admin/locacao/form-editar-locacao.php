<?php
require_once 'global.php';
try {
    
    $locacao = new Locacao();
    $locacao = Locacao::pegarLocacao($_GET['id']);

} catch (Exception $e) {
    echo '<pre>';
    print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style-parte-admin.css">
</head>

<body>

    <div class="card">

        <div class="card-body">
            <img style="width: 15%;" src="../../img/menu_pag/logoSite.png">
        </div>

        <div class="card-body">
            <h4 class="card-title">Locação</h4>
            <p class="card-text">Editar locação</p>
        </div>

        <form name="edicao" action="editar-locacao.php?id=<?php echo $locacao->getIdLocacao();?>" method="post">

            <div class="card-body">
                <input type="text" name="status" id="status" placeholder="Status da locação" list="listaStatus" value="<?php $locacao->getStatusLocacao(); ?>">
                <datalist id="listaStatus">
                    <option value="Em processo"></option>
                    <option value="Concluida"></option>
                    <option value="Trancada"></option>
                </datalist>
            </div>

            <div class="card-body">
                <input type="submit" value="Editar">
            </div>

        </form>

        <div class="card-body">
            <a href="../menu-admin.php">
                <button class="botoes">Voltar</button>
            </a>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>