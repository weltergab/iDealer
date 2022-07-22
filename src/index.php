<?php
//se a entrada do usuario (usuario e senha estiverem no banco de dados) ele e direcionado pra esta pagina
echo "Logado";
session_start();
if(isset($_POST['sair'])){ //verifica se o usuario clicou em Sair
    if(isset($_SESSION['login']) and  (isset($_SESSION['senha']))){  //verifica se a sessao existe
        unset($_SESSION['login']); //destroi a sessao usuario
        unset($_SESSION['senha']); //destroi a sessao senha
        header('Location:form.php'); //volta para o formulario de login
}
}

?>
<?php
//foi criado um botao sair para destruir a sessao de logado, uma vez que,
//quando o usuario e senha forem corretos e criada uma sessao pra nao precisar autenticar novamente
?>
<html>
     <body>
            <form  method="post">
            <table class="table">
             <tr>
            <td><input type="submit" name="sair" value='Sair'></td>
            </tr>

            </table>
            </form>
    </body>
    </html>

