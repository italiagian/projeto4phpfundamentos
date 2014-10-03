<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
date_default_timezone_set('America/Sao_Paulo');
session_start();
require_once ('functions/functionsDb.php');
require_once ('functions/route.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Projeto de estudo 4 - Fundamentos de php.</title>

    <link href="css/jumbotron-narrow.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->




    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">
    <div class="header">
        <ul class="nav nav-pills pull-right">
            <li class="active"><a href="../../">SAIR DO PAINEL </a></li>
            <li class="active"><a href="home">HOME </a></li>

        </ul>
        <h3 class="text-muted">Projeto de estudo 4 - Fundamentos de php.</h3>
    </div>

    <div class="contaner">

       <p> <?php echo  "Seja bem vindo " . " - " .  $_SESSION['loginUser'];?></p>
                <div class="row">
                    <?php require_once(route());?>


                </div>
    </div>


    <div class="footer">
        <p>&copy; Todos os direitos reservados - <?php echo date('Y');?></p>
    </div>

</div> <!-- /container -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>

<script src="ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor1' );
</script>


</body>
</html>
