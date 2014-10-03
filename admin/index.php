<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
date_default_timezone_set('America/Sao_Paulo');
session_start();
require_once ('painel/functions/functionsDb.php');

?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Projeto de estudo 4 - Fundamentos de php.</title>

    <!-- Bootstrap core CSS -->
    <link href="admin/painel/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="admin/painel/css/jumbotron-narrow.css" rel="stylesheet">




</head>

<body>

<div class="container">
    <div class="header">
        <ul class="nav nav-pills pull-right">
            <li class="active"><a href="../">Home</a></li>
                    </ul>
        <h3 class="text-muted">Projeto 4 PHP</h3>
    </div>

    <div class="contaner">
        <?php
        if (isset($_POST['logar'])) {
            $login = $_POST['login'];
            $senha = $_POST['senha'];


            if(!$login || !$senha){
                echo '<div class="alert alert-danger">Todos os campos devem ser preenchidos!</div>';
            }else{
                $verificSenha = password_verify($senha, password());
                if(($verificSenha == true) && logarsistema($login)){
                   $_SESSION['loginUser'] = $login;
                    header('Location: admin/painel/index.php');

                }else{
                    echo '<div class="alert alert-danger">Usuário ou senha inválida!</div>';
                }
            }
        }
        ?>

        <form method="post" role="form">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>

                <input type="text" name="login" class="form-control" id="exampleInputEmail1" placeholder="Informe o seu nome">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Sua senha">
            </div>


            <button type="submit" name="logar" class="btn btn-default">Submit</button>
        </form>





    </div>


    <div class="footer">
        <p>&copy; Todos os direitos reservados <?php echo date('Y');?></p>
    </div>

</div> <!-- /container -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="admin/painel/bootstrap/js/bootstrap.min.js"></script>


</body>
</html>
