<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<title>Edição de Corretoras</title>
	<script defer src="fontawesome/js/all.js"></script>
	<link href="../dist/output.css" rel="stylesheet">
</head>

<body>
	<div class="divGeral1">
		<div class="divGeral2">
		<h1>Edição de Investimento</h1>
			<div class="formBoxFora2">
				<?php
				include("func_crud.php");

				if (isset($_GET["id"]) == true) {
					$investimento_id = $_GET["id"];
					$inv = pegar_inv($investimento_id);

					echo "<div class='home-txt'>";
					echo "<form class='formStyle1' method='get' action='editar_investimento_parte2.php'>";
					echo "<label for='id'>Código:</label>";
					echo "<input id='id' name='id' type='text' value=" . $inv->cod . " readonly>";
					echo "<label for='cod'>Código Corretora:</label>";
					echo "<input id='cod' name='cod' type='text' value=" . $inv->cod_corretora . ">";
					echo "<label for='nome'>Nome:</label>";
					echo "<input id='nome' name='nome' type='text' value=" . $inv->nome . ">";
					echo "<label for='preco'>Preço:</label>";
					echo "<input id='preco' name='preco' type='text' value=" . $inv->preco . ">";
					echo "<label for='qtd'>Quantidade: </label>";
					echo "<input id='qtd' name='qtd' type='text' value=" . $inv->qtd . ">";
					echo "<label for='data'>Data: </label>";
					echo "<input id='data' type='datetime-local' name='data' value=" . $inv->data . ">";
					echo "<label for='preco'>Preço hoje:</label>";
					echo "<input id='preco_hj' name='preco_hj' type='text' value=" . $inv->preco_hj . ">";
					echo "<br><input type='submit' value='Editar' class='link1'>";
					echo "<a class='link2' href='listar_invest.php'>Voltar</a>";
					echo "</form>";
					echo "</div>";
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