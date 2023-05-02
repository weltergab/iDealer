<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <title>Document</title>
    <link href="../dist/output.css" rel="stylesheet">
</head>

<body>



    <div class="divGeral1">

        <div class="divGeral2">
            <h1 class=""> CADASTRAR CORRETORA</h1>
            <div class="formBoxFora2">


                <form class="formStyle1" method="post" action="processa.php">

                    <div class="form-group col-md-3">
                        <p>Nome</p>
                        <input type="text" class="inp1" name="name" placeholder="Nome da corretora">
                    </div>
                    
                    <div class="form-group col-md-3">
                        <p>CNPJ da corretora</p>
                        <input type="text" class="inp1" name="cnpj" placeholder="CNPJ da corretora">
                    </div>
                    <br>
                    <input type="submit" class="link1" value="Cadastrar">
                </form>
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