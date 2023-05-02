<html>

<head>
    <title>Pagina de Cadastro</title>
    <link href="../dist/output.css" rel="stylesheet">
</head>

<body>
    <div class="divGeral1">
        <div>
            <br><br>
            <h1 class="font-bold">Cadastro</h1>
            <br>
        </div>

        <div class="formBoxFora1">
            <form method="post" class="formStyle1">
                <h2>Usuário</h2>
                <input placeholder="Usuario" class="form-control" type="user" name="usuario">
                <h2>Senha</h2>
                <input placeholder="Senha" class="form-control" type="password" name="senha">
                <br>
                <input class="link1" type="submit" name="salvar" value='Cadastrar'>
            </form>
        </div>
    </div>

</body>

</html>

<?php
session_start();
if (isset($_SESSION['user'])) {
    header('Location: index.php');
} else {
    if (isset($_POST['salvar'])) {
        $con = mysqli_connect("localhost", "root", "", "investimentos");

        if (!$con) {
            echo "Error: " . mysqli_connect_errno();
        }

        $query = "SELECT * FROM user";
        $result = $con->query($query);
        $flag = false;
        while ($row = mysqli_fetch_assoc($result)) {
            if ($_POST['usuario'] == $row['email']) {
                $flag = true;
            }
        }

        if ($flag == true) {
            echo "Email já cadastrado";
        } else {
            $query = "INSERT INTO user (email, senha, tipo) VALUES ('$_POST[usuario]','$_POST[senha]','normal')";

            if ($con->query($query)) {
                echo "Cadastro realizado";
                header('Location: form.php');
            } else {
                echo "Erro: " . mysqli_connect_errno();
            }
        }
    }
}
?>