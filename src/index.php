<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="../dist/output.css" rel="stylesheet">
</head>

<body>

    <div class="divGeral1">
        <div class="divGeral2">
            <div>
                <br>

                <!-- <br>
                <a class="link1" href="cadastrocorret.php">Cadastrar uma corretora</a>
                <br> -->

                <a class="link1" href="cadastroinv.php">Cadastrar um investimento</a>
                <br>

                <!-- <a class="link2" href="listar_corret.php">Relatório de corretoras</a>
                <br> -->

                <a class="link2" href="listar_invest.php">Relatório de transações</a>
                <br>

                <a class="link2" href="capital.php">Relatório de capital investido</a>
                <br>
                <a class="link2" href="sair.php">Sair</a>

            </div>
            <h1>Controle de Investimentos</h1>
        </div>

    </div>

    <?php
    session_start();
    if (isset($_SESSION['user']) ==  False) {
        header('Location: form.php');
    } else {
        if (isset($_SESSION['tipo'])) {
            header('Location: index_adm.php');
        }
    }
    ?>
</body>

</html>