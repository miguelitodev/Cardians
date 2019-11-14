<?php
require_once 'global.php';


try {
    $usuario = new Usuario();
    $usuario = Usuario::pegarUsuario($_GET['id']);
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
            <h4 class="card-title">Editar usuário</h4>
        </div>
        <div class="card-body">
            <form action="editar-usuario.php?id=<?php echo $usuario->getIdUsuario(); ?>" method="post">
                <input type="text" name="nome" id="nome" value="<?php echo $marca->getNomeUsuario(); ?>" placeholder="Nome do usuário">
                <input type="text" name="login" id="login" value="<?php echo $marca->getLoginUsuario(); ?>" placeholder="Login do usuário">
                <input type="text" name="senha" id="senha" value="<?php echo $marca->getSenhaUsuario(); ?>" placeholder="Senha do usuário">
                <input type="submit" value="Editar">
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>