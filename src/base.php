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
                <h1>Investimentos da base de clientes</h1>

                <br>
                <table border="1">
                    <thead>
                        <tr>
                            <th>Corretora</th>
                            <th>Ticker</th>
                            <th>Preço</th>
                            <th>Quantidade</th>
                            <th>Data</th>
                            <th>Cliente</th>
                            <th>Total</th>
                            <th>Total atual</th>
                            <th>Rentabilidade</th>
                        </tr>
                    </thead>


                    <tbody>

                        <?php

                        include("func_crud.php");

                        $arrayInvest = listar_tudo();

                        foreach ($arrayInvest as $inv) {
                            $tot = 0;
                            $soma = $inv->qtd * $inv->preco;
                            $tot = $tot + $soma;
                            $rentab = (($inv->preco_hj * 100) / $soma) - 100;

                            echo "<tr>";
                            echo "<td>" . $inv->cod_corretora . "</td>";
                            echo "<td>" . $inv->nome . "</td>";
                            echo "<td>" . $inv->preco . "</td>";
                            echo "<td>" . $inv->qtd . "</td>";
                            echo "<td>" . $inv->data . "</td>";
                            echo "<td>" . $inv->usuario . "</td>";
                            echo "<td>" . "R$ " . $soma . "</td>";
                            echo "<td>" . "R$ " . $inv->preco_hj . "</td>";
                            echo "<td>" . number_format($rentab, $dec = 2) . " %" . "</td>";
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

</html>