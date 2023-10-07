<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Artigos Referenciados</title>
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="serviços-list.css">
  <link rel="stylesheet" href="dark-mode.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    section {
      padding: 10px 10px;
    }

    #artigos ul li {
      margin-bottom: 10px;
      background-color: #2196F3;
      color: white !important;
      padding: 40px;
      border-radius: 5px;
    }

    #artigos {
      margin: 0 auto;
      width: 1100px;
    }

    #artigos a:link {
      text-decoration: none;
    }

    #artigos a:hover {
      text-decoration: none;
      font-weight: bold;
    }

    #artigos a {
      color: white;
    }

    .artigo-inf {
      display: none;
    }

    .fa {
      font-size: 25px;
    }

    .eye {
      float: right;
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
    <section>
      <div style="margin: 0 auto;">
        <div id="artigos">
          <nav>
            <ul>
              <li>
                <div id="artigo-info"><span>
                    <a class="artigo-link" href=""><i class="fa fa-solid fa-file"></i>&nbsp&nbsp Internet das
                      coisas:
                      uma breve revisão bibliográfica.</a></span><button class="eye"><i
                      class="fa fa-solid fa-eye"></i></button>
                  <div class="artigo-inf">
                    <p><b>Revista:</b> 2018 Conexões - Ciência e Tecnologia</p>
                    <p><b>Autores:</b> Moisés Panegassi Fachini, Nathalia Pinheiro Mesquita, Rafael Padovani Oliveira,
                      Patricia Gallo de França</p>
                    <p><b>Rusumo:</b>
                      <br>
                      A tecnologia está em constante mudança e evolução, tendendo cada vez mais a se
                      incorporar em diversos aspectos do nosso cotidiano, não se limitando apenas a computadores; ela
                      vem agregando conectividade a objetos do nosso dia a dia. Este fenômeno é conhecido como “Internet
                      das Coisas” e será objeto de estudo deste artigo. Porém, por se tratar de uma temática atual e que
                      ainda é tendência para os próximos anos, não dispõe, ainda, de uma bibliografia mais consistente e
                      aprofundada, especialmente na língua portuguesa. Essa constatação, motivou a escrita deste artigo
                      que tem como objetivo reunir, sistematicamente, a bibliografia disponível para que, assim,
                      possamos divulgar os conceitos e definições sobre esse tema, com maior facilidade, a quem se
                      interesse pelo assunto, ou mesmo a curiosos que desejam entender um pouco mais desta tendência
                      tecnológica. Metodologicamente, o estudo foi realizado através da coleta, leitura e análise de
                      trabalhos científicos publicados, escolhidos por critérios pré-estabelecidos. Além disso, para
                      compreendermos como esta tecnologia tem se desenvolvido, abordaremos sua história, seu surgimento
                      e sua evolução, até chegarmos ao atual panorama. Desta forma, com a leitura desse artigo será
                      possível definir o que é Internet das Coisas, identificar exemplos, conhecer seu contexto
                      histórico, bem como as mudanças que essa tecnologia vem trazendo à realidade em que vivemos.
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="artigo-info"><span><a class="artigo-link" href=""><i
                        class="fa fa-solid fa-file"></i>&nbsp&nbsp A Internet das Coisas (IoT): Tecnologias e
                      Aplicações.</a></span><button class="eye"><i class="fa fa-solid fa-eye"></i></button>
                  <div class="artigo-inf">
                    <p><b>Revista:</b> .</p>
                    <b>Autores:</b> .</p>
                    <b>Publicação:</b> .</p>
                    <b>Rusumo:</b> .</p>
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="artigo-info"><span><a class="artigo-link" href=""><i
                        class="fa fa-solid fa-file"></i>&nbsp&nbsp Internet da Coisas (IoT): Definições e
                      aplicabilidade aos usuários finais.</a></span><button class="eye"><i
                      class="fa fa-solid fa-eye"></i></button>
                  <div class="artigo-inf">
                    <p><b>Revista:</b> .</p>
                    <b>Autores:</b> .</p>
                    <b>Publicação:</b> .</p>
                    <b>Rusumo:</b> .</p>
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="artigo-info"><span><a class="artigo-link" href=""><i
                        class="fa fa-solid fa-file"></i>&nbsp&nbsp Internet das coisas: da teoria à
                      prática.</a></span><button class="eye"><i class="fa fa-solid fa-eye"></i></button>
                  <div class="artigo-inf">
                    <p><b>Revista:</b> .</p>
                    <b>Autores:</b> .</p>
                    <b>Publicação:</b> .</p>
                    <b>Rusumo:</b> .</p>
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="artigo-info"><span><a class="artigo-link"
                      href="https://www.scielo.br/j/gp/a/GwQ7Hd7k6WhVwzDkZ75wFwc/?lang=en"><i
                        class="fa fa-solid fa-file"></i>&nbsp&nbsp Adoption of Industry 4.0
                      technologies:
                      an analysis of small and medium-sized companies in the state of São Paulo,
                      Brazil.</a></span><button class="eye"><i class="fa fa-solid fa-eye"></i></button>
                  <div class="artigo-inf">
                    <p><b>Revista:</b> .</p>
                    <b>Autores:</b> .</p>
                    <b>Publicação:</b> .</p>
                    <b>Rusumo:</b> .</p>
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="artigo-info">
                  <span><a class="artigo-link" href="https://www.scielo.br/j/gp/a/tdqBhbj5TDcztX5y9xzWGNg/?lang=en"><i
                        class="fa fa-solid fa-file"></i>&nbsp&nbsp Towards Industry 4.0: a
                      SWOT-based
                      analysis for companies located in the Sorocaba Metropolitan Region (São
                      Paulo
                      State, Brazil).</a></span><button class="eye"><i class="fa fa-solid fa-eye"></i></button>
                  <div class="artigo-inf">
                    <p><b>Revista:</b> .</p>
                    <b>Autores:</b> .</p>
                    <b>Publicação:</b> .</p>
                    <b>Rusumo:</b> .</p>
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="artigo-info">
                  <span><a class="artigo-link"
                      href="https://repositorio.ipea.gov.br/bitstream/11058/11628/5/Radar_71_Art03_internet.pdf"><i
                        class="fa fa-solid fa-file"></i>&nbsp&nbsp INTERNET
                      DAS
                      COISAS NO BRASIL: BREVE DESCRIÇÃO DE POLÍTICAS E CASOS DE SUCESSO.</a></span><button
                    class="eye"><i class="fa fa-solid fa-eye"></i></button>
                  <div class="artigo-inf">
                    <p><b>Revista:</b> .</p>
                    <b>Autores:</b> .</p>
                    <b>Publicação:</b> .</p>
                    <b>Rusumo:</b> .</p>
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="artigo-info">
                  <span><a class="artigo-link"
                      href="https://www.scielo.br/j/ccedes/a/BLbqJ3HLqnc8WsxtDypsVkB/?format=pdf&lang=pt"><i
                        class="fa fa-solid fa-file"></i>&nbsp&nbsp BIPES:
                      PROGRAMAÇÃO
                      DE
                      DISPOSITIVOS ELETRÔNICOS EM BLOCOS PARA ATIVIDADES EDUCACIONAIS MÃO NA MASSA.</a></span><button
                    class="eye"><i class="fa fa-solid fa-eye"></i></button>
                  <div class="artigo-inf">
                    <p><b>Revista:</b> .</p>
                    <b>Autores:</b> .</p>
                    <b>Publicação:</b> .</p>
                    <b>Rusumo:</b> .</p>
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="artigo-info">
                  <span><a class="artigo-link" href=""><i class="fa fa-solid fa-file"></i>&nbsp&nbsp INTERNET DAS COISAS
                      (IoT) E INDÚSTRIA 4.0: revolucionando o mundo
                      dos negócios,
                      Internet das
                      coisas
                      (IoT):
                      inovação para o agronegócio.</a></span><button class="eye"><i
                      class="fa fa-solid fa-eye"></i></button>
                  <div class="artigo-inf">
                    <p><b>Revista:</b> .</p>
                    <b>Autores:</b> .</p>
                    <b>Publicação:</b> .</p>
                    <b>Rusumo:</b> .</p>
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="artigo-info">
                  <span><a class="artigo-link" href=""><i class="fa fa-solid fa-file"></i>&nbsp&nbsp Internet das coisas
                      (IOT): um estudo exploratório em agronegócios
                      Internet of
                      Things (IOT): na exploratory study in agribusiness.</a></span><button class="eye"><i
                      class="fa fa-solid fa-eye"></i></button>
                  <div class="artigo-inf">
                    <p><b>Revista:</b> .</p>
                    <b>Autores:</b> .</p>
                    <b>Publicação:</b> .</p>
                    <b>Rusumo:</b> .</p>
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="artigo-info">
                  <span><a class="artigo-link" href="A internet das coisas (IOT) com enfoque na saúde;"><i
                        class="fa fa-solid fa-file"></i>&nbsp&nbsp A internet das
                      coisas (IOT) com
                      enfoque na
                      saúde.</a></span><button class="eye"><i class="fa fa-solid fa-eye"></i></button>
                  <div class="artigo-inf">
                    <p><b>Revista:</b> .</p>
                    <b>Autores:</b> .</p>
                    <b>Publicação:</b> .</p>
                    <b>Rusumo:</b> .</p>
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="artigo-info">
                  <span><a class="artigo-link" href="https://www.scielo.br/j/rca/a/DVtW6Gqn88LZ7KSrMG8TnJh/?lang=en"><i
                        class="fa fa-solid fa-file"></i>&nbsp&nbsp Internet
                      das Coisas aplicada a negócios-um estudo bibliométrico, Agro 4.0: Enabling agriculture digital
                      transformation
                      through IoT.</a></span><button class="eye"><i class="fa fa-solid fa-eye"></i></button>
                  <div class="artigo-inf">
                    <p><b>Revista:</b> .</p>
                    <b>Autores:</b> .</p>
                    <b>Publicação:</b> .</p>
                    <b>Rusumo:</b> .</p>
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="artigo-info">
                  <span><a class="artigo-link" href=""><i class="fa fa-solid fa-file"></i>&nbsp&nbsp Uma revisao
                      sistemática da literatura sobre tolerância a falhas
                      em
                      internet das
                      coisas.</a></span><button class="eye"><i class="fa fa-solid fa-eye"></i></button>
                  <div class="artigo-inf">
                    <p><b>Revista:</b> .</p>
                    <b>Autores:</b> .</p>
                    <b>Publicação:</b> .</p>
                    <b>Rusumo:</b> .</p>
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="artigo-info">
                  <span><a class="artigo-link" href=""><i class="fa fa-solid fa-file"></i>&nbsp&nbsp Infraestruturas de
                      Autenticação e de Autorização para Internet das Coisas.</a></span><button class="eye"><i
                      class="fa fa-solid fa-eye"></i></button>
                  <div class="artigo-inf">
                    <p><b>Revista:</b> .</p>
                    <b>Autores:</b> .</p>
                    <b>Publicação:</b> .</p>
                    <b>Rusumo:</b> .</p>
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="artigo-info">
                  <span><a class="artigo-link" href=""><i class="fa fa-solid fa-file"></i>&nbsp&nbsp Segurança da
                      informaçao para internet das coisas
                      (iot): uma abordagem sobre a lei geral de proteçao de dados (lgpd).</a></span><button
                    class="eye"><i class="fa fa-solid fa-eye"></i></button>
                  <div class="artigo-inf">
                    <p><b>Revista:</b> .</p>
                    <b>Autores:</b> .</p>
                    <b>Publicação:</b> .</p>
                    <b>Rusumo:</b> .</p>
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="artigo-info">
                  <span><a class="artigo-link" href=""><i class="fa fa-solid fa-file"></i>&nbsp&nbsp Plataformas para a
                      internet das coisas.</a></span><button class="eye"><i class="fa fa-solid fa-eye"></i></button>
                  <div class="artigo-inf">
                    <p><b>Revista:</b> .</p>
                    <b>Autores:</b> .</p>
                    <b>Publicação:</b> .</p>
                    <b>Rusumo:</b> .</p>
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="artigo-info">
                  <span><a class="artigo-link" href="https://dialnet.unirioja.es/servlet/articulo?codigo=7653186"><i
                        class="fa fa-solid fa-file"></i>&nbsp&nbsp Segurança da Informação para
                      Internet das Coisas (IoT): uma Abordagem sobre a Lei Geral de Proteção de Dados
                      (LGPD), O desafio da privacidade na internet das coisas</a></span><button class="eye"><i
                      class="fa fa-solid fa-eye"></i></button>
                  <div class="artigo-inf">
                    <p><b>Revista:</b> .</p>
                    <b>Autores:</b> .</p>
                    <b>Publicação:</b> .</p>
                    <b>Rusumo:</b> .</p>
                    </p>
                  </div>
                </div>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </section>
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

  </script>

  <script>
    // JavaScript
    const eyeElements = document.querySelectorAll(".eye");

    eyeElements.forEach((eyeElement) => {
      eyeElement.addEventListener("click", () => {
        // Selecione o elemento "artigo-inf" correspondente
        const infoElement = eyeElement.nextElementSibling;

        // Verifique se o elemento está visível ou oculto
        if (infoElement.style.display === "none" || infoElement.style.display === "") {
          // Se estiver oculto, torne visível
          infoElement.style.display = "block";
        } else {
          // Se estiver visível, oculte
          infoElement.style.display = "none";
        }
      });
    });
  </script>

</body>

</html>