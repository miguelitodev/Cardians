<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="description" content="Venha comprar na melhor loja de automoveis do século XXI"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="shortcut icon" href="img/menu_pag/favicon.ico" type="image/x-icon"/>
        <title>Eagle's Car</title>
    </head>
    <body>
        <!-- INICIO DO MENU DA PÁGINA -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
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
                                <img src="img/home/icone-carro.png" style="width: 30px; margin-right: 10px;" title="Carros"/>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contato.php">
                                <img src="img/menu_pag/logoContato.png" style="width: 30px; margin-right: 10px;" title="Contato"/>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.html">
                                <img src="img/icons/login.svg" title="Login"/>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- FIM DO MENU DA PÁGINA -->
        
            <!-- COMEÇO DO SLIDER -->
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/menu_pag/C1_BMW_SLIDER.jpg" class="d-block w-100 img-fluid" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/menu_pag/C2_TESLA_SLIDER.jpg" class="d-block w-100 img-fluid" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/menu_pag/C3_MERCEDES_SLIDER.jpg" class="d-block w-100 img-fluid" alt="..." style="background-size: cover">
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">
                    Previous
                </span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">
                    Next
                </span>
            </a>
        </div>
        <!-- FIM DO SLIDER -->
        <div class="jumbotron">
            <h1 class="display-4">Cardians</h1>
            <p class="lead">Aqui na cardians trabalhamos com diferentes marcas para atende-los melhor.</p>
            <hr class="my-4">
            <p>Venha nos conhecer!</p>
          </div>
        <!-- INICIO DO RODAPÉ -->
        <footer class="page-footer font-small indigo" style="background-color: #DCDCDC;" id="desceai">
            <div class="container">
                <div class="row text-center d-flex justify-content-center pt-5 mb-3">
                    <div class="col-md-2 mb-3">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="index.html">
                                Home
                            </a>
                        </h6>
                    </div>
                    <div class="col-md-2 mb-3">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="bmw.html">
                                BMW
                            </a>
                        </h6>
                    </div>
                    <div class="col-md-2 mb-3">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="tesla.html">
                                Tesla
                            </a>
                        </h6>
                    </div>
                    <div class="col-md-2 mb-3">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="mercedes.html">
                                Mercedes
                            </a>
                        </h6>
                    </div>
                    <div class="col-md-2 mb-3">
                        <h6 class="text-uppercase font-weight-bold">
                            <a id="contato" href="#contato">
                                Contato
                            </a>
                        </h6>
                    </div>
                    <div class="col-md-2 mb-3">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="orcamento.html">
                                Orçamento
                            </a>
                        </h6>
                    </div>
                </div>
                <hr class="rgba-white-light" style="margin: 0 15%;">
                <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">
                    <div class="col-md-8 col-12 mt-5">
                        <p style="line-height: 1.7rem">
                            A Eagle's Car atende você com toda a satisfação e prazer, 
                            pois nós trabalhamos com qualidade de serviço, atendimento
                            e suporte ao usuário. Dedicação total, para que você sai 
                            com um carro que atenda as suas necessidades.
                        </p>
                    </div>
                </div>
                <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">   
            </div>
            <div class="footer-copyright text-center py-3">© 2019 Copyright
                <a href="index.html">
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