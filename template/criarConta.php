<!DOCTYPE html>
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
	<div class="container contents">
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
	</div>
</body>
<script src="../js/bootstrap.min.js"></script>
</html>