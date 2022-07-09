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
    
    <h1>Relatório de Corretoras</h1>

    <br>
    <table border="1" class="center">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>CNPJ</th>
                <th>Ações</th>
            </tr>
        </thead>
    

    <tbody>

    <?php

        include("categoria_bd.php");

        $arrayCategorias = listar_categoria();

        foreach($arrayCategorias as $cat){
            echo "<tr>";
            echo "<td>". $cat->cod ."</td>";
            echo "<td>". $cat->nome ."</td>";
            echo "<td>". $cat->cnpj ."</td>";

            echo "<td>";
            echo "<a href='exibir_categoria.php?id=". $cat->cod ."'>";
            echo "<span class='fa-stack fa-sm' style='color:black'><i class='fas fa-search'></i></span>";
            echo "</a>";
            echo "<a href='editar_categoria.php?id=". $cat->cod ."'>";
            echo "<span class='fa-stack fa-sm' style='color:black'><i class='fas fa-edit'></i></span>";
            echo "</a>";
            echo "<a href='excluir_categoria.php?id=". $cat->cod ."'>";
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