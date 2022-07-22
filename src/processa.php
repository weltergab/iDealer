<?php

    include("func_crud.php");

    if(isset($_GET["name"]) == true && isset($_GET["cnpj"]) == true){
        $name = $_GET["name"];
        $cnpj = $_GET["cnpj"];
        cadastrar_corretora($name, $cnpj);
    }else{
        echo "Houve um erro.";
    }
?>