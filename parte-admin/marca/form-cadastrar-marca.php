<?php
    require_once 'global.php';

    try {
        $marca = new Marca();
        $lista = $marca->listar();
    } catch(Exception $e) {
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }

?>

<!doctype html>
<html lang="pt-br">

<head>
    <title>Cadastrar marca</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .card {
            width: 400px;
            margin: 0 auto;
            margin-top: 200px;
        }
    </style>
</head>

<body>


    <div class="card">
        <div class="card-body">
            <h1>Cadastrar marcas</h1>
            <form method="POST" action="cadastrar-marca.php">
                <input type="text" name="marca" placeholder="Nome da marca">
                <input type="submit" value="Cadastrar">
            </form>
        </div>
    </div>


    <div class="card">
        <div class="card-body">
            <h1>Marcas cadastradas</h1>
            <form action="buscar-marca.php">
                <input type="text" name="campoPesquisa" id="campoPesquisa" placeholder="Pesquisar marca">
            </form>
            <table  class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Marca</th>
                        <th class="acao">Editar</th>
                        <th class="acao">Excluir</th>
                    </tr>
                </thead>
                <tbody id="resultado">
                    <?php   foreach($lista as $linha){?>
                        <tr>
                            <td><?php echo $linha['idMarca']?></td>
                            <td><?php echo $linha['nomeMarca']?></td>
                            <td><a href="form-editar-marca.php?id=<?php echo $linha['idCliente']?>">Editar</a></td>
                            <td><a href="excluir-marca.php?id=<?php echo $linha['idCliente']?>">Excluir</a></td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>

    
    <script src="js/busca-aproximada.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>