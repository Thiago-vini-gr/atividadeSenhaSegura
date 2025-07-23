<?php
$hostname = "localhost"; // Host do MySQL
$portname = 49170; // Porta do MySQL (como número inteiro)
$usuario = "root";
$senha = "";
$bancodedados = "banco";

// Corrigido: porta passada como 5º argumento
$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados, $portname);

if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    exit();
}
?>