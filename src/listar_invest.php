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
                <h1>Lista de transações</h1>

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

                        include("func_crud.php");
                        session_start();
                        require('conexao_banco.php');
                        $con = $conexao;

                        if ($con->connect_error) {
                            die("Falha na conexão: " . $con->connect_error);
                        }
                        $query = "SELECT * FROM user WHERE id = '$_SESSION[user]'";
                        $result = $con->query($query);
                        $row = mysqli_fetch_array($result);
                        $arrayInvest = listar_invest();
                        echo 'Email linkado com os seguintes investimentos: ' . $row['email'];
                        echo '<br><br>';
                        foreach ($arrayInvest as $inv) {

                            echo "<tr>";
                            echo "<td>" . $inv->cod_corretora . "</td>";
                            echo "<td>" . $inv->nome . "</td>";
                            echo "<td>" . $inv->preco . "</td>";
                            echo "<td>" . $inv->qtd . "</td>";
                            echo "<td>" . $inv->data . "</td>";

                            echo "<td>";
                            echo "<a href='exibir_investimento.php?id=" . $inv->cod . "'>";
                            echo "<span class='fa-stack fa-sm' style='color:white'><i class='fas fa-search'></i></span>";
                            echo "</a>";
                            echo "<a href='editar_investimento_parte1.php?id=" . $inv->cod . "'>";
                            echo "<span class='fa-stack fa-sm' style='color:white'><i class='fas fa-edit'></i></span>";
                            echo "</a>";
                            echo "<a href='excluir_investimento_parte1.php?id=" . $inv->cod . "'>";
                            echo "<span class='fa-stack fa-sm' style='color:white'><i class='fas fa-trash'></i></span>";
                            echo "</a>";
                            echo "</td>";
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

</body>
<?php
if (isset($_SESSION['user']) ==  False) {
    header('Location: form.php');
}
?>

</html>