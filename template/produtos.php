<?php include "../includes/header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Produtos</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 ">
            <span class="filtrosProdutos">Fitros: </span>
            <span class="filtrosProdutos"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Disponivel</a>
                <ul class="dropdown-menu dropdownFiltroDisponivel">
                    <li class="dropdown-header">
                        <p class="selecionaProdutos">
                            <span>12 </span> Selecionados
                            <a class="selecionaProdutosReiniciar"> Reiniciar </a>
                        </p>
                    </li>
                    <li role="separator" class="divider"></li>
                    <div class="row">
                        <div class="col-md-12">
                            <li>
                                <div class="estoqueProdutos form-check"><input class="form-check-input check" type="checkbox"  value="emEstoque"> Em estoque <span id="qtdStock"> 12</span> </div>
                            </li>
                            <li>
                                <p class="estoqueProdutos form-check"> <input class="form-check-input check" type="checkbox" value=""> Fora de estoque <span> 12</span></p>
                            </li>
                        </div>
                    </div>
                </ul>
            </span>
            <span class="filtrosProdutos"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Preço
                    <ul class="dropdown-menu dropdownFiltroPreco">
                        <div class="row">
                            <div class="col-md-12">
                                <li class="dropdown-header">
                                    <p class="dropReiniciar"> <a> Reiniciar</a> </p>
                                </li>
                            </div>
                        </div>
                        <li>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="precoDePara"><label class="form-label"> R$: </label> <input class="form-control" type="text" value="" placeholder="De "> </p>
                                    <p class="precoDePara"> <label class="form-label"> R$: </label> <input class="form-control" type="text" placeholder="Para " value=""> </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </a>
            </span>
            <span class="filtrosProdutos"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categorias
                    <ul class="dropdown-menu dropdownFiltroCategorias">
                        <div class="row">
                            <div class="col-md-12">
                                <li class="dropdown-header">
                                    <p class="dropReiniciar"> <a>Reiniciar</a> </p>
                                </li>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="d-inline-flex">
                                    <input class="form-check-input d-flex check" type="checkbox" value="">
                                    <i class="fa fa-desktop" aria-hidden="true"></i>
                                    <label> Desktop </label>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p class="d-inline-flex">
                                    <input class="form-check-input d-flex check" type="checkbox" value="">
                                    <i class="fa fa-laptop" aria-hidden="true"></i>
                                    <label> Notbooks </label>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="d-inline-flex">
                                    <input class="form-check-input d-flex check" type="checkbox" value="">
                                    <i class="fa fa-tablet" aria-hidden="true"></i>
                                    <label> Celulares </label>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p class="d-inline-flex">
                                    <input class="form-check-input d-flex check" type="checkbox" value="">
                                    <i class="fa fa-keyboard-o" aria-hidden="true"></i>
                                    <label> Informática </label>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="d-inline-flex">
                                    <input class="form-check-input d-flex check" type="checkbox" value="">
                                    <i class="fa fa-gamepad" aria-hidden="true"></i>
                                    <label> Video Games </label>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p class="d-inline-flex">
                                    <input class="form-check-input d-flex check" type="checkbox" value="">
                                    <i class="fa fa-television" aria-hidden="true"></i>
                                    <label> Tv's </label>
                                </p>
                            </div>
                        </div>
                    </ul>
                </a>
            </span>
        </div>
    </div>
    <hr>
    <section class="cardProd">
        <div class="d-flex row">
            <div class="card-group">
                <div class="col-md-4">
                    <a href="informacoesProdutos.php" class="cardLink">
                    <div class="card cardProduto">
                        <div class="imagem">
                            <img src="../img/javier-oquendo-centenario-off-1.jpeg" class="card-img-top" alt="Nome do Produto" />
                        </div>
                        <div class="card-body informacoes">
                            <h3 class="nome">Nome do Produto</h3>
                            <p class="descricao">descrição do Produto</p>
                            <p class="preco">R$ 100,00</p>
                            <button class="botaoCarrinho">
                                Adicionar ao carrinho
                            </button>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="informacoesProdutos.php" class="cardLink">
                    <div class="card cardProduto">
                        <div class="imagem">
                            <img src="../img/javier-oquendo-centenario-off-1.jpeg" class="card-img-top" alt="Nome do Produto" />
                        </div>
                        <div class="card-body informacoes">
                            <h3 class="nome">Nome do Produto</h3>
                            <p class="descricao">descrição do Produto</p>
                            <p class="preco">R$ 100,00</p>
                            <button class="botaoCarrinho">
                                Adicionar ao carrinho
                            </button>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="informacoesProdutos.php" class="cardLink">
                    <div class="card cardProduto">
                        <div class="imagem">
                            <img src="../img/javier-oquendo-centenario-off-1.jpeg" class="card-img-top" alt="Nome do Produto" />
                        </div>
                        <div class="card-body informacoes">
                            <h3 class="nome">Nome do Produto</h3>
                            <p class="descricao">descrição do Produto</p>
                            <p class="preco">R$ 100,00</p>
                            <button class="botaoCarrinho">
                                Adicionar ao carrinho
                            </button>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="informacoesProdutos.php" class="cardLink">
                    <div class="card cardProduto">
                        <div class="imagem">
                            <img src="../img/javier-oquendo-centenario-off-1.jpeg" class="card-img-top" alt="Nome do Produto" />
                        </div>
                        <div class="card-body informacoes">
                            <h3 class="nome">Nome do Produto</h3>
                            <p class="descricao">descrição do Produto</p>
                            <p class="preco">R$ 100,00</p>
                            <button class="botaoCarrinho">
                                Adicionar ao carrinho
                            </button>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="informacoesProdutos.php" class="cardLink">
                    <div class="card cardProduto">
                        <div class="imagem">
                            <img src="../img/javier-oquendo-centenario-off-1.jpeg" class="card-img-top" alt="Nome do Produto" />
                        </div>
                        <div class="card-body informacoes">
                            <h3 class="nome">Nome do Produto</h3>
                            <p class="descricao">descrição do Produto</p>
                            <p class="preco">R$ 100,00</p>
                            <button class="botaoCarrinho">
                                Adicionar ao carrinho
                            </button>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="informacoesProdutos.php" class="cardLink">
                    <div class="card cardProduto">
                        <div class="imagem">
                            <img src="../img/javier-oquendo-centenario-off-1.jpeg" class="card-img-top" alt="Nome do Produto" />
                        </div>
                        <div class="card-body informacoes">
                            <h3 class="nome">Nome do Produto</h3>
                            <p class="descricao">descrição do Produto</p>
                            <p class="preco">R$ 100,00</p>
                            <button class="botaoCarrinho">
                                Adicionar ao carrinho
                            </button>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include "../includes/footer.php"; ?>