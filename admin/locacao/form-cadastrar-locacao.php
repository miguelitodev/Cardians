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
    <div>
        <div class="card text-left">
          <div class="card-body">
              <h1>Fazer locação</h1>
          </div>
        </div>
        <form action="cadastrar-locacao.php" method="POST">
            

            <div class="card">
                <div class="card-body">
                    <h3>Veiculo da locação</h3>
                    <input type="text" name="veiculo" placeholder="Nome do veiculo">
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h3>Dados da locação</h3>
                    <input type="text" name="dataInicial" placeholder="Data inicial">
                    <input type="text" name="dataFinal" placeholder="Data final">
                    <input type="money" name="valorTotal" placeholder="Valor total">
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h3>Dados do funcionário</h3>
                    <input type="text" name="usuario" placeholder="Nome do usuario">

                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <input type="submit" value="Fazer locação">
                    <a href="../menu-admin.php">
                        <input type="submit" value="Voltar">
                    </a>
                </div>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>