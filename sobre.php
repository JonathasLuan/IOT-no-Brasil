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
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </b>
        <br>
      </p>
      <p>
      <h1>IoTudo</h1>
      </p>
    </div>

  </div>

  <?php
  include('footer.php');
  include('set_theme_session.php');
  ?>
</body>

</html>