<?php
require_once 'global.php';

$locacao = new Locacao();
$listaLocacao = $locacao->listar();

$cliente = new Cliente();
$listaCliente = $cliente->listar();

$usuario = new Usuario();
$listaUsuario = $usuario->listar();

$veiculo = new Veiculo();
$listaVeiculo = $veiculo->listar();
?>

<!doctype html>
<html lang="pt-br">

<head>
    <title>Fazer locação</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style-parte-admin.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow ">
        <div class="container-fluid">
            <a href="index.php">
                <img src="../../img/menu_pag/logoSite.png" width="45" title="Home">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="carros.php">
                            <img src="../../img/home/icone-carro.png" style="width: 30px; margin-right: 10px;" title="Carros" />
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contato.php">
                            <img src="../../img/menu_pag/logoContato.png" style="width: 30px; margin-right: 10px;" title="Contato" />
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="card">

        <div class="card-body">
            <img style="width: 15%;" src="../../img/menu_pag/logoSite.png">
        </div>

        <div class="card-body">
            <h4 class="card-title">Locação</h4>
            <p class="card-text">Fazer locação</p>
        </div>

        <form action="cadastrar-locacao.php" method="post">

            <div class="card-body">
                <input type="text" name="dataInicial" id="dataInicial" placeholder="Data inicial: AAAA-MM-DD">
            </div>

            <div class="card-body">
                <input type="text" name="dataFinal" id="dataFinal" placeholder="Data final: AAAA-MM-DD">
            </div>

            <div class="card-body">
                <input type="text" name="valorDiaria" id="valorDiaria" placeholder="Valor da diária">
            </div>

            <div class="card-body">
                <input type="text" name="cliente" id="cliente" placeholder="Nome do cliente" list="listaCliente">
                <datalist id="listaCliente">
                    <?php
                    foreach ($listaCliente as $linha) {
                        echo ("<option value=" . $linha[idCliente] . ">" . $linha[nomeCliente] . "</option>");
                    }
                    ?>
                </datalist>
            </div>

            <div class="card-body">
                <input type="text" name="veiculo" id="veiculo" placeholder="Nome do veiculo" list="listaVeiculo">
                <datalist id="listaVeiculo">
                    <?php
                    foreach ($listaVeiculo as $linha) {
                        echo ("<option value=" . $linha[idVeiculo] . ">" . $linha[modeloVeiculo] . "</option>");
                    }
                    ?>
                </datalist>
            </div>

            <div class="card-body">
                <input type="text" name="usuario" id="usuario" placeholder="Nome do usuário" list="listaUsuario">
                <datalist id="listaUsuario">
                    <?php
                    foreach ($listaUsuario as $linha) {
                        echo ("<option value=" . $linha[idUsuario] . ">" . $linha[nomeUsuario] . "</option>");
                    }
                    ?>
                </datalist>
            </div>
            
            <div class="card-body">
            <input type="text" name="status" id="status" placeholder="Status da locação" list="listaStatus">
                <datalist id="listaStatus">
                    <option value="Em processo"></option>
                    <option value="Concluida"></option>
                    <option value="Trancada"></option>
                </datalist>
            </div>

            <div class="card-body">
                <input type="submit" value="Enviar">
            </div>

        </form>

        <div class="card-body">
            <a href="../menu-admin.php">
                <button class="botoes">Voltar</button>
            </a>
        </div>

    </div>

    <div class="card">

        <div class="card-body">

            <h4 class="card-title">Locações Cadastradas</h4>
            <p class="card-text">Procurar, editar ou apagar uma locação</p>
            <form action="buscar-locacao.php" method="post">
                <input type="text" name="campoPesquisa" id="campoPesquisa" placeholder="Pesquisar por uma locação">
            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Cliente</th>
                        <th>Veiculo</th>
                        <th>Data inicial</th>
                        <th>Data Final</th>
                        <th>Valor Total</th>
                        <th>Status</th>
                        <th class="acao">Editar</th>
                    </tr>
                </thead>
                <tbody id="resultado">
                    <?php foreach ($listaLocacao as $linha) { ?>
                        <tr>
                            <td><?php echo $linha['idLocacao']?></td>
                            <td><?php echo $linha['nomeCliente'] ?></td>
                            <td><?php echo $linha['modeloVeiculo'] ?></td>
                            <td><?php echo $linha['dataInicial'] ?></td>
                            <td><?php echo $linha['dataFinal'] ?></td>
                            <td><?php echo $linha['valorTotal'] ?></td>
                            <td><?php echo $linha['statusLocacao'] ?></td>
                            <td><a href="form-editar-locacao.php?id=<?php echo $linha['idLocacao'] ?>">Editar</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../../js/busca-aproximada-locacao.js"></script>
</body>

</html>