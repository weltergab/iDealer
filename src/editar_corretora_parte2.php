<?php

include("func_crud.php");

if(isset($_GET["id"]) == true && isset($_GET["nome"]) == true && isset($_GET["cnpj"]) == true){
	$id = $_GET["id"];
	$nome = $_GET["nome"];
	$cnpj = $_GET["cnpj"];
	editar_corretora($id, $nome, $cnpj);

	echo "<br><a href='listar_corret.php'>Listar Corretoras</a> ";
}else{
	echo "Houve algum erro!!! Você deve informar o título da categoria.";
}

?>