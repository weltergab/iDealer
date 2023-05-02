<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="fontawesome/js/all.js"></script>
    <title>Document</title>

    <link href="../dist/output.css" rel="stylesheet">
</head>

<body>

    <div class="divGeral1">
        <div class="divGeral2">
            <div class="formBoxFora2">
                <?php

                include("func_crud.php");

                if (isset($_GET["id"]) == true) {
                    $corretora_cod = $_GET["id"];
                    $corret = pegar_corret($corretora_cod);

                    echo "<h1>Corretora Código: " . $corret->cod . "</h1>";
                    echo "<h2>Corretora Nome: " . $corret->nome . "</h2>";
                    echo "<h2>Corretora CNPJ: " . $corret->cnpj . "</h2>";
                    echo "<p>";
                    echo "<br><a class='link1' href='editar_corretora_parte1.php?id=" . $corret->cod . "'>Editar</a> ";
                    echo "<br><a class='link2' href='excluir_corretora_parte1.php?id=" . $corret->cod . "'>Excluir</a> ";
                    echo "<p>";
                } else {
                    echo "Houve um erro!!! Você deve informar o ID da categoria.";
                }

                ?>
            </div>
        </div>
    </div>

</body>

<?php
session_start();
if (isset($_SESSION['user']) ==  False) {
    header('Location: form.php');
}
?>

</html>