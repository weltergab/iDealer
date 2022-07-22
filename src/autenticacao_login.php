<?php
//este arquivo faz a conexao com o banco de dados Usuarios que foi criado no Workbench

  //funcao que conecta com o banco de dados
  $con= mysqli_connect('localhost','root', '','dados_usuarios');
  //teste se a conexao nao acontecer (por algum erro, senha, usuario ou servidor)
  if(!$con){
    echo "Erro ao conectar no banco".mysqli_connect_errno();
  }else{
    //comando SQL que seleciona no banco de dados apenas o user e passaword que corresponderao usuario e senha que foram digitados pelo usuario
    $query= "Select user, password from login where user='$usuario' and password='$senha'";
    //funcao que realiza a consulta no banco de dados - recebe a conexao e a consulta
    $result_query= mysqli_query($con, $query);
    //a funcao acima retorna um recurso, sendo entao necessario usar uma funcao (fetch_assoc ou fetch_array) para pegar o valor retornado
    $result= mysqli_fetch_assoc($result_query);

   //teste se o resulta da consulta retornou valor
  if($result>0){

    //se o usuario e senha digitados pelo usuario constarem no banco (result>0) entao entra no index.php
    header('Location: index.php');
    //usamos sessao para poder verificar se o usuario ja esta logado
    //sempre que usar sessao e necessario startar
    session_start();
    $_SESSION['login']=$usuario;//armazena o usuario na sessao login
    $_SESSION['senha'] =$senha;//armazena a senha na sessao senha
  }elseif($result==0){ //se o usuario e senha nao estivem no banco
    //criamos um cookie pra voltar a tela formulario e dizer que o usuario ou login sao invalidos
    setcookie('status_login', 'true'); //cookie com status true de invalido
    header('Location: form.php');//leva o usuario para a pagina de login novamente
    }
  }
 mysqli_close($con);//fecha a conexao com o banco de dados
 
    
    
