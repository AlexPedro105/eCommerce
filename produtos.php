<?php include "includes/header.php";?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="">Produtos</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 ">
            <span class="filtrosProdutos">Fitros: </span>
            <span class="filtrosProdutos"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Disponivel</a>
                <ul class="dropdown-menu">
                    <li class="dropdown-header">
                        <p class="selecionaProdutos">
                            <span>12 </span> Selecionados
                            <a class="selecionaProdutosReiniciar"> Reiniciar </a>
                        </p>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li>
                        <div class="estoqueProdutos form-check"><input class="form-check-input" type="checkbox" value="emEstoque"> Em estoque <span> 12</span> </div>
                    </li>
                    <li>
                        <p class="estoqueProdutos"> <input class="form-check-input" type="checkbox" value=""> Fora de estoque <span> 12</span></p>
                    </li>
                </ul>
            </span>
            <span class="filtrosProdutos"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Preço: </a>
                <ul class="dropdown-menu dropdownPreco">
                    <div class="row">
                        <div class="col-md-12">
                            <li class="dropdown-header teste">
                                  <p class="maiorPrecoReiniciar"> <a> Reiniciar</a> </p>
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
            </span>
        </div>
    </div>
    <hr>
    <section class="cardProd">
        <div class="d-flex row">
            <div class="card-group">
                <div class="col-md-4">
                    <div class="card cardProduto">
                        <div class="imagem">
                            <img src="img/javier-oquendo-centenario-off-1.jpeg" class="card-img-top"
                                alt="Nome do Produto" />
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
                </div>
                <div class="col-md-4">
                    <div class="card cardProduto">
                        <div class="imagem">
                            <img src="img/javier-oquendo-centenario-off-1.jpeg" class="card-img-top"
                                alt="Nome do Produto" />
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
                </div>
                <div class="col-md-4">
                    <div class="card cardProduto">
                        <div class="imagem">
                            <img src="img/javier-oquendo-centenario-off-1.jpeg" class="card-img-top"
                                alt="Nome do Produto" />
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
                </div>
                <div class="col-md-4">
                    <div class="card cardProduto">
                        <div class="imagem">
                            <img src="img/javier-oquendo-centenario-off-1.jpeg" class="card-img-top"
                                alt="Nome do Produto" />
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
                </div>
                <div class="col-md-4">
                    <div class="card cardProduto">
                        <div class="imagem">
                            <img src="img/javier-oquendo-centenario-off-1.jpeg" class="card-img-top"
                                alt="Nome do Produto" />
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
                </div>
                <div class="col-md-4">
                    <div class="card cardProduto">
                        <div class="imagem">
                            <img src="img/javier-oquendo-centenario-off-1.jpeg" class="card-img-top"
                                alt="Nome do Produto" />
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
                </div>
            </div>
        </div>
    </section>
</div>
<?php include "includes/footer.php";?>