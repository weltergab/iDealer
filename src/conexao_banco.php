<?php
$conexao = mysqli_connect("localhost", "id20692468_gabriel", "_neF^#&qLT7{#pc>", "id20692468_investimentos");
 
if (!$conexao) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}