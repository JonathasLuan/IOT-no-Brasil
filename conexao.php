<?php
$servidor = "localhost";
$usuario = "";
$senha = "";
$dbname = "iotnobrasil";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
?>


<?php

$usuario = 'iotnobrasil';
$senha = '';
$database = '';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("falha ao conectar ao banco de dados: " . $mysqli->error);
}
