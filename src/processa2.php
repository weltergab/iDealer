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
    <div class="min-h-screen bg-blur bg-cover bg-no-repeat flex flex-col items-center">
        <div class="max-w-[1100px] w-full flex items-center justify-between mt-20 mx-auto">
            <div>

                <?php

                include("conexao_banco.php");
                session_start();
                if (
                    isset($_POST["cod_corretora"]) == true && isset($_POST["nome"]) == true && isset($_POST["preco"]) == true
                    && isset($_POST["qtd"]) == true && isset($_POST["data"]) == true && isset($_POST['preco_hj']) == true
                ) {
                    $cod_corretora = $_POST["cod_corretora"];
                    $nome = $_POST["nome"];
                    $preco = $_POST["preco"];
                    $qtd = $_POST["qtd"];
                    $data = $_POST["data"];
                    $preco_hj = $_POST['preco_hj'];

                    $sql = "INSERT INTO investimento (
                            cod_corretora,
                            nome, 
                            preco, 
                            qtd, 
                            data,
                            usuario,
                            preco_hj
                                    ) 
                    VALUES (
                        '$cod_corretora', 
                        '$nome', 
                        '$preco', 
                        '$qtd', 
                        '$data',
                        '$_SESSION[user]',
                        '$preco_hj'
                    )
        ";


                    if ($conexao->query($sql)) {
                        header('Location: inv_sucesso.php');
                    } else {
                        echo "Erro desconhecido<br>";
                        header('Location: index.php');
                    }

                    
                }
                ?>
            </div>
        </div>
    </div>
</body>
<?php
        if(isset($_SESSION['user']) ==  False){
            header('Location: form.php');
        }
    ?>