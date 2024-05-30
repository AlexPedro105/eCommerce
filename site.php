<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/estiloSite.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>InovaByte Site</title>
</head>

<body>

  <nav class="navbar navbar-static-top navegacaoMenu bg-primary d-flex flex-column align-items: center">
    <!--INICIO FIM navbar navbar-static-top-->
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar bg-danger"></span>
          <span class="icon-bar bg-danger"></span>
          <span class="icon-bar bg-danger"></span>
        </button>
        <!--<a id="tituloSistema" class="navbar-brand navColorWhite " href="#"><i class="fa fa-gg-circle" aria-hidden="true"></i> Sistema Alex</a>-->
        <a href="#"><img src="img/img1-removebg-preview.png" alt="Minha Logo" height="55" width="60"></a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav ">
          <li class="active barraNavegacao"><a href="#home"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
          </li>
          <li class="barraNavegacao"><a href="#novidades"><i class="fa fa-star" aria-hidden="true"></i> Novidades</a>
          </li>
          <li class="dropdown barraNavegacao">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-product-hunt"
                aria-hidden="true"></i> Categorias
              <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li class="dropdown-header">Setup</li>
              <li><a href="#desktop"><i class="fa fa-desktop" aria-hidden="true"></i> Desktop</a></li>
              <li><a href="#notbook"><i class="fa fa-laptop" aria-hidden="true"></i> Notbooks</a></li>
              <li><a href="#celulares"><i class="fa fa-tablet" aria-hidden="true"></i> Celulares</a></li>
              <li><a href="#informatica"><i class="fa fa-keyboard-o" aria-hidden="true"></i> Informática</a></li>
              <li role="separator" class="divider"></li>
              <li class="dropdown-header">Eletronicos</li>
              <li><a href="#video-games"><i class="fa fa-gamepad" aria-hidden="true"></i> Vídeo Games</a></li>
              <li><a href="#tvs"><i class="fa fa-television" aria-hidden="true"></i> TVs</a></li>
            </ul>
          </li>
          <li class="barraNavegacao"><a href="#usuarios"><i class="fa faNaNuser-o" aria-hidden="true"></i> Entrar em
              contato</a></li>
        </ul>
        <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>-->
        <ul class="nav navbar-nav barraNavegacao navbar-right">
          <li><a href="#pesquisar"><i class="fa fa-search" aria-hidden="true"></i></a></li>
          <li><a href="#carrinho"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
          <li><a href="#login"><i class="fa fa-sign-in" aria-hidden="true"></i> Login!</a></li>
        </ul>
      </div>
    </div>
  </nav> <!--CABEÇALHO FIM navbar navbar-static-top-->
  <header>
    <h4 class="tituloHeader">Seja Bem vindo</h4>
  </header>
  <section>
    <div class="row">
      <div class="col-12">
        <img src="img/banner.png" class="img-fluid img-thumbnail img-lg bannerSite" alt="Responsive image">
        <div class="col-6">
          <button class="btn btn-primary buttonBanner me-md-2" type="button">Comece já</button>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="row">
      <div class="col-12">
      <h4 class="nossosProdutos">Nossos produtos</h4>
      </div>
    </div>
  </section>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</html>