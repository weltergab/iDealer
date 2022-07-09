<?php

    include("categoria_bd.php");

    if(isset($_GET["name"]) == true && isset($_GET["cnpj"]) == true){
        $name = $_GET["name"];
        $cnpj = $_GET["cnpj"];
        cadastrar_categoria($name, $cnpj);
    }else{
        echo "Houve um erro.";
    }
?>