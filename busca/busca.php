<?php

if (!isset($_GET['nome_pagina'])) {
    header("Location: index.php");
    exit;
}

$nome = "%" . trim($_GET['nome_pagina']) . "%";

$dbh = new PDO('mysql:host=127.0.0.1;dbname=iotnobrasil', 'root', '');

$sth = $dbh->prepare("SELECT * FROM pagina WHERE titulo LIKE :nome");
$sth->bindParam(':nome', $nome, PDO::PARAM_STR);
$sth->execute();

$resultados = $sth->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Busca</title>
    <Style>
        body {
            padding: 50px;
        }

        h1 {
            color: red;
            font-size: 50px;
        }

        button {
            width: 100px;
            background-color: #ff9800;
            color: white;
            font-weight: bold;
            cursor: pointer;
            border: none;
            padding: 10px;
        }

        button:hover {
            background-color: #ffc107;
            cursor: pointer;
        }
    </Style>
</head>

<body>
    <h2>Resultado da Busca:</h2>
    <?php

    if (count($resultados)) {
        foreach ($resultados as $resultado) {
            echo $resultado['titulo'];
            header("Location: http://localhost/iot-no-brasil/" . $resultado['url']);
        }
    } else {
        echo "<h1>" . "Nenhum resultado correspondente." . "</h1>";
    }
    ?>
    <img src="img/404robot.jpg" alt="">

    <button onclick="goBack()">Voltar</button>

    <script>
        // Adiciona um listener de evento para o botão "Adicionar Conversa"
        btnAdicionarConversa.addEventListener("click", adicionarConversa);
    </script>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>

</html>
