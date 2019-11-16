<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Venha comprar na melhor loja de automoveis do século XXI" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="shortcut icon" href="img/menu_pag/favicon.ico" type="image/x-icon" />
    <!-- <link rel="" -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <title>Eagle's Car</title>
</head>

<body>
    <!-- INICIO DO MENU DA PÁGINA -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <div class="container-fluid">
            <a href="index.php">
                <img src="img/menu_pag/logoSite.png" width="45" title="Home">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="carros.php">
                            <img src="img/home/icone-carro.png" style="width: 30px; margin-right: 10px;" title="Carros" />
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contato.php">
                            <img src="img/menu_pag/logoContato.png" style="width: 30px; margin-right: 10px;" title="Contato" />
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- FIM DO MENU DA PÁGINA -->

    <video autoplay muted loop width="100%">
        <source src="img/videos/VIDEO_ROADSTER.mp4" type="video/mp4">
    </video>

    
    <canvas id="canvas"></canvas>


    <div class="page-wrapper">
        <div class="post-slider">
            <img src="img/icons/left-seta.png" class="left-seta prev" alt="">
            <img src="img/icons/right-seta.png" class="right-seta next" alt="">
            <div class="post-wrapper">
            <?php
            require_once 'global.php';

            try {
                $marca = new Marca();
                $veiculo = new Veiculo();
                $lista = $marca->listarMarca();
                $listaVeiculo = $veiculo->listar();

            } catch (Exception $erro) {
                echo '<pre>';
                print_r($erro);
                echo '</pre>';
                echo $erro->getMessage();
            }

            foreach ($listaVeiculo as $linha) {
                ?>

                
                    <div class="post">
                        <img class="veiculos" src="<?php echo $linha['imgVeiculo'] ?>" alt="">
                        <h1 class="modelo"><?php echo $linha['modeloVeiculo'] ?></h1>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Modelo: </b><?php echo $linha['modeloVeiculo'] ?></li>
                            <li class="list-group-item"><b>Cor: </b><?php echo $linha['corVeiculo'] ?></li>
                            <li class="list-group-item"><b>Marca: </b><?php echo $linha['nomeMarca'] ?></li>
                            <li class="list-group-item"><b>Ano: </b><?php echo $linha['anoVeiculo'] ?></li>
                            <li class="list-group-item"><b>Valor da diária: </b><?php echo $linha['valorDiariaVeiculo'] ?></li>
                            <a class="list-group-item" style="margin-top: 30%" href="admin/locacao/form-cadastrar-locacao.php" class="card-link">Fazer locação</a>
                        </ul>
                    </div>




                <?php } ?>
                </div>

        </div>
    </div>
    </div>
    </div>
    <!-- INICIO DO RODAPÉ -->
    <!-- <footer class="footer">
        <p>Footer</p>
    </footer> -->
    <footer class="page-footer font-small indigo" style="background-color: #DCDCDC; margin-top: 0%" id="desceai">
        <div class="container">
            <div class="row text-center d-flex justify-content-center pt-5 mb-3">
                <div class="col-md-2 mb-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <a href="index.php">
                            Home
                        </a>
                    </h6>
                </div>
                <div class="col-md-2 mb-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <a href="contato.php">
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
            <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">
        </div>
        <div class="footer-copyright text-center py-3">© 2019 Copyright
            <a href="index.html">
                Cardians
            </a>
        </div>
    </footer>

    <!-- FIM DO RODAPÉ -->
    <script type="text/javascript" src="js/jquery.slim.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script src="js/particles.js"></script>
    <script src="js/script.js"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>


</body>

</html>