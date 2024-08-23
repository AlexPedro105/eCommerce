<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/estiloSite.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <title>InovaByte Site</title>
</head>

<body>
    <nav class="navbar navbar-static-top navegacaoMenu bg-primary d-flex flex-column align-items: center">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bg-danger"></span>
                    <span class="icon-bar bg-danger"></span>
                    <span class="icon-bar bg-danger"></span>
                </button>
                <!--<a id="tituloSistema" class="navbar-brand navColorWhite " href="#"><i class="fa fa-gg-circle" aria-hidden="true"></i> Sistema Alex</a>-->
                <a href="#"><img src="img/img1-removebg-preview.png" alt="Minha Logo" height="55" width="60" /></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active barraNavegacao">
                        <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>
                            Inicio</a>
                    </li>
                    <li class="barraNavegacao">
                        <a href="produtos.php"><i class="fa fa-star" aria-hidden="true"></i>
                            Produtos</a>
                    </li>
                    <li class="dropdown barraNavegacao">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-product-hunt" aria-hidden="true"></i>
                            Categorias <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">Setup</li>
                            <li>
                                <a href="#desktop"><i class="fa fa-desktop" aria-hidden="true"></i>
                                    Desktop</a>
                            </li>
                            <li>
                                <a href="#notbook"><i class="fa fa-laptop" aria-hidden="true"></i>
                                    Notbooks</a>
                            </li>
                            <li>
                                <a href="#celulares"><i class="fa fa-tablet" aria-hidden="true"></i>
                                    Celulares</a>
                            </li>
                            <li>
                                <a href="#informatica"><i class="fa fa-keyboard-o" aria-hidden="true"></i>
                                    Informática</a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Eletronicos</li>
                            <li>
                                <a href="#video-games"><i class="fa fa-gamepad" aria-hidden="true"></i>
                                    Vídeo Games</a>
                            </li>
                            <li>
                                <a href="#tvs"><i class="fa fa-television" aria-hidden="true"></i>
                                    TVs</a>
                            </li>
                        </ul>
                    </li>
                    <li class="barraNavegacao">
                        <a href="contato.php"><i class="fa-solid fa-address-book"></i></i>
                            Entrar em contato</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav barraNavegacao navbar-right">
                    <li class="barraPesquisa">
                        <div class="collapse search-bar">
                            <form class="d-flex">
                                <input class="form-control " type="search" placeholder="Pesquisar" aria-label="Search">
                            </form>
                        </div>
                    </li>
                    <li>
                        <a href="#pesquisar"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#carrinho"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>
                            Login!</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header>
        <h4 class="tituloHeader">Seja Bem vindo</h4>
    </header>