<?php

include("conexao_banco.php");

if(isset($_GET["cod_corretora"]) == true && isset($_GET["nome"]) == true && isset($_GET["preco"]) == true
&& isset($_GET["qtd"]) == true && isset($_GET["data"]) == true){
    $cod_corretora = $_GET["cod_corretora"];
    $nome = $_GET["nome"];
    $preco = $_GET["preco"];
    $qtd = $_GET["qtd"];
    $data = $_GET["data"];

$sql = "INSERT INTO investimento (
                            cod_corretora,
                            nome, 
                            preco, 
                            qtd, 
                            data
                                    ) 
                    VALUES (
                        '$cod_corretora', 
                        '$nome', 
                        '$preco', 
                        '$qtd', 
                        '$data'
                    )
        ";

if($conexao->query($sql)){
    echo "Investimento cadastrado com sucesso";
}else{
    echo "Houve um erro no insert.<br>";
}
}