<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
date_default_timezone_set('America/Sao_Paulo');
require_once('functions/functionBusca.php');
require_once('functions/functionsDb.php');
require_once('functions/functionRouteUrl.php');

?>
<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Site Simples em PHP </title>
    

   <!-- Custom styles for this template -->
   <link href="css/starter-template.css" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>