<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/login.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/estiloSite.css" rel="stylesheet" />
    <title>InovaByte Site</title>
</head>
<body>
    <div class="container contents">
        <div class="row">
            <div class="col-md-6 ">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="mb-4">
                            <h2>Sign in <strong>InovaByte</strong></h2>
                           <!-- <p class="mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Cupiditate labore quia impedit cumque non molestiae nam consectetur.</p> -->
                        </div>
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="email" class="form-control" id="username" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" placeholder="Senha">
                            </div>
                            <div class="form-group ">
                                <label class="control caption control-checkbox ">Lembre-me
                                <input type="checkbox" class="form-check-input lmCheck"> </label>
                                <a href="esqueceuSenha.php" id="esqueceuSenha">Esqueceu a Senha</a>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-button btn-primary">Login</button>
                                <button class="btn btn-button btn-primary">Criar conta</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 order-md-2">
                <img src="img/undraw_file_sync_ot38.png" class="img-fluid img-thumbnail img-lg">
            </div>
        </div>
    </div>
</body>
<script src="js/bootstrap.min.js"></script>

</html>