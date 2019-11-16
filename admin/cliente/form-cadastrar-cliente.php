<?php

require_once 'global.php';

try {

    $cliente = new Cliente();
    $lista = $cliente->listar();
} catch (Exception $e) {

    echo '<pre>';
    print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}

?>
<!doctype html>
<html lang="pt-br">

<head>
    <title>Cadastrar cliente</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style-parte-admin.css" />
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">

        <div class="container-fluid">

            <a href="../../index.php">
                <img class="ajusteTamanho" src="../../img/icons/logoSite.png" title="Home">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="../../carros.php">
                            <img class="ajusteTamanho carro" src="../../img/icons/icone-carro.png" title="Carros" />
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../../contato.php">
                            <img class="ajusteTamanho" src="../../img/icons/logoContato.png" title="Contato" />
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <img class="ajusteTamanho" src="../../img/icons/logo-opcoes.png">
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="../locacao/form-cadastrar-locacao.php">Locação</a>
                            <a class="dropdown-item" href="cliente/form-cadastrar-cliente.php">Cliente</a>
                            <a class="dropdown-item" href="../usuario/form-cadastrar-usuario.php">Usário</a>
                            <a class="dropdown-item" href="../veiculo/form-cadastrar-veiculo.php">Veiculo</a>
                            <a class="dropdown-item" href="../marca/form-cadastrar-marca.php">Marca</a>
                            <a class="dropdown-item" href="../menu-admin.php">Menu</a>
                        </div>
                    </li>

                </ul>

            </div>

        </div>

    </nav>



    <div class="card">
        <div class="card-body">
            <img class="logoCard" src="../../img/icons/logoSite.png">
        </div>
        <div class="card-body">
            <h4 class="card-title">Cadastrar cliente</h4>
            <p class="card-text">Aqui você poderá cadastrar novos clientes</p>
        </div>
        <form action="cadastrar-cliente.php" method="post">
            <div class="card-body">
                <input type="text" name="nome" placeholder="Nome completo">
            </div>
            <div class="card-body">
                <input type="text" name="cpf" placeholder="CPF">
            </div>
            <div class="card-body">
                <input type="text" name="cnh" placeholder="CNH">
            </div>
            <div class="card-body">
                <input type="text" name="cep" id="cep" size='8' onblur="pesquisacep(this.value);" placeholder="CEP">

            </div>
            <div class="card-body">
                <input type="text" name="endereco" id="endereco" placeholder="Endereço">

            </div>
            <div class="card-body">
                <input type="text" name="numeroCasa" placeholder="N° casa/apt">

            </div>
            <div class="card-body">
                <input type="text" name="complemento" placeholder="Complemento">

            </div>
            <div class="card-body">
                <input type="text" name="bairro" id="bairro" placeholder="Bairro">

            </div>
            <div class="card-body">
                <input type="text" name="cidade" id="cidade" placeholder="Cidade">

            </div>
            <div class="card-body">
                <input type="text" name="uf" id="uf" placeholder="UF">

            </div>
            <div class="card-body">
                <input class="botoes" type="submit" value="Cadastrar">

            </div>
        </form>
    </div>


    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Clientes cadastrados</h4>
            <p class="card-text">Aqui você poderá ver, pesquisar, editar ou apagar os clientes cadastrados</p>
        </div>
        <div class="card-body">
            <form action="buscar-cliente.php">
                <input type="text" name="campoPesquisa" id="campoPesquisa" placeholder="Pesquisar por nome do cliente">
            </form>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>UF</th>
                        <th class="acao">Editar</th>
                        <th class="acao">Excluir</th>
                    </tr>
                </thead>
                <tbody id="resultado">
                    <?php foreach ($lista as $linha) { ?>
                        <tr>
                            <td><?php echo $linha['idCliente'] ?></td>
                            <td><?php echo $linha['nomeCliente'] ?></td>
                            <td><?php echo $linha['cpfCliente'] ?></td>
                            <td><?php echo $linha['ufCliente'] ?></td>
                            <td><a href="form-editar-cliente.php?id=<?php echo $linha['idCliente'] ?>">Editar</a></td>
                            <td><a href="excluir-cliente.php?id=<?php echo $linha['idCliente'] ?>">Excluir</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>


    <footer class="page-footer font-small indigo" id="desceai">
        <div class="container">
            <div class="row text-center d-flex justify-content-center pt-5 mb-3">
                
                <div class="col-md-2 mb-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <a class="link" href="../../index.php">
                            Home
                        </a>
                    </h6>
                </div>

                <div class="col-md-2 mb-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <a class="link" href="../../carros.php">
                            Carros
                        </a>
                    </h6>
                </div>

                <div class="col-md-2 mb-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <a class="link" href="../../contato.php">
                            Contato
                        </a>
                    </h6>
                </div>

            </div>
            <hr class="rgba-white-light" style="margin: 0 15%;">
            <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">
                <div class="col-md-8 col-12 mt-5">
                    <p style="line-height: 1.7rem">
                        Os melhores preços e a maior variedade de veículos para aluguel,
                        de forma que atenda as suas necessidades! Nós da Cardians nos preocupamos
                        com o bem-estar de nossos clientes, e prezamos para que desfrutem
                        dos nossos serviços com o mínimo de burocracia e o máximo de comodidade.
                        Faça sua reserva!

                    </p>
                </div>
            </div>
        </div>
        <div class="footer-copyright text-center py-3">© 2019 Copyright
            <a class="link" href="../../index.html">
                Cardians
            </a>
        </div>
    </footer>


    <script type='text/javascript' src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../../js/pesquisa-cep.js"></script>
    <script src="../../js/busca-aproximada-cliente.js"></script>
</body>

</html>