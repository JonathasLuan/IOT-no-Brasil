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
  <link rel="stylesheet" href="guiadelinks.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous"
    defer></script>
  <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet"
    crossorigin="anonymous">
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
                <img src="img/channels4_profile.jpg" alt="manual-do-mundo">
              </div>
              <div class="canal-title">
                <h2>Manual do Mundo</h2>
                <p class="canal-dados">@manualdomundo18,2 mi de inscritos2,5 mil vídeos</p>
                <a href="https://www.youtube.com/@manualdomundo"><button class="canal-btn">Visitar</button></a>
              </div>

              <div class="curso-info">
                <h1>#ManualMaker</h1>
                <p>A playlist é uma série de vídeos focados em apresentar e ensinar diversas habilidades e conceitos
                  relacionados ao mundo da automação, programação de dispositivos e noções de elétrica e conexões de
                  placas, sendu uma ótima introdução ao DIY e IoT.</p>
              </div>
            </div>

            <div class="video">
              <div class="carousel-container">
                <div class="carousel">
                  <div class="carousel-item">
                    <img src="img/o queéumarduino.jpg" alt="Video 1">
                    <div>
                      <h1>O que é Arduino, afinal de contas? #ManualMaker Aula 4, Vídeo 1</h1>
                      <a href="https://youtu.be/sv9dDtYnE1g?si=uXkTmHHO1yIEPjYZ"><button
                          class="video-btn">Assistir</button></a>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/comousarferrodesolda.jpg" alt="Video 2">
                    <div>
                      <h1>Como usar um ferro de solda #ManualMaker Aula 4, Vídeo 2</h1>
                      <a href="https://youtu.be/MGbgyuVXRcI?si=q64rWaNtzO_eBwmC"><button
                          class="video-btn">Assistir</button></a>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/usearduino.jpg" alt="Video 3">
                    <div>
                      <h1>Use um Arduino sem ter Arduino! #ManualMaker Aula 5, Vídeo 1</h1>
                      <a href="https://youtu.be/CrHJj4OQ6Sw?si=h88wfy99osJN0kyW"><button
                          class="video-btn">Assistir</button></a>
                    </div>
                  </div>
                </div>
                <button id="btn" class="prev">&lt;</button>
                <button id="btn" class="next">&gt;</button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="sec2">
        <div class="link-content">
          <h1 class="site-h1">Sites Recomendados</h1>
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
                <a href="https://www.tinkercad.com/"><button>Visitar</button></a>
              </div>
            </div>
          </div>

          <div class="site">
            <div class="site-info">
              <div class="site-pic">
                <img src="img/wokwi1.jpg" alt="">
              </div>
              <div class="site-title">
                <h2>WOKWI</h2>
              </div>

              <div class="site-a">
                <a href="https://wokwi.com/"><button>Visitar</button></a>
              </div>
            </div>
            <div class="description">
              <div class="site-p">
                <p>O Wokwi é um simulador de eletrônica online. Você pode usá-lo para simular Arduino, Raspberry Pi
                  Pico, ESP32 e muitas outras placas, componentes e sensores populares.
                  Ele foi criado por Uri Shaked e hoje é mantido de forma open source por uma comunidade.
                  Inicialmente o Wokwi só possuía placas Arduino baseadas em AVR, como UNO, Mega e Nano e também
                  ATtiny85. Inclusive a Franzininho DIY está na lista de placas suportadas graças a contribuição do
                  Anderson Costa, membro das comunidades Wokwi e Franzininho.</p>
              </div>
              <img src="img/wokwi.png" alt="" style="width: 900px;">
            </div>
          </div>

          <div class="site">
            <div class="site-info">
              <div class="site-pic">
                <img src="img/FN3EKLMHWL2BOAS.webp" alt="fritzing" style="width: auto;">
              </div>
              <div class="site-title">
                <h2>Fritzing</h2>
              </div>
            </div>
            <div class="description">
              <div class="site-p">
                <p>Fritzing é uma iniciativa de código aberto para desenvolver um software tipo CAD amador para design
                  de
                  hardware eletrônico, para apoiar designers e artistas prontos para deixar de experimentar um protótipo
                  e
                  construir um circuito mais permanente com uma Placa de Circuito Impresso.</p>
              </div>
              <div class="site-a">
                <a href="https://fritzing.org/"><button>Visitar</button></a>
              </div>
            </div>
          </div>

          <div class="site">
            <div class="site-info">
              <div class="site-pic">
                <img src="img/embarcados.jpg" alt="embarcados" src="img/FN3EKLMHWL2BOAS.webp" alt=""
                  style="width: auto;">
              </div>
              <div class="site-title">
                <h2>EMBARCADOS</h2>
              </div>
              <div class="site-a">
                <a href="https://embarcados.com.br/"><button>Visitar</button></a>
              </div>
            </div>
            <div class="description">
              <h1>FRANZINHO WIFI</h1>
              <div class="site-p">
                <p>A Franzininho WIFI é uma placa de desenvolvimento de hardware de código aberto, baseada no ESP32-S2 e
                  criada no Brasil. A sua finalidade principal é tornar o desenvolvimento de projetos eletrônicos mais
                  acessível a makers, entusiastas e desenvolvedores brasileiros.

                  A placa pode ser programada de várias maneiras, adequando-se tanto a iniciantes quanto a
                  desenvolvedores
                  experientes.</p>
              </div>
              <img src="img/franzinho.jpeg" alt="" style="width: 700px; border: 1px solid;">
            </div>
          </div>
        </div>
      </section>

      <section id="sec3">
        <div class="link-content">
          <div class="canal">
            <div class="canal-info">
              <div class="canal-pic">
                <img src="img/brincandocomideias.jpg" alt="manual-do-mundo">
              </div>
              <div class="canal-title">
                <h2>Brincando com Ideias</h2>
                <p class="canal-dados">@BrincandocomIdeias‧488 mil inscritos‧1,2 mil vídeos</p>
                <a href="https://www.youtube.com/@BrincandocomIdeias"><button class="canal-btn">Visitar</button></a>
              </div>

              <div class="curso-info">
                <h1></h1>
                <p></p>
              </div>
            </div>

            <div class="video">
              <div class="carousel-container">
                <div class="carousel">
                  <div class="carousel-item">
                    <img src="img/Curs deArduinopara Iniciantes1.jpg" alt="Video 1">
                    <div>
                      <h1>Curso de Arduino para Iniciantes - Aula 01 - Primeiros Passos (Exemplo de um Vumeter)</h1>
                      <a href="https://youtu.be/oOWuq_Nazig?si=Uzx46XE2HRxA5DEI"><button
                          class="video-btn">Assistir</button></a>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/comousarferrodesolda.jpg" alt="Video 2">
                    <div>
                      <h1>Como usar um ferro de solda #ManualMaker Aula 4, Vídeo 2</h1>
                      <a href="https://youtu.be/MGbgyuVXRcI?si=q64rWaNtzO_eBwmC"><button
                          class="video-btn">Assistir</button></a>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/usearduino.jpg" alt="Video 3">
                    <div>
                      <h1>Use um Arduino sem ter Arduino! #ManualMaker Aula 5, Vídeo 1</h1>
                      <a href="https://youtu.be/CrHJj4OQ6Sw?si=h88wfy99osJN0kyW"><button
                          class="video-btn">Assistir</button></a>
                    </div>
                  </div>
                </div>
                <button id="btn" class="prev">&lt;</button>
                <button id="btn" class="next">&gt;</button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="sec4">
        <div class="link-content">
          <h1 class="site-h1">Plataformas Recomendadas</h1>
          <div class="plataforma">
            <div class="plat-info">
              <div class="plat-pic">
                <img src="img/.jpg" alt="embarcados" src="img/iot-na-industria.png" alt="" style="width: auto;">
              </div>
              <div class="plat-title">
                <h2>Arduino IoT Cloud</h2>
              </div>
              <div class="site-a">
                <a href="https://www.arduino.cc/iot/cloud"><button>Visitar</button></a>
              </div>
            </div>
            <div class="plat-img">
              <img src="img/arduinosite.png" alt="" style="width: 700px; border: 1px solid;">
            </div>
          </div>

          <div class="plataforma">
            <div class="plat-info">
              <div class="plat-pic">
                <img src="img/aws.png" alt="embarcados" src="img/.png" alt="" style="width: auto;">
              </div>
              <div class="plat-title">
                <h2>AWS IoT Core</h2>
              </div>
              <div class="plat-a">
                <a href="https://aws.amazon.com/iot-core/"><button>Visitar</button></a>
              </div>
            </div>
            <div class="plat-img">
              <img src="img/awssite.png" alt="" style="width: 700px; border: 1px solid;">
            </div>
          </div>

          <div class="plataforma">
            <div class="plat-info">
              <div class="plat-pic">
                <img src="img/cloud-iot-core.webp" alt="embarcados" src="img/(364).png" alt="" style="width: auto;">
              </div>
              <div class="plat-title">
                <h2>Google Cloud IoT Core</h2>
              </div>
              <div class="site-a">
                <a href="https://cloud.google.com/iot-core"><button>Visitar</button></a>
              </div>
            </div>
            <div class="plat-img">
              <img src="img/googlesite.png" alt="" style="width: 700px; border: 1px solid;">
            </div>
          </div>

          <div class="plataforma">
            <div class="plat-info">
              <div class="plat-pic">
                <img src="img/azure-Iot-platform-logo.png" alt="embarcados" src="img/.png" alt="" style="width: auto;">
              </div>
              <div class="plat-title">
                <h2>Microsoft Azure IoT Hub</h2>
              </div>
              <div class="site-a">
                <a href="https://azure.microsoft.com/en-us/services/iot-hub/"><button>Visitar</button></a>
              </div>
            </div>
            <div class="plat-img">
              <img src="img/azuresite.png" alt="" style="width: 700px; border: 1px solid;">
            </div>
          </div>

          <div class="plataforma">
            <div class="plat-info">
              <div class="plat-pic">
                <img src="img/ibm.png" alt="embarcados" src="img/.png" alt="" style="width: auto;">
              </div>
              <div class="plat-title">
                <h2>IBM Watson IoT Platform</h2>
              </div>
              <div class="site-a">
                <a href="https://www.ibm.com/cloud/watson-iot-platform"><button>Visitar</button></a>
              </div>
            </div>
            <div class="plat-img">
              <img src="img/ibmsite.png" alt="" style="width: 700px; border: 1px solid;">
            </div>
          </div>

          <div class="plataforma">
            <div class="plat-info">
              <div class="plat-pic">
                <img src="img/thingspeak.png" alt="embarcados" src="img/.png" alt="" style="width: auto;">
              </div>
              <div class="plat-title">
                <h2>ThingSpeak</h2>
              </div>
              <div class="site-a">
                <a href="https://thingspeak.com/"><button>Visitar</button></a>
              </div>
            </div>
            <div class="plat-img">
              <img src="img/thingspeaksite.png" alt="" style="width: 700px; border: 1px solid;">
            </div>
          </div>

          <div class="plataforma">
            <div class="plat-info">
              <div class="plat-pic">
                <img src="img/ubidotss.webp" alt="embarcados" src="img/.png" alt="" style="width: auto;">
              </div>
              <div class="plat-title">
                <h2>Ubidots</h2>
              </div>
              <div class="site-a">
                <a href="https://ubidots.com/"><button>Visitar</button></a>
              </div>
            </div>
            <div class="plat-img">
              <img src="img/ubidots.png" alt="" style="width: 700px; border: 1px solid;">
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
                        <img src="img/stackoverflow-1.png" alt="">
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
                          populares: JavaScript, Java, Python, C #, PHP, AndroidHTML, JQuery, C ++, CSS e outros. O
                          fórum
                          está
                          traduzido em russo, português, japonês, espanhol, alemão e turco.</p>
                      </div>
                      <div class="forum-a">
                        <a href="https://stackoverflow.com/"><button>Visitar</button></a>
                      </div>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="forum">
                    <div class="forum-info">
                      <div class="forum-pic">
                        <img src="img/4ba86580debb5f67a4f4a5ac3c1bf61a.WEBP" alt="">
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
                          semelhantes, o Reddit suporta um sistema de votação dos seus posts favoritos - os mais
                          populares
                          acabam na página de título do sítio. A comunidade total do sítio conta com um pouco mais de 2
                          milhões de pessoas. Algumas comunidades debatem Engenharia de dados, Python, Angular, GameDeve
                          AndroidDev. Já está registado no Reddit?</p>
                      </div>
                      <div class="forum-a">
                        <a href="https://www.reddit.com/?rdt=35859"><button>Visitar</button></a>
                      </div>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="forum">
                    <div class="forum-info">
                      <div class="forum-pic">
                        <img src="img/product-hunt-image-720x480.WEBP" alt="">
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
                          É um local para os entusiastas de produtos partilharem e descobrirem as mais recentes
                          aplicações
                          móveis, websites, projectos de hardware e criações tecnológicas. Os utilizadores criam os
                          dados
                          e
                          cada publicação é acompanhada da fonte do programa que pode ser descarregada. Além disso, a
                          plataforma inclui um fórum com Visual Basic, Aprendizagem automática, AR e VR, Inteligência
                          Artificial, tópicos de discussão C/C+.</p>
                      </div>
                      <div class="forum-a">
                        <a href="https://www.producthunt.com/"><button>Visitar</button></a>
                      </div>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="forum">
                    <div class="forum-info">
                      <div class="forum-pic">
                        <img src="img/Codementor_CIS.png" alt="">
                      </div>
                      <div class="forum-title">
                        <h2>4. Codementor</h2>
                      </div>
                    </div>
                    <div class="description">
                      <div class="forum-p">
                        <p>A Codementor é um mercado a pedido para os melhores engenheiros, programadores, consultores,
                          arquitectos, programadores e tutores do Fórum.
                          Com uma secção "Comunidade", os utilizadores podem partilhar informações úteis, opiniões,
                          pontos
                          de
                          vista e sobre o mundo da programação. As tecnologias de programação mais discutidas são React,
                          Angular, Ruby, JavaScript, iOS, Android, Python. Mas se abrir outras secções, pode encontrar
                          termos
                          e dados anteriormente desconhecidos.</p>
                      </div>
                      <div class="forum-a">
                        <a href="https://www.codementor.io/"><button>Visitar</button></a>
                      </div>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="forum">
                    <div class="forum-info">
                      <div class="forum-pic">
                        <img src="img/codeguru.jpeg" alt="">
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
                        <a href="https://www.codeguru.com/"><button>Visitar</button></a>
                      </div>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="forum">
                    <div class="forum-info">
                      <div class="forum-pic">
                        <img src="img/digitalpoint.jpg" alt="">
                      </div>
                      <div class="forum-title">
                        <h2>6. Digital Point</h2>
                      </div>
                    </div>
                    <div class="description">
                      <div class="forum-p">
                        <p>
                          Este fórum é utilizado não só por programadores e profissionais de TI, mas também por
                          designers,
                          BA,
                          PM e outros. No entanto, na secção Desenvolvimento, pode encontrar programadores de diferentes
                          níveis em PHP, JavaScript, Ruby, C #. Também no fórum existe o Marketplace para Sites e
                          Domínios.</p>
                      </div>
                      <div class="forum-a">
                        <a href="https://www.digitalpoint.com/"><button>Visitar</button></a>
                      </div>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="forum">
                    <div class="forum-info">
                      <div class="forum-pic">
                        <img src="img/codeproject.png" alt="">
                      </div>
                      <div class="forum-title">
                        <h2>7. Codeproject.com</h2>
                      </div>
                    </div>
                    <div class="description">
                      <div class="forum-p">
                        <p>
                          O site contém artigos para programadores que criam aplicações Microsoft Windows. Os
                          utilizadores
                          criam os dados e cada post acompanha o código fonte do programa que pode ser descarregado.
                          Além
                          disso, a plataforma inclui um fórum com tópicos de discussão sobre ASP.NET, Programação Linux,
                          Visual Basic, Inteligência Artificial, C/C+. #8. Teamtreehouse</p>
                      </div>
                      <div class="forum-a">
                        <a href="https://www.codeproject.com/"><button>Visitar</button></a>
                      </div>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="forum">
                    <div class="forum-info">
                      <div class="forum-pic">
                        <img src="img/1200px-Quora_icon.svg.png" alt="">
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
                        <a href="https://pt.quora.com/"><button>Visitar</button></a>
                      </div>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="forum">
                    <div class="forum-info">
                      <div class="forum-pic">
                        <img src="img/hn-logo-dribbble-shot.png" alt="">
                      </div>
                      <div class="forum-title">
                        <h2>9. Hacker News</h2>
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
                          design.</p>
                      </div>
                      <div class="forum-a">
                        <a href="https://news.ycombinator.com/"><button>Visitar</button></a>
                      </div>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="forum">
                    <div class="forum-info">
                      <div class="forum-pic">
                        <img src="img/1574351436345.jpeg" alt="">
                      </div>
                      <div class="forum-title">
                        <h2>10. DZONE</h2>
                      </div>
                    </div>
                    <div class="description">
                      <div class="forum-p">
                        <p>
                          A DZONE é um agregador de notícias para programadores. O fórum fornece milhares de exemplos de
                          código-fonte gratuitos. Muitos programadores comparam este recurso com o SitePoint e
                          consideram
                          a
                          plataforma um forte concorrente do Reddit. O fórum já tem mais de 2 milhões de utilizadores e
                          o
                          número de questões debatidas no domínio das TI é bastante impressionante.</p>
                      </div>
                      <div class="forum-a">
                        <a href="https://dzone.com/"><button>Visitar</button></a>
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

  <script>const carousel = document.querySelector('.carousel');
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');
    let currentIndex = 0;

    function showSlide(index) {
      const offset = -index * 100 + '%';
      carousel.style.transform = `translateX(${offset})`;
    }

    prevButton.addEventListener('click', () => {
      currentIndex = (currentIndex - 1 + 3) % 3;
      showSlide(currentIndex);
    });

    nextButton.addEventListener('click', () => {
      currentIndex = (currentIndex + 1) % 3;
      showSlide(currentIndex);
    });
  </script>

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