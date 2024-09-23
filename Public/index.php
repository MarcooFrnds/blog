<?php
include "./../App/Libraries/Rota.php";
include "./../App/Libraries/Controller.php";
include "./../App/configucaao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=APP_NOME?></title>
</head>
<body>
    <link rel="stylesheet" type="text/css" href="<?=URL?>/
    public/css/estilo.css"/>
    <link rel="stylesheet" type="text/css" href="<?=URL?>/
    public/bootstrap/bootstrap.css"/>
    

    <?php

    $rotas = new Rota();
    //$rotas->url();

    ?>
</body>
</html>