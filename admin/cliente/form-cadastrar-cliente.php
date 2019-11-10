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
    <div>
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Cadastrar cliente</h1>
                <a href="../menu-admin.php">
                    <button style="
                    width:100%;
                    height: 40px;    
                    border: none;">
                        Voltar
                    </button>
                </a>
            </div>
        </div>
    </div>
    <form action="cadastrar-cliente.php" method="post">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Dados do cliente</h4>
                <input type="text" name="nome" placeholder="Nome completo">
                <input type="text" name="cpf" placeholder="CPF">
                <input type="text" name="cnh" placeholder="CNH">
                <input type="text" name="cep" id="cep" size='8' onblur="pesquisacep(this.value);" placeholder="CEP">
                <input type="text" name="endereco" id="endereco" placeholder="Endereço">
                <input type="text" name="numeroCasa" placeholder="N° casa/apt">
                <input type="text" name="complemento" placeholder="Complemento">
                <input type="text" name="bairro" id="bairro" placeholder="Bairro">
                <input type="text" name="cidade" id="cidade" placeholder="Cidade">
                <input type="text" name="uf" id="uf" placeholder="UF">
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <input type="submit" value="Cadastrar">
            </div>
        </div>
    </form>

    <div class="card">
        <div class="card-body">
            <h1 class="card-title">Clientes cadastrados</h1>

            <form action="buscar-cliente.php">
                <input type="text" name="campoPesquisa" id="campoPesquisa" placeholder="Pesquisar por nome do cliente">
            </form>

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

    <div class="card">
        <div class="card-body">
            <a href="../menu-admin.php">
                <button style="
                    width:100%;
                    height: 40px;    
                    border: none;">
                    Voltar
                </button>
            </a>
        </div>
    </div>
    
    <script type='text/javascript' src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../../js/pesquisa-cep.js"></script>
    <script src="../../js/busca-aproximada-cliente.js"></script>
</body>

</html>