<?php include "includes/header.php"; ?>
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
                            <li class="dropdown-header">
                                    <a class="maiorPrecoReiniciar"> Reiniciar</a>
                            </li>
                        </div>
                    </div>
                    <li>
                        <p class="precoDePara"><label class="form-label"> R$: </label> <input class="form-control" type="text" value="" placeholder="De ">
                           <label class="form-label"> R$: </label> <input class="form-control" type="text" placeholder="Para " value=""></p>
                    </li>
                </ul>
            </span>
        </div>
    </div>
</div>
<?php include "includes/footer.php"; ?>