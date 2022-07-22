<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="fontawesome/js/all.js"></script>
    <title>Document</title>
</head>
<body>
    
    <?php

        include("func_crud.php");

        if(isset($_GET["id"]) == true){
            $corretora_cod = $_GET["id"];
            $corret = pegar_corret($corretora_cod);

            echo "<h1>Corretora Código: " . $corret->cod . "</h1>";
            echo "<h2>Corretora Nome: " . $corret->nome . "</h2>";
            echo "<h2>Corretora CNPJ: " . $corret->cnpj . "</h2>";
            echo "<p>";
            echo "<a href='editar_categoria.php?id=". $corret->cod ."'>Editar</a> ";
            echo "<a href='excluir_categoria.php?id=". $corret->cod ."'>Excluir</a> ";
            echo "<p>";
        }else{
            echo "Houve um erro!!! Você deve informar o ID da categoria.";
        }
    
    ?>

</body>
</html>