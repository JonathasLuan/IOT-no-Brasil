<?php
$servidor = "localhost";
$usuario = "iotnobrasil";
$senha = "iotnobrasil";
$dbname = "iotnobrasil";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
?>


<?php

$usuario = 'iotnobrasil';
$senha = 'iotnobrasil';
$database = 'iotnobrasil';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("falha ao conectar ao banco de dados: " . $mysqli->error);
}
