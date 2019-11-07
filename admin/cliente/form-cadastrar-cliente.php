<?php
    require_once 'global.php';
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
                <input type="text" name="cep" placeholder="CEP">
                <input type="text" name="endereco" placeholder="Endereço">
                <input type="text" name="numeroCasa" placeholder="N° casa/apt">
                <input type="text" name="complemento" placeholder="Complemento">
                <input type="text" name="bairro" placeholder="Bairro">
                <input type="text" name="cidade" placeholder="Cidade">
                <input type="text" name="uf" placeholder="UF">
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>