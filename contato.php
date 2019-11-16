<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="description" content="Venha comprar na melhor loja de automoveis do século XXI"/>
        <meta name="keywords" content="Eagles' Car, Eagleas Car, Carros, Tesla, BMW, Mercedes" />
        <title>Contato</title>
        <link rel="shortcut icon" href="img/menu_pag/logoContato.png" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
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
                    </ul>
                </div>
            </div>

        </div>

    </nav>
    <!-- FIM DO MENU DA PÁGINA -->

    <!-- INICIO FORMULÁRIO -->
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                Fale conosco
            </h1>
            <form class="form-group" action="mailto:desenvolvimentosistemas2019@gmail.com" method="POST">
                <input class="form-control" type="text" name="nome" id="nome" placeholder=" Nome" maxlength="20" size="15" required/>
                <input class="form-control" type="text" name="sobrenome" id="sobrenome" placeholder=" Sobrenome" maxlength="20" size="15" required/>
                <input class="form-control" type="email" name="email" id="email" placeholder=" E-mail" size="30" required/>
                <input class="form-control" type="tel" name="telefone" id="telefone" placeholder=" Telefone">
                <textarea class="form-control" name="msg" id="msg" placeholder="Digite sua mensagem aqui..." rols="50" cols="30"></textarea>
                <br>
                <button class="btn btn-primary" type="submit" style="background-color: #188a62">Enviar</button>
            </form>
        </div>
        <!-- FIM FORMULÁRIO -->

        <!-- INICIO DO RODAPÉ -->
        <footer class="page-footer font-small indigo" style="background-color: #DCDCDC; margin-top: 7%" id="desceai">
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
                            <a href="carros.php">
                                Carros
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
            </div>
<<<<<<< HEAD
            <div class="footer-copyright text-center py-3">© 2019 Copyright
                <a href="index.html">
                    Cardians
                </a>
=======
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
>>>>>>> da978d6b748ec34140bfa9830dfe71b69b2f862e
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
</body>
<script type="text/javascript" src="js/jquery.slim.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>

</html>