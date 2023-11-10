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

    .foruns {
      margin-left: 150px;
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

    .site-p,
    .forum-p {
      width: 50%;
    }

    .link-content li {
      margin: 50px;
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
                <button class="canal-btn">Link</button>
              </div>
            </div>
            <div class="video">
              <div class="video-displayer">
                <iframe src="https://www.youtube.com/embed/VIDEO_ID1"></iframe>
              </div>
              <div class="video-info">
                <div class="video-title">
                  <h3>Título do Vídeo</h3>
                </div>
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
            <div class="video-displayer">
              <iframe src="https://www.youtube.com/embed/VIDEO_ID1"></iframe>
            </div>
            <div class="video-info">
              <div class="video-title">
                <h3>Título do Vídeo</h3>
              </div>
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
                      <h2>Nome do Fórum</h2>
                    </div>
                  </div>
                  <div class="description">
                    <div class="forum-p">
                      <p>O Tinkercad é uma plataforma online de prototipagem e modelagem 3D que combina simplicidade e
                        poder
                        para permitir que pessoas de todas as idades e níveis de habilidade criem projetos eletrônicos,
                        impressões 3D e simulações virtuais de maneira descomplicada. Fundado em 2011 e adquirido pela
                        Autodesk em 2013, o Tinkercad é amplamente utilizado em escolas, universidades e pela comunidade
                        maker
                        em todo o mundo.</p>
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
                      <h2>Nome do Fórum</h2>
                    </div>
                  </div>
                  <div class="description">
                    <div class="forum-p">
                      <p>O Tinkercad é uma plataforma online de prototipagem e modelagem 3D que combina simplicidade e
                        poder
                        para permitir que pessoas de todas as idades e níveis de habilidade criem projetos eletrônicos,
                        impressões 3D e simulações virtuais de maneira descomplicada. Fundado em 2011 e adquirido pela
                        Autodesk em 2013, o Tinkercad é amplamente utilizado em escolas, universidades e pela comunidade
                        maker
                        em todo o mundo.</p>
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
                      <h2>Nome do Fórum</h2>
                    </div>
                  </div>
                  <div class="description">
                    <div class="forum-p">
                      <p>O Tinkercad é uma plataforma online de prototipagem e modelagem 3D que combina simplicidade e
                        poder
                        para permitir que pessoas de todas as idades e níveis de habilidade criem projetos eletrônicos,
                        impressões 3D e simulações virtuais de maneira descomplicada. Fundado em 2011 e adquirido pela
                        Autodesk em 2013, o Tinkercad é amplamente utilizado em escolas, universidades e pela comunidade
                        maker
                        em todo o mundo.</p>
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
                      <h2>Nome do Fórum</h2>
                    </div>
                  </div>
                  <div class="description">
                    <div class="forum-p">
                      <p>O Tinkercad é uma plataforma online de prototipagem e modelagem 3D que combina simplicidade e
                        poder
                        para permitir que pessoas de todas as idades e níveis de habilidade criem projetos eletrônicos,
                        impressões 3D e simulações virtuais de maneira descomplicada. Fundado em 2011 e adquirido pela
                        Autodesk em 2013, o Tinkercad é amplamente utilizado em escolas, universidades e pela comunidade
                        maker
                        em todo o mundo.</p>
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
                      <h2>Nome do Fórum</h2>
                    </div>
                  </div>
                  <div class="description">
                    <div class="forum-p">
                      <p>O Tinkercad é uma plataforma online de prototipagem e modelagem 3D que combina simplicidade e
                        poder
                        para permitir que pessoas de todas as idades e níveis de habilidade criem projetos eletrônicos,
                        impressões 3D e simulações virtuais de maneira descomplicada. Fundado em 2011 e adquirido pela
                        Autodesk em 2013, o Tinkercad é amplamente utilizado em escolas, universidades e pela comunidade
                        maker
                        em todo o mundo.</p>
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
    // Código do botão switch de cor de fundo
    const switchBtn = document.querySelector('#dark-mode-switch');
    switchBtn.addEventListener('change', () => {
      document.body.classList.toggle('dark-mode');
    });
</body >

</html >