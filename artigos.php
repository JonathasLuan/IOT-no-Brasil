<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Serviços</title>
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="./artigos.css">
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
  <nav id="nav-servicos">
    <a href="##.php">Um</a>
    <a href="##.php">Dois</a>
    <a href="##.php">Três</a>
    <a href="##.php">Quatro</a>
  </nav>
  <section>
    <main>
      <article>
        <a href="oque-é-iot.php"><img src="img/oqueéiot.png" alt="Image 1" /></a>
        <a href="oque-é-iot.php">
          <h2>O que é IoT?</h2>
        </a>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </article>
      <article>
        <a href="objetos-conectados.php"><img src="img/objconect.jpg" alt="Image 2" /></a>
        <a href="objetos-conectados.php">
          <h2>Objetos Conectados</h2>
        </a>
        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </article>
      <article>
        <a href="arduino.php"><img src="img/arduino_quad.jpg" alt="Image 3" /></a>
        <a href="arduino.php">
          <h2>Arduino</h2>
        </a>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
      </article>
      <article>
        <a href="conectores.php"><img src="img/ConectorRaspberry05.jpg" alt="Image 6" /></a>
        <a href="conectores.php">
          <h2>Conectores</h2>
        </a>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
      </article>
      <article>
        <a href="topologia.php"><img src="img/redes-1-1024x1024.jpg" alt="Image 6" /></a>
        <a href="topologia.php">
          <h2>Topologia</h2>
        </a>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
      </article>
      <article>
        <a href="artigos-referenciados.php"><img src="img/artigos-cientificos.png" alt="Image 6" /></a>
        <a href="artigos-referenciados.php">
          <h2>Artigos Referenciados</h2>
        </a>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
      </article>
    </main>
  </section>
  <?php
  include('footer.php');
  include('set_theme_session.php');
  ?>
</body>

</html>
</body>

</html>