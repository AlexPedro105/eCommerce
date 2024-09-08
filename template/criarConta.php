<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/criarConta.css">
	<title>Criar conta</title>
</head>

<body>
	<!--<div class="container contents">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center">Criar Conta</h2>
			</div>
		</div>
		<form class="g-3 need-validation">
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<input class="form-control" type="text" name="nome" placeholder="Nome" required>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="sobrenome"  placeholder="Sobrenome" required>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<input class="form-control" type="email" name="email" placeholder="Email" required>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="telefone" placeholder="Telefone" required>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<input class="form-control" name="documento" type="number" placeholder="Documento" required>
					</div>
					<div class="col-md-6">
						<input class="form-control" type="text" name="estado" placeholder="Estado" required>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<input class="form-control" type="text" name="cidade" placeholder="Cidade" required>
					</div>
					<div class="col-md-3">
						<input class="form-control" type="text" name="rua" placeholder="Rua" required>
					</div>
					<div class="col-md-3">
						<input class="form-control" type="text" name="bairro" placeholder="Bairro" required>
					</div>
					<div class="col-md-3">
						<input class="form-control" type="number" name="numero" placeholder="Número" required>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<input class="form-control" type="text" name="complemento" placeholder="Complemento">
					</div>
					<div class="col-md-4">
						<input class="form-control" type="number" name="cep" placeholder="CEP" required>
					</div>
					<div class="col-md-4">
						<input class="form-control" type="password" name="password" placeholder="Senha" required>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 cdgVerification">
						<label class="form-label" for="receberEmail"> Deseja receber código via Email? </label>
						<input class="form-check-input" type="checkbox" name="receberEmail">
						<br>
						<label class="form-label" for="receberSMS"> Deseja receber código via SMS?</label>
						<input class="form-check-input" type="checkbox" name="receberSMS">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<button class="btn btn-primary btnCadastrar" type="submit"> Cadastrar </button>
					</div>
				</div>
			</div>
		</form>
	</div> -->

	<div class="container">
		<div class="form-image">
			<img src="../img/undraw_file_sync_ot38.png">
		</div>
		<div class="form">
			<form action="#">
				<div class="form-header">
					<div class="title">
						<h1>Cadastre-se</h1>
					</div>
					<div class="login-button">
						<button><a href="login.php">Login</a></button>
					</div>
				</div>
				<div class="input-group">
					<div class="input-box">
						<label for="firstname">Primeiro Nome</label>
						<input id="firstname" type="text" name="firstname" placeholder="Digite seu primeiro nome"
							required>
					</div>
					<div class="input-box">
						<label for="lastname">Sobrenome</label>
						<input id="lastname" type="text" name="lastname" placeholder="Digite seu sobrenome" required>
					</div>
					<div class="input-box">
						<label for="documento">Documento</label>
						<input type="number" name="documento" placeholder="Digite seu Documento CPF/CNPJ" required>
					</div>
					<div class="input-box">
						<label for="email">E-mail</label>
						<input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
					</div>
					<div class="input-box">
						<label for="number">Celular</label>
						<input id="number" type="tel" name="number" placeholder="(xx) xxxx-xxxx" required>
					</div>
					<div class="input-box">
						<label for="estado">Estado</label>
						<input type="text" name="estado" placeholder="Digite seu estado" required>
					</div>
					<div class="input-box">
						<label for="cidade">Cidade</label>
						<input type="text" name="cidade" placeholder="Digite sua Cidade" required>
					</div>
					<div class="input-box">
						<label for="rua">Rua</label>
						<input type="text" name="rua" placeholder="Digite sua Rua" required>
					</div>
					<div class="input-box">
						<label for="numero">Número</label>
						<input type="number" name="numero" placeholder="Digite seu Número" required>
					</div>
					<div class="input-box">
						<label for="complemento">Complemento</label>
						<input type="text" name="complemento" placeholder="Digite seu complemento">
					</div>
					<div class="input-box">
						<label for="password">Senha</label>
						<input id="password" type="password" name="password" placeholder="Digite sua senha" required>
					</div>
					<div class="input-box">
						<label for="confirmPassword">Confirme sua Senha</label>
						<input id="confirmPassword" type="password" name="confirmPassword"
							placeholder="Digite sua senha novamente" required>
					</div>
				</div>
				<div class="continue-button">
					<button><a href="#">Continuar</a> </button>
				</div>
			</form>
		</div>
	</div>
</body>
<script src="../js/bootstrap.min.js"></script>
</html>

<!--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-->