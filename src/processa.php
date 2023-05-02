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
                <div class="divGeral1">
                    <div class="divGeral2">
                        <div>

                            <?php

                            include("func_crud.php");

                            if (isset($_POST["name"]) == true && isset($_POST["cnpj"]) == true) {
                                $name = $_POST["name"];
                                $cnpj = $_POST["cnpj"];
                                cadastrar_corretora($name, $cnpj);

                                echo "<br><br><a class='link2' href='index.php'>Início</a> ";
                                echo "<br><a class='link1' href='listar_corret.php'>Listar Corretoras</a> ";
                            } else {
                                echo "Houve um erro.";
                            }
                            ?>
                        </div>
                    </div>
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