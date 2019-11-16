<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Venha comprar na melhor loja de automoveis do século XXI" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-parte-admin.css">
    <link rel="shortcut icon" href="img/menu_pag/favicon.ico" type="image/x-icon" />
    <title>Eagle's Car</title>
</head>

<body>
    <!-- INICIO DO MENU DA PÁGINA -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">

        <div class="container-fluid">

            <a href="index.php">
                <img class="ajusteTamanho" src="img/icons/logoSite.png" title="Home">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="carros.php">
                            <img class="ajusteTamanho carro" src="img/icons/icone-carro.png" title="Carros" />
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contato.php">
                            <img class="ajusteTamanho" src="img/icons/logoContato.png" title="Contato" />
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>
    <!-- FIM DO MENU DA PÁGINA -->
    <?php
    $veiculo = new Veiculo();
    $carro = $veiculo->pesquisar();


    ?>

    <img src="<?php echo $linha ?>">

    <!-- INICIO DO RODAPÉ -->
    <footer class="page-footer font-small indigo" id="desceai">
        <div class="container">
            <div class="row text-center d-flex justify-content-center pt-5 mb-3">
                <div class="col-md-2 mb-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <a class="link" href="index.php">
                            Home
                        </a>
                    </h6>
                </div>
                <div class="col-md-2 mb-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <a class="link" id="contato" href="contato.php">
                            Contato
                        </a>
                    </h6>
                </div>
            </div>
            <hr class="rgba-white-light">
            <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">
                <div class="col-md-8 col-12 mt-5">
                    <p>
                        A Eagle's Car atende você com toda a satisfação e prazer,
                        pois nós trabalhamos com qualidade de serviço, atendimento
                        e suporte ao usuário. Dedicação total, para que você sai
                        com um carro que atenda as suas necessidades.
                    </p>
                </div>
            </div>
            <hr class="clearfix d-md-none rgba-white-light">
        </div>
        <div class="footer-copyright text-center py-3">© 2019 Copyright
            <a class="link" href="index.php">
                Eagle's Car
            </a>
        </div>
    </footer>
    <!-- FIM DO RODAPÉ -->
    <script type="text/javascript" src="js/jquery.slim.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
</body>

</html>