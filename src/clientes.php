<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script defer src="fontawesome/js/all.js"></script>
    <!--load all styles -->

    <link href="../dist/output.css" rel="stylesheet">
</head>

<body>

    <div class="divGeral1">
        <div class="divGeral2">
            <div class="formBoxFora2">
                <h1>Relatório de Clientes</h1>

                <br>
                <div>



                    <table border="1" class="center mt-5">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Email</th>
                                <th>Senha</th>
                                <th>Ações</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php

                            include("func_crud.php");

                            $arrayClientes = listar_clientes();

                            foreach ($arrayClientes as $client) {
                                echo "<tr>";
                                echo "<td>" . $client->id . "</td>";
                                echo "<td>" . $client->email . "</td>";
                                echo "<td>" . $client->senha . "</td>";
                                echo "<td>";
                                echo "<a href='excluir_cliente_parte1.php?id=" . $client->id . "'>";
                                echo "<span class='fa-stack fa-sm' style='color:white'><i class='fas fa-trash'></i></span>";
                                echo "</a>";
                                echo "</tr>";
                            }

                            ?>

                        </tbody>
                    </table>



                    <?php
                    echo "<br><a class='link2p' href='index.php'>Início</a>";
                    ?>
                </div>
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