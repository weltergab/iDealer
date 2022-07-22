<?php

include("func_crud.php");

if(isset($_GET["id"]) == true && isset($_GET["cod"]) == true && isset($_GET["nome"]) == true && isset($_GET["preco"]) == true && isset($_GET["qtd"]) == true && isset($_GET["data"]) == true){
	$id = $_GET["id"];
	$cod = $_GET["cod"];
	$nome = $_GET["nome"];
	$preco = $_GET["preco"];
	$qtd = $_GET["qtd"];
	$data = $_GET["data"];
	editar_inv($id, $cod, $nome, $preco, $qtd, $data);

	echo "<br><a href='listar_invest.php'>Listar Investimentos</a> ";
}else{
	echo "Houve algum erro!!! Você deve informar o título do todo.";
}

?>