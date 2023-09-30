<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Artigos</title>
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
  <section>
    <main>
      <article>
        <a href="oque-é-iot.php"><img src="img/oqueéiot.png" alt="Image 1" /></a>
        <a href="oque-é-iot.php">
          <h2>O que é IoT?</h2>
        </a>
        <p></p>
      </article>
      <article>
        <a href="objetos-conectados.php"><img src="img/objconect.jpg" alt="Image 2" /></a>
        <a href="objetos-conectados.php">
          <h2>Objetos Conectados</h2>
        </a>
        <p></p>
      </article>
      <article>
        <a href="arduino.php"><img src="img/arduino_quad.jpg" alt="Image 3" /></a>
        <a href="arduino.php">
          <h2>Arduino</h2>
        </a>
        <p>
        </p>
      </article>
      <article>
        <a href="conectores.php"><img src="img/ConectorRaspberry05.jpg" alt="Image 4" /></a>
        <a href="conectores.php">
          <h2>Conectores</h2>
        </a>
        <p>
        </p>
      </article>
      <article>
        <a href="topologia.php"><img src="img/redes-1-1024x1024.jpg" alt="Image 5" /></a>
        <a href="topologia.php">
          <h2>Topologia</h2>
        </a>
        <p>
        </p>
      </article>
      <article>
        <a href="tinkercad.php"><img src="img/tinkercad.jpg" alt="Image 6" /></a>
        <a href="tinkercad.php">
          <h2>tinkercad</h2>
        </a>
        <p>
        </p>
      </article>
      <article>
        <a href="lgpd.php"><img src="img/73f5efc60a35447bbacfc0e032434111.jpg" alt="Image 6" /></a>
        <a href="tinkercad.php">
          <h2>LGPD</h2>
        </a>
        <p>
        </p>
      </article>
      <article>
        <a href="aplicacoescotidianas.php"><img src="img/internet-das-coisas-no-dia-a-dia-1024x538.jpg.webp" alt="Image 6" /></a>
        <a href="tinkercad.php">
          <h2>IoT no Cotidiano</h2>
        </a>
        <p>
        </p>
      </article>
      <article>
        <a href="artigos-referenciados.php"><img src="img/artigos-cientificos.png" alt="Image 7" /></a>
        <a href="artigos-referenciados.php">
          <h2>Artigos Referenciados</h2>
        </a>
        <p>
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