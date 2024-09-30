<?php include "../includes/header.php"; ?>
	<div class="container contentsInfoProdutos">
		<div class="row">
			<div class="col-md-6">
				<img class="img-thumbnail" src="../img/javier-oquendo-centenario-off-1.jpeg">
			</div>
			<div class="col-md-6">
				<p class="marcaProdutos">MARCA</p><!--(nome da marca - table produtos)-->
				<p class="nomeProduto">COMPUTADOR</p>
				<p>R$: <span>12,00</span> <span class="custoProduto">Esgotado</span></p><!--(preco do produto - table produto)-->
				 <div class="select-menu">
        			<div class="select-btn">
            			<span class="sBtn-text">Quantidade <!--(estoque do produto - table produto )--></span>
        			</div>
			        <ul class="options">
            			<li class="option">
                			<span class="option-text" value="1">1</span>
            			</li>
            			<li class="option">
                			<span class="option-text" value="2">2</span>
            			</li>
            			<li class="option">
                			<span class="option-text">3</span>
            			</li>
            			<li class="option">
                			<span class="option-text">4</span>
            			</li>
            			<li class="option">
                			<span class="option-text">5</span>
            			</li>
            			<li class="option">
                			<span class="option-text">6</span>
            			</li>
            			<li class="option">
                			<span class="option-text" value="more">Mais de 6 unidades</span>
            			</li>
        			</ul>
        			    <input type="number" class="quantity-input form-control qtdProduto" style="display: none;" placeholder="Digite a quantidade">
    			</div>
                <button class="btn btn-danger">Esgotado</button>
                <button class="btn btn-primary">Compre Já</button>
                <p class="descricaoProduto"><!--(descricao do produto - table produto) -->Computador de mesa, apenas um teste</p>
                <a class="compartilharLinkProduto"> <i class="fa-solid fa-share"></i> Compartilhar </a>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p class="text-center maisProdutos"> Mais produtos semelhantes </p>
			</div>
		</div>
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
            	</div>
        	</div>
    	</section>
	</div>
<?php include "../includes/footer.php"; ?>