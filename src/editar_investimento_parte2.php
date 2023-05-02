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
	<div class="min-h-screen bg-blur bg-cover bg-no-repeat flex flex-col items-center">
		<div class="max-w-[1100px] w-full flex items-center justify-between mt-20 mx-auto">
			<div>
				<div class="divGeral1">
					<div class="divGeral2">
						<div>
							<?php

							include("func_crud.php");

							if (isset($_GET["id"]) == true && isset($_GET["cod"]) == true && isset($_GET["nome"]) == true && isset($_GET["preco"]) == true && isset($_GET["qtd"]) == true && isset($_GET["data"]) == true && isset($_GET["preco_hj"]) == true) {
								$id = $_GET["id"];
								$cod = $_GET["cod"];
								$nome = $_GET["nome"];
								$preco = $_GET["preco"];
								$qtd = $_GET["qtd"];
								$data = $_GET["data"];
								$preco_hj = $_GET["preco_hj"];
								editar_inv($id, $cod, $nome, $preco, $qtd, $data, $preco_hj);

								echo "<br><br><a class='link2' href='listar_invest.php'>Listar Investimentos</a> ";
								echo "<br><a class='link2' href='capital.php'>Relatório capital</a> ";
							} else {
								echo "Houve algum erro!!! Você deve informar o título do todo.";
							}

							?>
						</div>
					</div>
				</div>
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