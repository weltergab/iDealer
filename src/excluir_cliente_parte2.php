<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Exclusão de Investimentos</title>
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

							if (isset($_GET["id"]) == true) {
								$cliente_cod = $_GET["id"];
								$client = excluir_cliente($cliente_cod);

								echo "<br><br><a href='clientes.php' class='link2'>Clientes</a> ";
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