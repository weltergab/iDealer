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
	<div class="min-h-screen bg-blur bg-cover bg-no-repeat flex flex-col items-center">
		<div class="max-w-[1100px] w-full flex items-center justify-between mt-20 mx-auto">
			<div>
				<div class="divGeral1">
					<div class="divGeral2">
						<div>
							<?php

							include("func_crud.php");

							if (isset($_GET["id"]) == true) {
								$cliente_cod = $_GET["id"];
								$client = pegar_cliente($cliente_cod);

								echo "<h1>Exclusão de Cliente</h1><br>";
								echo "<h2>Você tem certeza que deseja excluir o cliente: " . $client->email . "?</h2>";
								echo "<p>";
								echo "<br><a class='link2' href='#' onclick='history.go(-1)'>Cancelar</a>";
								echo "<br><a class='link1' href='excluir_cliente_parte2.php?id=" . $client->id . "'>Excluir</a>";
								echo "</p>";
							} else {
								echo "Houve algum erro!!! Você deve informar o ID do cliente.";
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