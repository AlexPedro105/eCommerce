<?php include "../includes/header.php" ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="cabecalhoCarrinho">
                <p class="tituloCarrinho ">Carrinho </p>
                <a class="voltarLoja" href="produtos.php"> Voltar à loja</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Produto</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Total</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody class="tbody-striped">
                <tr>
                    <td>
                        <img class="img-thumbnail imgProdutoCarrinho" src="../img/javier-oquendo-centenario-off-1.jpeg" width="100">
                    </td>
                    <td>
                        <div class="quantity-selector">
                            <button class="minus-btn" onclick="decreaseValue()">-</button>
                            <input type="text" id="quantity" value="1" readonly />
                            <button class="plus-btn" onclick="increaseValue()">+</button>
                        </div>
                    </td>
                    <td>R$: <span>1000,00</span></td>
                    <td>
                        <button class="btnDescartarProduto"><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="img-thumbnail imgProdutoCarrinho" src="../img/javier-oquendo-centenario-off-1.jpeg" width="100">
                    </td>
                    <td>
                        <div class="quantity-selector">
                            <button class="minus-btn" onclick="decreaseValue()">-</button>
                            <input type="text" id="quantity" value="1" readonly />
                            <button class="plus-btn" onclick="increaseValue()">+</button>
                        </div>
                    </td>
                    <td>R$: <span>1000,00</span></td>
                    <td>
                        <button class="btnDescartarProduto"><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p class="totalCompras text-right fw-bolder">Total estimado: R$ 20,10 BRL</p>
            <p class="text-right">Tributos, descontos e frete calculados no checkout</p>
            <div class="text-right mb-5">
                <button type="button" class="btn btn-warning btn-lg finalizarCompras"> Finalizar Compra</button>
            </div>
        </div>
    </div>
</div>
<?php include "../includes/footer.php" ?>