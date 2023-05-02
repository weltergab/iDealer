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
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <title>Document</title>
    <link href="../dist/output.css" rel="stylesheet">
</head>

<body>
    <div class="divGeral1">
        <div class="divGeral2">
        <h1> CADASTRAR INVESTIMENTO</h1>
            <div class="formBoxFora2">
                <form class="formStyle1" method="post" action="processa2.php">
                    <div class="flex">
                        <label>Corretora----</label>
                        
                        <select class="ls-select" name="cod_corretora" style="color:black; border-radius: 10px;">
                        
                            <?php while ($dado = mysqli_fetch_array($result)) {
                                echo "<option style='background-color: white;' value='" . $dado['cod'] . "'>" . $dado['nome'] . "</option>";
                            } ?>
                        </select>
                    </div>
                    <br>
                    <div class="form-group col-md-3">
                        <p>Nome</p>
                        <input type="text" class="inp1" name="nome" placeholder="Digite o nome">
                    </div>
                    
                    <div class="form-group col-md-3">
                        <p>Preço</p>
                        <input type="text" class="inp1" name="preco" placeholder="Digite o preço">
                    </div>
                    
                    <div class="form-group col-md-3">
                        <p>Quantidade</p>
                        <input type="text" class="inp1" name="qtd" placeholder="Digite a quantidade">
                    </div>
                    <br>
                    <div class="form-group col-md-3">
                        <label>Data da compra: </label> <br> <br>
                        <input type="datetime-local" class="vem" style='color:white' name="data">
                    </div>

                    <div class="form-group col-md-3">
                        <p>Total</p>
                        <input type="text" class="inp1" name="preco_hj" placeholder="Digite o valor total">
                    </div>
                    <br>
                    <input type="submit" class="link1" value="Cadastrar">
                    <a class='link2' href='index.php'>Voltar</a>
                </form>
            </div>
            
        </div>
    </div>
</body>
<?php
        session_start();
        if(isset($_SESSION['user']) ==  False){
            header('Location: form.php');
        }
    ?>

</html>