<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link href="../dist/output.css" rel="stylesheet">
</head>

<body>

	<div class="divGeral1">
		<div class="divGeral2">
			<div>
				<?php

				include("func_crud.php");

				if (isset($_GET["id"]) == true) {
					$corretora_cod = $_GET["id"];
					$corret = pegar_corret($corretora_cod);

					echo "<h1>Exclusão de Corretora</h1><br>";
					echo "<h2>Você tem certeza que deseja excluir a corretora: " . $corret->nome . "?</h2>";
					echo "<p>";
					echo "<br><a class='link2' href='#' onclick='history.go(-1)'>Cancelar</a>";
					echo "<br><a class='link1' href='excluir_corretora_parte2.php?id=" . $corret->cod . "'>Excluir</a>";
					echo "</p>";
				} else {
					echo "Houve algum erro!!! Você deve informar o ID da categoria.";
				}

				?>
			</div>
		</div>
	</div>

</body>

<?php
session_start();
if (isset($_SESSION['user']) ==  False) {
	header('Location: form.php');
}
?>

</html>