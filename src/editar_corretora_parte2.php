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

							if (isset($_GET["id"]) == true && isset($_GET["nome"]) == true && isset($_GET["cnpj"]) == true) {
								$id = $_GET["id"];
								$nome = $_GET["nome"];
								$cnpj = $_GET["cnpj"];
								editar_corretora($id, $nome, $cnpj);

								echo "<br><br><a class='link2' href='listar_corret.php'>Listar Corretoras</a> ";
							} else {
								echo "Houve algum erro!!! Você deve informar o título da categoria.";
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