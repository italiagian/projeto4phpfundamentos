<?php

function busca()
{
    $pdo = conectarDb();

    $palavra = addslashes(trim($_POST['inputBusca']));

    try{
        $query = $pdo->prepare("SELECT * FROM pages WHERE conteudo_titulo LIKE :busca");
        $query->bindValue(":busca","%{$palavra}%");
        $query->execute();
    } catch (PDOException $e) {
        echo "Error: Código: {$e->getCode()} | Mensagem: {$e->getMessage()} |  Arquivo: {$e->getFile()} | linha: {$e->getLine()}";
    }
    if ($query->rowCount() >= 1) {

        echo '<h3>A palavra <strong>'.$palavra.'</strong> retornou: '.$query->rowCount().' resultados </h3>';
        $listar = $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach ($listar as $value):
            echo "<h4><a href=\"{$value["pages"]}\">".strip_tags($value["conteudo_titulo"])."</a></h4>";
        endforeach;
    } else {
        echo 'Nenhum resultado encontrado com a palavra <strong>'.$palavra.'</strong>';
    }
    return $query;
   
}
