<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1 class=""> CADASTRAR CORRETORA</h1>
    <br>
    <form method="GET" action="processa.php">
      <br>
        <div class="form-group col-md-3">
            <label>Nome: </label> <br> <br>
            <input type="text" class="form-control" name="name" placeholder="Digite o nome da corretora">
        </div>
        <br>
        <div class="form-group col-md-3">
            <label>CNPJ: </label> <br> <br>
            <input type="text" class="form-control" name="cnpj" placeholder="Digite o CNPJ da corretora">
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Cadastrar">
      </form>   
</body>
</html>