<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guias de Links</title>
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="serviços-list.css">
  <link rel="stylesheet" href="dark-mode.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    section {
      height: 100%;
      display: flex;
      padding: 20px;
    }

    #sec1 {
      background-color: #3F51B5;
      color: white;
    }

    #sec2 {
      background-color: white;
    }

    #sec3 {
      background-color: #3F51B5;
      color: white;
    }

    #sec4 {
      background-color: white;
    }

    #sec5 {
      background-color: #ddd;
    }

    .canal-pic img {
      border-radius: 50%;
      border: 1px solid;
      height: 200px;
      width: 200px;
    }

    .canal-btn {
      width: 100px;
      background-color: red;
      color: white;
      padding: 10px 30px;
      text-align: center;
    }

    .canal-title {
      text-align: center;
    }

    .canal-title p {
      text-align: center !important;
    }

    .canal-info {
      text-align: center;
      margin: 50px;
    }

    .foruns h1 {
      margin: 150px;
      font-size: 30px;
    }

    .forum {
      display: flex;
    }

    .description {
      margin-left: 50px;
    }

    .nav-foruns {
      background-color: white;
    }

    .link-content {
      width: 100%;
    }

    .link-content .site {
      width: 100%;
      padding: 50px;
      display: flex;
      margin-left: 150px;
    }

    .canal {
      width: 30%;
    }

    .video {
      width: 70%;
    }

    .site-pic img,
    .forum-pic img {
      border: 1px solid;
      height: 200px;
      width: 200px;
    }

    .site-a button,
    .forum-a button {
      padding: 10px 30px;
    }

    .site-p {
      width: 50%;
    }

    .forum-p {
      width: 70%;
    }

    .link-content li {
      margin: 150px;
      list-style-type: none;
    }

    .canal {
      display: flex;
      width: 100%;
    }

    .canal-info {
      flex: 1;
    }

    .video {
      flex: 1;
      margin-left: 20px;
    }

    .slideshow-container {
      width: 50%;
    }
  </style>
</head>

