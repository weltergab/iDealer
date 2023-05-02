<html>

<head>
    <title>Pagina de Login</title>
    <link href="../dist/output.css" rel="stylesheet">
</head>

<body>
    <div class="divGeral1">
        <div>
            <br><br>
            <h1 class="font-bold">Autenticação</h1>
            <br>
        </div>

        <div class="formBoxFora1">
            <form method="post" class="formStyle1">
                <h2 class="">Usuário </h2>
                <input placeholder="Email" class=" inp1" type="user" name="usuario">
                <h2 class="">Senha </h2>
                <input placeholder="Senha" class=" inp1" type="password" name="senha">
                <br>
                <input class="link1" type="submit" name="logar" value='Login'>
                <button><a class="link2" href="cadastro.php"> Cadastre-se </a></button>
            </form>


            <?php
            session_start();
            if (isset($_SESSION['user'])) {
                header('Location: index.php');
            } else {
                if (isset($_POST['logar'])) {
                    $con = mysqli_connect("localhost", "root", "", "investimentos");

                    if (!$con) {
                        echo "Error: " . mysqli_connect_errno();
                    }

                    $query = "SELECT * FROM user";

                    $result = $con->query($query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($_POST['usuario'] == $row['email'] && $_POST['senha'] == $row['senha']) {
                            if ($row['tipo'] == "adm") {
                                $_SESSION['user'] = $row['id'];
                                $_SESSION['tipo'] = $row['tipo'];
                                header('Location: index_adm.php');
                            } else {
                                $_SESSION['user'] = $row['id']; /********************/
                                header('Location: index.php');
                            }
                        }
                    }
                    echo "Usuário ou senha inválidos";
                }
            }

            ?>
        </div>
    </div>
</body>

</html>