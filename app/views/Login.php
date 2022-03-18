<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Sistema de pedido</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale= 1">
    <link rel="stylesheet" href="<?php echo URL_BASE?>assets/css/auxiliar.css">
    <link rel="stylesheet" href="<?php echo URL_BASE?>assets/css/grade.css">
    <link rel="stylesheet" href="<?php echo URL_BASE?>assets/css/style.css">

    <script src="<?php echo URL_BASE?>assets/js/jquery.min.js"></script>
    <script src="<?php echo URL_BASE?>assets/js/js.js"></script>
    <script src="https://kit.fontawesome.com/9480317a2f.js"></script>

</head>

<body class="login">
    <div class="col-4 m-auto">
        <div class="base-login">
            <h2>PEDIDO LOGIN</h2>
            <?php $this->verErro()?>
            <?php $this->verMsg()?>
            <form action="<?php echo URL_BASE."login/logar"?>" method="post">
                <label>Email</label>
                <input type="text" placeholder="Digite seu email" name="email">

                <label>Senha</label>
                <input type="password" placeholder="Digite sua senha" name="senha">

                <input type="submit" value="Entrar"  class="btn mt-2 width-100">

            </form>

            <a href="" class="senha link-roxo mt-4 d-block"><small>Esqueci minha senha</small></a>

        </div>

        <div class="mostraCampo base-login">
            <div class="bg-login-2 radius-4">

                <span class="senha fechar"><i class="fas fa-window-close"></i></span>

                <h2>Esqueci minha senha</h2>
                <small>Digite seu email abaixo para recuperar sua senha</small>
                <form action="" method="">
                    <label>Email</label>
                    <input type="text" placeholder="Digite seu email" class="mb-2">

                    <input type="submit" value="Enviar email" name="" class="btn btn-azul m-auto width-100">

                </form>
            </div>
        </div>

    </div>
</body>

</html>