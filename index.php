<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IoTudo</title>
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="./home.css">
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
    <div class="menu" id="unlogged">
      <ul>
        <li class="menu-li">
          <a href="index.php">home</a>
        </li>
        <li class="menu-li">
          <a href="artigos.php">artigos</a>
        </li>
        <li class="menu-li">
          <a href="sobre.php">sobre</a>
        </li>
        <li class="menu-li">
          <a href="contato.php">contato</a>
        </li>
        <li>
          <div class="dropdown">
            <a href="##.php" class="mainmenua">menu 2 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="feather feather-chevron-down">
                <polyline points="6 9 12 15 18 9"></polyline>
              </svg></a>
            <div class="dropdown-child">
              <a style="border-top-left-radius: 0px;" href="##.php">Opção 1</a>
              <a href="##.php">Opção 2</a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </header>
  <div class="conteudo">
    <section id="section-one">
    </section>
    <section id="section-two">
      <div id="cabeca">
        <article id="bemvindo">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-chevron-down">
            <polyline points="6 9 12 15 18 9"></polyline>
          </svg>
          <br><br>
          <div>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
              fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
              mollit anim id est laborum.</p>
          </div>
        </article>
      </div>
      <div id="cabeca">
        <article id="explore-article">
          <div>
            <h2>Texto</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
              fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
              mollit anim id est laborum.</p>
          </div>
        </article>
      </div>
      <div class="article-list" id="apresentacao">
        <div id="div-article">
          <article>
            <div>
              <h3>Texto</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>
            </div>
          </article>
          <article>
            <div>
              <h3>Texto</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>
            </div>
          </article>
        </div>
      </div>
      <div class="article-list" id="apresentacao">
        <div id="div-article">
          <article>
            <div>
              <img src="img/svg/client-svgrepo-com.svg" alt="">
              <h3>Texto</h3>
              <p>.</p>
            </div>
          </article>
          <article>
            <div>
              <img src="img/svg/hairdresser-svgrepo-com.svg" alt="">
              <h3>Texto</h3>
              <p>.</p>
            </div>
          </article>
        </div>
      </div>
    </section>
    <section id="section-three">
      <div class="article-list" id="catalogo">
        <article>
          <div>
            <img src="img/svg/hairdresser-washing-the-hair-of-a-client-with-bubbles-shampoo-svgrepo-com.svg" alt="">
            <h2>Texto</h2>
            <p>
              Oferecemos cortes de cabelo para homens e mulheres, coloração, tratamentos capilares, penteados e muito
              mais.
              Nossos cabeleireiros experientes irão ajudá-lo a encontrar o visual perfeito para o seu estilo de vida.
            </p>
          </div>
        </article>
        <article>
          <div>
            <img src="img/svg/makeup-woman-svgrepo-com.svg" alt="">
            <h2>Texto</h2>
            <p>
              Nossa equipe de maquiadores profissionais irá te ajudar a obter a aparência perfeita para qualquer
              ocasião. De
              maquiagem natural a maquiagem para casamentos e eventos especiais, nossos maquiadores irão trabalhar com
              você
              para obter o visual que você deseja.</p>
          </div>
        </article>
        <article>
          <div>
            <img src="img/svg/razors-svgrepo-com.svg" alt="">
            <h2>Texto</h2>
            <p>
              Nossos barbeiros são especialistas em cortes de cabelo masculinos e barba. Oferecemos cortes de cabelo
              clássicos
              e modernos, barbas bem cuidadas e muito mais.</p>
          </div>
        </article>
        <article>
          <div>
            <img src="img/svg/nail-polish-svgrepo-com.svg" alt="">
            <h2>Texto</h2>
            <p>
              Nossos profissionais de manicure e pedicure são especialistas em fazer suas mãos e pés ficarem lindos.
              Oferecemos serviços de manicure e pedicure, aplicação de unhas postiças, esmaltação e muito mais.
            </p>
          </div>
        </article>
        <div class="separator"></div>
      </div>
      <div id="consulta-article">
        <article>
          <div>
            <img src="img/icons8-calendar-96.png" alt="">
            <h2>Texto</h2>
            <p>
              Estamos sempre prontos para atendê-lo! Marque uma consulta hoje mesmo e deixe nossa equipe de
              profissionais de
              beleza cuidar de você.
            </p>
          </div>
        </article>
      </div>
      <br><br>
      <br><br>
    </section>
    <img src="img/icons8-slide-up-64.png" id="scrollBtn" onclick="topFunction()" alt="Voltar ao topo">
  </div>
  <script src="homeJS.js"></script>
  <script>
    // Mostra o botão de rolagem quando o usuário rola a página em 20px
    window.onscroll = function () { scrollFunction() };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("scrollBtn").style.display = "block";
      } else {
        document.getElementById("scrollBtn").style.display = "none";
      }
    }

    // Quando o usuário clica no botão, volta para o topo da página de forma suave
    function topFunction() {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    }
  </script>
  <script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function () {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>

  <?php
  include('footer.php');
  ?>
</body>

</html>