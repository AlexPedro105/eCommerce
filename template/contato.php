<?php include "../includes/header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Entrar em contato</h1>
        </div>
    </div>
    <form class="formContato">
        <div class="row">
            <div class="col-md-6">
                <input class="form-control" type="text" placeholder="Nome">
            </div>
            <div class="col-md-6">
                <input class="form-control" type="email" placeholder="Email">
            </div>
        </div>
        <div class="row comentarioContato">
            <div class="col-md-12 form-floating">
                <textarea class="form-control" name="text" placeholder="Cometário"></textarea>
            </div>
        </div>
        <div class="row btnContato">
            <div class="col-md-12">
                <button class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>
</div>
<?php include "../includes/footer.php"; ?>