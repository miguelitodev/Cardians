<!doctype html>
<html lang="pt-br">

<head>
    <title>Editar marca</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style-parte-admin.css">
</head>
<?php

require_once 'global.php';

try {

    $cliente = new Cliente();
    $cliente = Cliente::pegarCliente($_GET['id']);

} catch (Exception $e) {
    echo '<pre>';
    print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}

?>

<body>
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">Editar cliente</h1>
            <form name="edicao" method="post" action="editar-cliente.php?id=<?php echo $cliente->getIdCliente(); ?>">

                <input  type="text"  placeholder="Nome"             name="nome"          value="<?php echo $cliente->getNomeCliente();           ?>">
                <input  type="text"  placeholder="CPF"              name="cpf"           value="<?php echo $cliente->getCpfCliente();            ?>">
                <input  type="text"  placeholder="CNH"              name="cnh"           value="<?php echo $cliente->getCnhCliente();            ?>">
                <input  type="text"  placeholder="CEP"              name="cep"           value="<?php echo $cliente->getCepCliente();            ?>">
                <input  type="text"  placeholder="Numero casa"      name="numeroCasa"    value="<?php echo $cliente->getNumeroCliente();         ?>">
                <input  type="text"  placeholder="Complemento"      name="complemento"   value="<?php echo $cliente->getComplementoCliente();    ?>">
                <input  type="text"  placeholder="Bairro"           name="bairro"        value="<?php echo $cliente->getBairroCliente();         ?>">
                <input  type="text"  placeholder="Cidade"           name="cidade"        value="<?php echo $cliente->getCidadeCliente();         ?>">
                <input  type="text"  placeholder="Endereço"         name="endereco"      value="<?php echo $cliente->getEnderecoCliente();       ?>">
                <input  type="text"  placeholder="UF"               name="uf"            value="<?php echo $cliente->getUfCliente();             ?>">
                
                <input type="submit" value="Salvar">
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>