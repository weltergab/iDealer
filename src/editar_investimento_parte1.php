<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edição de Todo</title>
	<script defer src="fontawesome/js/all.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
include("func_crud.php");

if(isset($_GET["id"]) == true){
	$investimento_id = $_GET["id"];
	$inv = pegar_inv($investimento_id);

	echo "<div class='home-txt'>";
	echo "<h1>Edição de Investimento</h1>";
	echo "<form method='get' action='editar_investimento_parte2.php'>";
	echo "<label for='id'>Código:</label><br>";
	echo "<input id='id' name='id' type='text' value=". $inv->cod ." readonly><br>";
	echo "<label for='cod'>Código Corretora:</label><br>";
	echo "<input id='cod' name='cod' type='text' value=". $inv->cod_corretora ."><br>";
	echo "<label for='nome'>Nome:</label><br>";
	echo "<input id='nome' name='nome' type='text' value=". $inv->nome ."><br>";
	echo "<label for='preco'>Preço:</label><br>";
    echo "<input id='preco' name='preco' type='text' value=". $inv->preco ."><br>";
    echo "<label for='qtd'>Quantidade: </label><br>";
	echo "<input id='qtd' name='qtd' type='text' value=". $inv->qtd ."><br>";
    echo "<label for='data'>Data: </label><br>";
    echo "<input id='data' type='datetime-local' name='data' value=". $inv->data ."><br>";
	echo "<input type='submit' value='Editar' class='button'>";
	echo "</form>";
	echo "</div";
}else{
	echo "Houve algum erro!!! Você deve informar o ID da categoria.";
}

?>

</body>
</html>