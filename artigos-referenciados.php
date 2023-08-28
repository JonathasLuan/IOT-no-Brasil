<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cabeleireiro</title>
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
      background-color: #ccc;
      padding: 30px;
    }

    #artigos {
      margin: 0 auto;
      width: 1100px;
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
          <ul>
            <li>
              <a href="">Internet das coisas: uma breve revisão bibliográfica;</a><br>
            </li>
            <li>
              A Internet das Coisas (IoT): Tecnologias e Aplicações;<br>
            </li>
            <li>
              Internet da Coisas (IoT): Definições e aplicabilidade aos usuários finais;<br>
            </li>
            <li>
              Internet das coisas: da teoria à
              prática<br>
            </li>
            <li>
              <a href="https://www.scielo.br/j/gp/a/GwQ7Hd7k6WhVwzDkZ75wFwc/?lang=en">Adoption of Industry 4.0
                technologies:
                an analysis of small and medium-sized companies in the state of São Paulo, Brazil</a>,
            </li>
            <li>
              <a href="https://www.scielo.br/j/gp/a/tdqBhbj5TDcztX5y9xzWGNg/?lang=en">Towards Industry 4.0: a SWOT-based
                analysis for companies located in the Sorocaba Metropolitan Region (São
                Paulo
                State, Brazil).</a><br>
            </li>
            <li>
              <a href="https://repositorio.ipea.gov.br/bitstream/11058/11628/5/Radar_71_Art03_internet.pdf">INTERNET DAS
                COISAS NO BRASIL: BREVE DESCRIÇÃO DE POLÍTICAS E CASOS DE SUCESSO;</a>
              <br>
            </li>
            <li>
              <a href="https://www.scielo.br/j/ccedes/a/BLbqJ3HLqnc8WsxtDypsVkB/?format=pdf&lang=pt">BIPES: PROGRAMAÇÃO
                DE
                DISPOSITIVOS ELETRÔNICOS EM BLOCOS PARA ATIVIDADES EDUCACIONAIS MÃO NA MASSA</a>;
            </li>
            <li>
              <a href="">INTERNET DAS COISAS (IoT) E INDÚSTRIA 4.0: revolucionando o mundo dos negócios, Internet das
                coisas
                (IoT):
                inovação para o agronegócio;</a>
            </li>
            <li>
              <a href="">Internet das coisas (IOT): um estudo exploratório em agronegócios Internet of
                Things (IOT): na exploratory study in agribusiness;</a>
            </li>
            <li>
              <a href="A internet das coisas (IOT) com enfoque na saúde;">A internet das coisas (IOT) com enfoque na
                saúde;</a>
            </li>
            <li>
              <a href="https://www.scielo.br/j/rca/a/DVtW6Gqn88LZ7KSrMG8TnJh/?lang=en">Internet
                das Coisas aplicada a negócios-um estudo bibliométrico, Agro 4.0: Enabling agriculture digital
                transformation
                through IoT;</a>
            </li>
            <li>
              <a href="">Uma revisao sistemática da literatura sobre tolerância a falhas em internet das coisas,</a>
            </li>
            <li>
              <a href="">Infraestruturas de
                Autenticação e de Autorização para Internet das Coisas,</a>
            </li>
            <li>
              <a href="">Segurança da informaçao para internet das coisas
                (iot): uma abordagem sobre a lei geral de proteçao de dados (lgpd),</a>
            </li>
            <li>
              <a href="">Plataformas para a internet das coisas,</a>
            </li>
            <li>
              <a href="https://dialnet.unirioja.es/servlet/articulo?codigo=7653186">Segurança da Informação para
                Internet das Coisas (IoT): uma Abordagem sobre a Lei Geral de Proteção de Dados
                (LGPD), O desafio da privacidade na internet das coisas</a>
            </li>
          </ul>
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
</body>

</html>