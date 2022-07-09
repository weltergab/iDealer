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
            $tod = pegar_todo($categoria_id);

            echo "<h1>Todo ID: " . $tod->category_id . "</h1>";
            echo "<h2>Título: " . $tod->title . "</h2>";
            echo "<h2>Mensagem: " . $tod->message . "</h2>";
            echo "<h2>Due date: " . $tod->due_date . "</h2>";
            echo "<h2>Completa: " . $tod->completed . "</h2>";
            echo "<p>";
            echo "<a href='editar_todo.php?id=". $tod->category_id ."'>Editar</a> ";
            echo "<a href='excluir_todo.php?id=". $tod->category_id ."'>Excluir</a> ";
            echo "<p>";
        }else{
            echo "Houve um erro!!! Você deve informar o ID da categoria.";
        }
    
    ?>

</body>
</html>