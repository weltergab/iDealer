<html>
    <head>
      <title>Pagina de Login</title>
    </head>

    <body>
            <form  method="post">
            <table class="table">
                <tr>
                    <td>Email</td>
                    <td><input class="form-control" type="user" name="usuario"></td>
                </tr>
                <tr>
                    <td>Senha</td>
                    <td><input class="form-control" type="password" name="senha"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="logar" value='Login'></td>
                </tr>
                <tr>
                    <td><input type="submit" name="cadastrar" value='Cadastrar'></td>
                </tr>

            </table>
            </form>
    </body>
    </html>
    
    <?php
    //starta a sessao e verifica se ela ja existe (se o usuario ja esta logado),
    //caso estiver envia direto para a pagina index, sem a necessidade de entrar novamente com usuario e senha
    session_start();
    if(isset($_SESSION['login']) and (isset($_SESSION['senha']))){
        header('Location:index.php');
    }
     //verifica se o usuario clicou no botao Logar para pegar a entrada do usuario
    if(isset($_POST['logar'])){
        $usuario= $_POST['usuario']; //recebe entrada do usuario campo usuario
        $senha= $_POST['senha']; //recebe entrada do usuario campo senha
        //executa o arquivo con_bd.php. Onde e feita a conexao com o banco de dados
        //e a verificacao se o usuario e senha constam no BD
        include 'autenticacao_login.php' ;
    }
     //verifica se o cookie existe e se ele e True (cookie criado no arquivo con_bd pra verificar se nao existe o usuario ou senha),
     //caso for diz (usuario ou senha nao existe) mostra a mensagem abaixo
     if(isset($_COOKIE['status_login'])){
        if($_COOKIE['status_login']=='true'){
        echo 'Usuario ou senha invalidos';
        setcookie('status_login', 'false'); //e seta com Cookie como falso
     }
}


