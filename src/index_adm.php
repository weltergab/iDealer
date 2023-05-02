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
                <a class="link1" href="cadastrocorret.php">Cadastrar uma corretora</a>
                <br>
                <a class="link2" href="listar_corret.php">Relatório de corretoras</a>
                <br>
                <a class="link2" href="clientes.php">Relatório de clientes</a>
                <br>
                <a class="link2" href="base.php">Total investido (base)</a>
                <br>
                <a class="link2" href="sair.php">Sair</a>
            </div>
            <h1 class="font-bold"> Controle de Investimentos</h1>
        </div>
    </div>


    <?php
    session_start();
    if (isset($_SESSION['user']) ==  False) {
        header('Location: form.php');
    }
    ?>
</body>

</html>