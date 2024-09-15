<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/criarConta.css">
	<title>Criar conta</title>
</head>

<body>
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
						<input type="number" name="documento" placeholder="Digite seu Documento" required>
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
				<div class="codigo-inputs">
                    <div class="codigo-title">
                        <h6>Meio de recebimento de confirmação de conta</h6>
                    </div>
                    <div class="codigo-group">
                        <div class="codigo-input">
                            <input id="email" type="radio" name="codigo">
                            <label for="email">Email</label>
                        </div>
                        <div class="codigo-input">
                            <input id="sms" type="radio" name="codigo">
                            <label for="sms">SMS</label>
                        </div>
                    </div>
                </div>
				<div class="continue-button">
					<button><a href="confirmaCodigoCadastro.php">Continuar</a> </button>
				</div>
			</form>
		</div>
	</div>
</body>
<script src="../js/bootstrap.min.js"></script>
</html>

<!--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-->