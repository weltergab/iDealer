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
                        <div class="formBoxFora3">
                            <?php

                            include("func_crud.php");

                            if (isset($_GET["id"]) == true) {
                                $investimento_id = $_GET["id"];
                                $inv = pegar_inv($investimento_id);

                                echo "<h1>Código: " . $inv->cod . "</h1>";
                                echo "<h2>Corretora: " . $inv->cod_corretora . "</h2>";
                                echo "<h2>Nome: " . $inv->nome . "</h2>";
                                echo "<h2>Preço: " . $inv->preco . "</h2>";
                                echo "<h2>Quantidade: " . $inv->qtd . "</h2>";
                                echo "<h2>Data: " . $inv->data . "</h2>";
                                
                                echo "<br><a class='link1' href='editar_investimento_parte1.php?id=" . $inv->cod . "'>Editar</a> ";
                                echo "<a class='link2' href='excluir_investimento_parte1.php?id=" . $inv->cod . "'>Excluir</a> ";
                                echo "<a class='link2' href='index.php'>Voltar</a> ";
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