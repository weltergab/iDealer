<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<title>Edição de Corretoras</title>
	<script defer src="fontawesome/js/all.js"></script>
</head>
<body>

<?php
include("func_crud.php");

if(isset($_GET["id"]) == true){
	$corretora_cod = $_GET["id"];
	$corret = pegar_corret($corretora_cod);

	echo "<div class='home-txt'>";
	echo "<h1>Edição de Corretora</h1>";
	echo "<form method='get' action='editar_corretora_parte2.php'>";
	echo "<label for='id'>Código:</label><br>";
	echo "<input id='id' name='id' type='text' value=". $corret->cod ." readonly><br>";
	echo "<label for='nome'>Nome:</label><br>";
	echo "<input id='nome' name='nome' type='text' value=". $corret->nome ."><br>";
	echo "<label for='cnpj'>CNPJ:</label><br>";
	echo "<input id='cnpj' name='cnpj' type='text' value=". $corret->cnpj ."><br><br>";
	echo "<input type='submit' value='Editar' class='button'>";
	echo "</form>";
	echo "</div>";
}else{
	echo "Houve algum erro!!! Você deve informar o ID da categoria.";
}

?>

</body>
</html>