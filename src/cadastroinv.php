<?php
include("conexao_banco.php");
$select = "SELECT * FROM corretora";
$result = mysqli_query($conexao, $select) or die(mysqli_error());
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1> CADASTRAR INVESTIMENTO</h1>
    <form method="GET" action="processa2.php">
        <div class="col-md-3">
            <label style="margin-left: 580px;">Corretora: </label> <br> <br>

            <select class="ls-select" name="cod_corretora" style="width: 70%; border-radius: 10px; margin-left: 500px">
                <?php while ($dado = mysqli_fetch_array($result)) {
                    echo "<option style='background-color: yellow;' value='" . $dado['cod'] . "'>" . $dado['nome'] . "</option>";
                } ?>
            </select>
        </div>
        <br>
        <div class="form-group col-md-3">
            <label>Nome: </label> <br> <br>
            <input type="text" class="form-control" name="nome" placeholder="Digite o nome">
        </div>
        <br>
        <div class="form-group col-md-3">
            <label>Preço: </label> <br> <br>
            <input type="text" class="form-control" name="preco" placeholder="Digite o título">
        </div>
        <br>
        <div class="form-group col-md-3">
            <label>Quantidade: </label> <br> <br>
            <input type="text" class="form-control" name="qtd" placeholder="Digite o título">
        </div>
        <br>
        <div class="form-group col-md-3">
            <label>Data da compra: </label> <br> <br>
            <input type="datetime-local" class="form-control vem" name="data">
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Cadastrar">
    </form>
</body>

</html>