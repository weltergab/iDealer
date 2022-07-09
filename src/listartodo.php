<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script defer src="fontawesome/js/all.js"></script> <!--load all styles -->
</head>
<body>
    
    <h1>Lista de investimentos</h1>

    <br>
    <table border="1">
        <thead>
            <tr>
                <th>Corretora</th>
                <th>Ticker</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Data</th>
                <th>Ações</th>
            </tr>
        </thead>
    

    <tbody>

    <?php

        include("categoria_bd.php");

        $arrayTodo = listar_todo();

        foreach($arrayTodo as $tod){
         
            echo "<tr>";
            echo "<td>". $tod->cod_corretora ."</td>";
            echo "<td>". $tod->nome ."</td>";
            echo "<td>". $tod->preco ."</td>";
            echo "<td>". $tod->qtd ."</td>";
            echo "<td>". $tod->data ."</td>";

            echo "<td>";
            echo "<a href='exibir_todo.php?id=". $tod->cod_corretora ."'>";
            echo "<span class='fa-stack fa-sm' style='color:black'><i class='fas fa-search'></i></span>";
            echo "</a>";
            echo "<a href='editar_todo.php?id=". $tod->cod_corretora ."'>";
            echo "<span class='fa-stack fa-sm' style='color:black'><i class='fas fa-edit'></i></span>";
            echo "</a>";
            echo "<a href='excluir_todo.php?id=". $tod->cod_corretora ."'>";
            echo "<span class='fa-stack fa-sm' style='color:black'><i class='fas fa-trash'></i></span>";
            echo "</a>";
            echo "</td>";
            echo "</tr>";
          
        }

    ?>

    </tbody>
    </table>

</body>
</html>