<body>
  <header>
    <?php
    include('header1.php');
    ?>
    <div class="pesquisa">
      <input type="text" placeholder="buscar...">
      <i class="fa fa-search"></i>
    </div>
    <?php
    include('menu-padrao.php');
    ?>
  </header>
  <main>
    <div id="link-displayer">
      <section id="sec1">
        <div class="link-content">
          <div class="canal">
            <div class="canal-info">
              <div class="canal-pic">
                <img src="img/channels4_profile.jpg" alt="">
              </div>
              <div class="canal-title">
                <h2>Manual do Mundo</h2>
                <p class="canal-dados">@manualdomundo18,2 mi de inscritos2,5 mil vídeos</p>
                <a href="https://www.youtube.com/channel/UCKHhA5hN2UohhFDfNXB_cvQ"><button class="canal-btn">Link</button></a>
              </div>
            </div>
            <div class="video">
              <div class="slideshow-container">

                <div class="mySlides fade">
                  <div class="numbertext">1 / 3</div>
                  <div class="video-displayer">
                    <iframe src="https://youtu.be/lTRFhj6QMNY?si=-x4-G6SaNGpykPN3"></iframe>
                  </div>
                  <div class="video-info">
                    <div class="video-title">
                      <h3>Título do Vídeo</h3>
                    </div>
                  </div>
                  <div class="texto">Caption Text</div>
                </div>

                <div class="mySlides fade">
                  <div class="numbertext">2 / 3</div>
                  <img src="img/channels4_profile.jpg" style="width:100%">
                  <div class="texto">Caption Two</div>
                </div>

                <div class="mySlides fade">
                  <div class="numbertext">3 / 3</div>
                  <img src="img/channels4_profile.jpg" style="width:100%">
                  <div class="texto">Caption Three</div>
                </div>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

              </div>
              <br>

              <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="sec2">
        <div class="link-content">
          <div class="site">
            <div class="site-info">
              <div class="site-pic">
                <img src="img/tinkercad.jpg" alt="">
              </div>
              <div class="site-title">
                <h2>Tinkercad</h2>
              </div>
            </div>
            <div class="description">
              <div class="site-p">
                <p>O Tinkercad é uma plataforma online de prototipagem e modelagem 3D que combina simplicidade e poder
                  para permitir que pessoas de todas as idades e níveis de habilidade criem projetos eletrônicos,
                  impressões 3D e simulações virtuais de maneira descomplicada. Fundado em 2011 e adquirido pela
                  Autodesk em 2013, o Tinkercad é amplamente utilizado em escolas, universidades e pela comunidade maker
                  em todo o mundo.</p>
              </div>
              <div class="site-a">
                <a href="https://www.tinkercad.com/"><button>Link</button></a>
              </div>
            </div>
          </div>
        </div>
    </div>
    </section>

    <section id="sec3">
      <div class="link-content">
        <div class="canal">
          <div class="canal-info">
            <div class="canal-pic">
              <img src="img/channels4_profile.jpg" alt="">
            </div>
            <div class="canal-title">
              <h2>Manual do Mundo</h2>
              <p class="canal-dados">@manualdomundo18,2 mi de inscritos2,5 mil vídeos</p>
              <button class="canal-btn">Link</button>
            </div>
          </div>
          <div class="video">
            <div class="slideshow-container">

              <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <div class="video-displayer">
                  <iframe src="https://youtu.be/lTRFhj6QMNY?si=-x4-G6SaNGpykPN3"></iframe>
                </div>
                <div class="video-info">
                  <div class="video-title">
                    <h3>Título do Vídeo</h3>
                  </div>
                </div>
                <div class="texto">Caption Text</div>
              </div>

              <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="img/channels4_profile.jpg" style="width:100%">
                <div class="texto">Caption Two</div>
              </div>

              <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="img/channels4_profile.jpg" style="width:100%">
                <div class="texto">Caption Three</div>
              </div>

              <a class="prev" onclick="plusSlides(-1)">❮</a>
              <a class="next" onclick="plusSlides(1)">❯</a>

            </div>
            <br>

            <div style="text-align:center">
              <span class="dot" onclick="currentSlide(1)"></span>
              <span class="dot" onclick="currentSlide(2)"></span>
              <span class="dot" onclick="currentSlide(3)"></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="sec4">
      <div class="link-content">
        <div class="site">
          <div class="site-info">
            <div class="site-pic">
              <img src="img/tinkercad.jpg" alt="">
            </div>
            <div class="site-title">
              <h2>Nome do Site</h2>
            </div>
          </div>
          <div class="description">
            <div class="site-p">
              <p>O Tinkercad é uma plataforma online de prototipagem e modelagem 3D que combina simplicidade e poder
                para permitir que pessoas de todas as idades e níveis de habilidade criem projetos eletrônicos,
                impressões 3D e simulações virtuais de maneira descomplicada. Fundado em 2011 e adquirido pela
                Autodesk em 2013, o Tinkercad é amplamente utilizado em escolas, universidades e pela comunidade maker
                em todo o mundo.</p>
            </div>
            <div class="site-a">
              <a href=""><button>Link</button></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="sec5">
      <div class="link-content">
        <div class="foruns">
          <h1>Fóruns de Tecnologia para estudo de IoT</h1>
          <nav id="nav-foruns">
            <ul id="lista-foruns">
              <li>
                <div class="forum">
                  <div class="forum-info">
                    <div class="forum-pic">
                      <img src="img/tinkercad.jpg" alt="">
                    </div>
                    <div class="forum-title">
                      <h2>1. Stack Overflow</h2>
                    </div>
                  </div>
                  <div class="description">
                    <div class="forum-p">
                      <p>O Stack Overflow é um recurso de perguntas e respostas. Atualmente, existem
                        mais
                        de 21 milhões de questões em aberto para discussão. Cada utilizador tem a sua taxa e pode
                        selecionar
                        a tecnologia que pretende discutir. Existem filtros para as tecnologias e ferramentas modernas
                        mais
                        populares: JavaScript, Java, Python, C #, PHP, AndroidHTML, JQuery, C ++, CSS e outros. O fórum
                        está
                        traduzido em russo, português, japonês, espanhol, alemão e turco.</p>
                    </div>
                    <div class="forum-a">
                      <a href=""><button>Link</button></a>
                    </div>
                  </div>
                </div>
              </li>

              <li>
                <div class="forum">
                  <div class="forum-info">
                    <div class="forum-pic">
                      <img src="img/tinkercad.jpg" alt="">
                    </div>
                    <div class="forum-title">
                      <h2>2. Reddit</h2>
                    </div>
                  </div>
                  <div class="description">
                    <div class="forum-p">
                      <p>Este popular sítio é uma mistura de notícias sociais e blogues. No Reddit, os utilizadores
                        registados podem publicar links para tudo o que quiserem na Internet. Tal como muitos outros
                        sítios
                        semelhantes, o Reddit suporta um sistema de votação dos seus posts favoritos - os mais populares
                        acabam na página de título do sítio. A comunidade total do sítio conta com um pouco mais de 2
                        milhões de pessoas. Algumas comunidades debatem Engenharia de dados, Python, Angular, GameDeve
                        AndroidDev. Já está registado no Reddit?</p>
                    </div>
                    <div class="forum-a">
                      <a href=""><button>Link</button></a>
                    </div>
                  </div>
                </div>
              </li>

              <li>
                <div class="forum">
                  <div class="forum-info">
                    <div class="forum-pic">
                      <img src="img/tinkercad.jpg" alt="">
                    </div>
                    <div class="forum-title">
                      <h2>3. Product Hunt</h2>
                    </div>
                  </div>
                  <div class="description">
                    <div class="forum-p">
                      <p>
                        O Product Hunt é uma comunidade entusiasmante de produtos exclusivos que são lançados todos os
                        dias.
                        É um local para os entusiastas de produtos partilharem e descobrirem as mais recentes aplicações
                        móveis, websites, projectos de hardware e criações tecnológicas. Os utilizadores criam os dados
                        e
                        cada publicação é acompanhada da fonte do programa que pode ser descarregada. Além disso, a
                        plataforma inclui um fórum com Visual Basic, Aprendizagem automática, AR e VR, Inteligência
                        Artificial, tópicos de discussão C/C+.</p>
                    </div>
                    <div class="forum-a">
                      <a href=""><button>Link</button></a>
                    </div>
                  </div>
                </div>
              </li>

              <li>
                <div class="forum">
                  <div class="forum-info">
                    <div class="forum-pic">
                      <img src="img/tinkercad.jpg" alt="">
                    </div>
                    <div class="forum-title">
                      <h2>4. Codementor</h2>
                    </div>
                  </div>
                  <div class="description">
                    <div class="forum-p">
                      <p>A Codementor é um mercado a pedido para os melhores engenheiros, programadores, consultores,
                        arquitectos, programadores e tutores do Fórum.
                        Com uma secção "Comunidade", os utilizadores podem partilhar informações úteis, opiniões, pontos
                        de
                        vista e sobre o mundo da programação. As tecnologias de programação mais discutidas são React,
                        Angular, Ruby, JavaScript, iOS, Android, Python. Mas se abrir outras secções, pode encontrar
                        termos
                        e dados anteriormente desconhecidos.</p>
                    </div>
                    <div class="forum-a">
                      <a href=""><button>Link</button></a>
                    </div>
                  </div>
                </div>
              </li>

              <li>
                <div class="forum">
                  <div class="forum-info">
                    <div class="forum-pic">
                      <img src="img/tinkercad.jpg" alt="">
                    </div>
                    <div class="forum-title">
                      <h2>5. CodeGuru</h2>
                    </div>
                  </div>
                  <div class="description">
                    <div class="forum-p">
                      <p>
                        O CodeGuru é um dos meus favoritos pela sua simplicidade e qualidade. Dicas, recomendações,
                        notícias, formação - tudo pode ser encontrado rapidamente. Além disso, o CodeGuru contém
                        milhares de
                        artigos e exemplos de código úteis para descarregar. As principais linguagens discutidas no
                        fórum
                        são VC ++ / MFC / C ++, .NET / C #, Visual Basic.</p>
                    </div>
                    <div class="forum-a">
                      <a href=""><button>Link</button></a>
                    </div>
                  </div>
                </div>
              </li>

              <li>
                <div class="forum">
                  <div class="forum-info">
                    <div class="forum-pic">
                      <img src="img/tinkercad.jpg" alt="">
                    </div>
                    <div class="forum-title">
                      <h2>6. Digital Point</h2>
                    </div>
                  </div>
                  <div class="description">
                    <div class="forum-p">
                      <p>
                        Este fórum é utilizado não só por programadores e profissionais de TI, mas também por designers,
                        BA,
                        PM e outros. No entanto, na secção Desenvolvimento, pode encontrar programadores de diferentes
                        níveis em PHP, JavaScript, Ruby, C #. Também no fórum existe o Marketplace para Sites e
                        Domínios.</p>
                    </div>
                    <div class="forum-a">
                      <a href=""><button>Link</button></a>
                    </div>
                  </div>
                </div>
              </li>

              <li>
                <div class="forum">
                  <div class="forum-info">
                    <div class="forum-pic">
                      <img src="img/tinkercad.jpg" alt="">
                    </div>
                    <div class="forum-title">
                      <h2>7. Codeproject.com</h2>
                    </div>
                  </div>
                  <div class="description">
                    <div class="forum-p">
                      <p>
                        O site contém artigos para programadores que criam aplicações Microsoft Windows. Os utilizadores
                        criam os dados e cada post acompanha o código fonte do programa que pode ser descarregado. Além
                        disso, a plataforma inclui um fórum com tópicos de discussão sobre ASP.NET, Programação Linux,
                        Visual Basic, Inteligência Artificial, C/C+. #8. Teamtreehouse</p>
                    </div>
                    <div class="forum-a">
                      <a href=""><button>Link</button></a>
                    </div>
                  </div>
                </div>
              </li>

              <li>
                <div class="forum">
                  <div class="forum-info">
                    <div class="forum-pic">
                      <img src="img/tinkercad.jpg" alt="">
                    </div>
                    <div class="forum-title">
                      <h2>8. Quora</h2>
                    </div>
                  </div>
                  <div class="description">
                    <div class="forum-p">
                      <p>
                        O serviço de perguntas e respostas para perguntar tudo o que quiser. O Quora classifica os
                        utilizadores de acordo com a qualidade das suas respostas anteriores. O serviço também utiliza
                        algoritmos de ML para classificar o assunto com base no histórico de questões e respostas dos
                        utilizadores. O site é bastante popular na comunidade de programadores para obter várias
                        respostas
                        específicas à sua pergunta.</p>
                    </div>
                    <div class="forum-a">
                      <a href=""><button>Link</button></a>
                    </div>
                  </div>
                </div>
              </li>

              <li>
                <div class="forum">
                  <div class="forum-info">
                    <div class="forum-pic">
                      <img src="img/tinkercad.jpg" alt="">
                    </div>
                    <div class="forum-title">
                      <h2>9. Notícias Hacker</h2>
                    </div>
                  </div>
                  <div class="description">
                    <div class="forum-p">
                      <p>
                        O Hacker News tem um tópico específico de informação básica para principiantes e muitos temas
                        diferentes relacionados com tópicos de desenvolvimento. Não se encontram apenas exemplos de
                        códigos
                        e soluções prontos a utilizar, mas também abordagens não padronizadas a problemas típicos -
                        fácil! O
                        fórum dá uma ideia do que está a acontecer em termos de marketing, design, desenvolvimento e
                        design.
                        #10. DZONE</p>
                    </div>
                    <div class="forum-a">
                      <a href=""><button>Link</button></a>
                    </div>
                  </div>
                </div>
              </li>

              <li>
                <div class="forum">
                  <div class="forum-info">
                    <div class="forum-pic">
                      <img src="img/tinkercad.jpg" alt="">
                    </div>
                    <div class="forum-title">
                      <h2>10. DZONE</h2>
                    </div>
                  </div>
                  <div class="description">
                    <div class="forum-p">
                      <p>
                        A DZONE é um agregador de notícias para programadores. O fórum fornece milhares de exemplos de
                        código-fonte gratuitos. Muitos programadores comparam este recurso com o SitePoint e consideram
                        a
                        plataforma um forte concorrente do Reddit. O fórum já tem mais de 2 milhões de utilizadores e o
                        número de questões debatidas no domínio das TI é bastante impressionante.</p>
                    </div>
                    <div class="forum-a">
                      <a href=""><button>Link</button></a>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </section>
    </div>
    <?php
    include('footer.php');
    include('set_theme_session.php');
    ?>
  </main>

  <script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      if (n > slides.length) { slideIndex = 1 }
      if (n < 1) { slideIndex = slides.length }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
    }
  </script>

  <script>
    // Código do botão switch de cor de fundo
    const switchBtn = document.querySelector('#dark-mode-switch');
    switchBtn.addEventListener('change', () => {
      document.body.classList.toggle('dark-mode');
    });
</body >

</html >