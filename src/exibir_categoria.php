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

        include("categoria_bd.php");

        if(isset($_GET["id"]) == true){
            $categoria_id = $_GET["id"];
            $cat = pegar_categoria($categoria_id);

            echo "<h1>Categoria ID: " . $cat->category_id . "</h1>";
            echo "<h2>Categoria Nome: " . $cat->name . "</h2>";
            echo "<p>";
            echo "<a href='editar_categoria.php?id=". $cat->category_id ."'>Editar</a> ";
            echo "<a href='excluir_categoria.php?id=". $cat->category_id ."'>Excluir</a> ";
            echo "<p>";
        }else{
            echo "Houve um erro!!! Você deve informar o ID da categoria.";
        }
    
    ?>

</body>
</html>