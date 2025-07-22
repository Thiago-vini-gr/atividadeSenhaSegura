<?php
$hostname = "sql112.infinityfree.com";
$usuario = "if0_39110552";
$senha = "YZzjOvVcdXc6";
$bancodedados = "banco_php";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    exit();
}
?>
