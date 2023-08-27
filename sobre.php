<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre nós</title>
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="./sobre.css">
  <link rel="stylesheet" href="dark-mode.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <header>
    <?php
    include('header1.php');
    ?>
    <?php
    include('barra-pesquisa.php');
    ?>
    <?php
    include('menu-padrao.php');
    ?>
  </header>
  <div id="conteudo">
    <div class="main" id="sobreprojeto">
      <p><b>
          <ul>
            <li>JONATHAS LUAN (github_JonathasLuan)</li>
            <li>PAMELA MARTINS</li>
            <li>FERNANDO BATISTA</li>
            <li>CRISTIANA FARIAS</li>
          </ul>
        </b>
        <br>
      <h1>IoTudo</h1>
      O site visa divulgar o setor e tecnologia de internet das coisas no Brasil e abordar temas relevantes para o
      entendimento popular do assunto.
      </p>
    </div>
  </div>

  <?php
  include('footer.php');
  include('set_theme_session.php');
  ?>
</body>

</html>