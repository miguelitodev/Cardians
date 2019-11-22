<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Venha comprar na melhor loja de automoveis do século XXI" />
    <meta name="keywords" content="Eagles' Car, Eagleas Car, Carros, Tesla, BMW, Mercedes" />
    <title>Contato</title>
    <link rel="shortcut icon" href="img/icons/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-parte-admin.css">
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

    <!-- INICIO FORMULÁRIO -->
    <div class="card">

        <div class="card-body">
            <img class="logoCard" src="img/icons/logoSite.png">
        </div>

        <div class="card-body">
            <h4 class="card-title">Fale conosco</h4>
            <p>Escreva sua duvida ou suguestão e nós responderemos o mais rápido possivel.</p>
        </div>

        <form class="form-group" action="mailto:desenvolvimentosistemas2019@gmail.com" method="POST">

            <div class="card-body">
                <input class="form-control" type="text" name="nome" id="nome" placeholder=" Nome" maxlength="20" size="15" required />
            </div>

            <div class="card-body">
                <input class="form-control" type="text" name="sobrenome" id="sobrenome" placeholder=" Sobrenome" maxlength="20" size="15" required />
            </div>

            <div class="card-body">
                <input class="form-control" type="email" name="email" id="email" placeholder=" E-mail" size="30" required />
            </div>

            <div class="card-body">
                <input class="form-control" type="tel" name="telefone" id="telefone" placeholder=" Telefone">
            </div>

            <div class="card-body">
                <textarea class="form-control inputs" name="msg" id="msg" placeholder="Digite sua mensagem aqui..." rols="50" cols="30"></textarea>
            </div>

            <div class="card-body">
                <button class="botoes" type="submit">Enviar</button>
            </div>

        </form>

    </div>

    <footer class="page-footer font-small indigo" id="desceai">
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
        <div class="footer-copyright text-center py-3">© 2019 Copyright
            <a href="index.html">
                Cardians
            </a>
        </div>
    </footer>
    <script type="text/javascript" src="js/jquery.slim.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
</body>


</html>