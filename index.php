<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IoTudo</title>
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="./home.css">
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
  <div class="conteudo">
    <section id="section-one">
      <div class="slider">
        <div id="text-slider">
          <h1>IoTudo</h1>
          <p style="width: 40%;">SEU UNIVERSO CONECTADO EM UMA SÓ PLATAFORMA!
          </p>
        </div>
        <figure>
          <div class="slide">
            <img src="img/1000_F_648017343_XyaGQ1k54gzxkajo54HVa3RvXbYTW2lL.jpg" alt="">
          </div>
          <div class="slide">
            <img src="img/1000_F_257540544_cBZqZIEnW1H9PHz3xFF5LV9B09MsWU7z.jpg" alt="">
          </div>
          <div class="slide">
            <img src="img/1000_F_616004095_Tbkwgrpmz7vJBLUb3MvxY9IeOIkN1fIu.jpg" alt="">
          </div>
          <div class="slide">
            <img src="img/240_F_624291842_lNLmLMpsExgYiIC6sFzgFkWBMazGB2GJ.jpg" alt="">
          </div>
          <div class="slide">
            <img src="img/1000_F_619172259_hjDQjkezPv5DDpUMAUac4HUXYLExsf8m.jpg" alt="">
          </div>
        </figure>
      </div>
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
            <h1>Bem-vindo à Era da Conectividade: Explorando a Internet das Coisas (IoT) </h1>
            <p>Na época em que vivemos, a tecnologia está moldando o mundo de maneiras que nunca imaginamos serem
              possíveis. Uma das revoluções mais emocionantes e transformadoras que está ocorrendo bem diante dos nossos
              olhos é a Internet das Coisas, ou IoT. Nesta página, embarcaremos em uma jornada fascinante pelo universo
              da IoT, onde dispositivos inteligentes, conectividade sem precedentes e dados interligados estão
              redefinindo a maneira como vivemos, trabalhamos e interagimos com o mundo ao nosso redor.</p>
          </div>
        </article>
      </div>
      <div id="cabeca">
        <article id="explore-article">
          <div>
            <h2>O que é a Internet das Coisas?</h2>

            <p>A Internet das Coisas é uma revolução tecnológica que se baseia na ideia de que qualquer objeto pode ser
              transformado em um dispositivo de comunicação, coleta de dados e automação. Isso significa que desde os
              dispositivos em nossas casas, como geladeiras e termostatos, até máquinas industriais em fábricas e até
              mesmo os veículos que dirigimos, todos podem ser equipados com sensores, software inteligente e
              conectividade à internet. Esses elementos trabalham juntos para coletar informações, tomar decisões e
              interagir com o ambiente e com outros dispositivos, criando um ecossistema verdadeiramente interconectado.
            </p>
          </div>
        </article>
      </div>
      <div class="article-list" id="apresentacao">
        <div id="div-article">
          <article>
            <div>
              <h2>Por que a IoT é tão importante?</h2>

              <p>A IoT está transformando nossa vida cotidiana, melhorando a eficiência, economizando recursos e criando
                novas oportunidades de negócios. Imagine um mundo onde a sua casa saiba quando você está prestes a
                chegar e ajusta automaticamente a temperatura e a iluminação para o seu conforto, ou onde os
                agricultores monitoram suas colheitas remotamente para garantir um cultivo saudável. Isso é apenas a
                ponta do iceberg da revolução que a IoT está desencadeando. </p>
            </div>
          </article>
          <article>
            <h2>O que você encontrará nesta página?</h2>

            <p>Nesta jornada pela IoT, exploraremos seus princípios fundamentais, suas aplicações em diversos setores,
              os desafios e questões éticas que surgem com a coleta massiva de dados e a segurança cibernética, bem como
              as tendências futuras que podem moldar ainda mais esse campo emocionante.</p>
            <p>Prepare-se para mergulhar no emocionante mundo da Internet das Coisas e descobrir como essa tecnologia
              está transformando nosso mundo de maneiras que nunca sonhamos serem possíveis. Junte-se a nós enquanto
              exploramos os limites da conectividade e da inovação. </p>
          </article>
        </div>
      </div>
  </div>
  </section>

  <section id="section-three">
    <div class="chamada1" style="color: white; padding: 50px; width: 30%;">
      <h1>Explore nossa plataforma!</h1>
      <p>Aqui você encontrará inúmeros artigos relacionados à Internet das Coisas, além de excelentes recomendações de
        leitura e estudo em sites, fóruns e canais do YouTube que abordam o universo da coinexão de dispositivos.</p>
    </div>
  </section>

  <section id="section-four">
    <div class="chamada2">
      <img src="img/logoiotudo.png" alt="IoTudo" style="width: 300px; height: auto; margin: 100px;">
    </div>
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

  <script>

    // Código do botão switch de cor de fundo
    const switchBtn = document.querySelector('#dark-mode-switch');
    switchBtn.addEventListener('change', () => {
      document.body.classList.toggle('dark-mode');
    });

  </script>
  <?php
  include('footer.php');
  ?>
</body>

</html>