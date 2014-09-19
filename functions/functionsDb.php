<?php

function conectarDb()
{
    $dsn    = 'mysql:host=localhost;dbname=curso_code_education';
    $user   = 'root';
    $pass   = '';
    $options= [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8' ];

    try {
        $pdo = new PDO($dsn, $user, $pass, $options);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Error: Código: {$e->getCode()} | Mensagem: {$e->getMessage()} |  Arquivo: {$e->getFile()} | linha: {$e->getLine()}");
    }

    return $pdo;
}



function listarPages($tabela, $pages)
{
    $pdo = conectarDb();
    
    try {
        $listarPeloId = $pdo->prepare("select * from {$tabela} where pages = :pages");
        $listarPeloId->bindValue(":pages", $pages);
        $listarPeloId->execute();
        $dados = $listarPeloId->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo $exc->getTraceAsString();
        die("Error: Código: {$e->getCode()} | Mensagem: {$e->getMessage()} |  Arquivo: {$e->getFile()} | linha: {$e->getLine()}");
    }
    return $dados ;
}