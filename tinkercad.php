<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tinkercad</title>
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="serviços-list.css">
  <link rel="stylesheet" href="dark-mode.css">
  <link rel="stylesheet" href="art.css">
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
  <main>
    <div class="artigo">
      <h1>Tinkercad: Uma Janela para o Mundo da Prototipagem Virtual e Aprendizado de Eletrônica</h1>
      <img src="img/Logo-tinkercad-wordmark.svg" alt="">
      <p>No cenário em constante evolução da educação e prototipagem eletrônica, o Tinkercad emergiu como uma ferramenta
        poderosa e acessível que permite que estudantes, entusiastas e profissionais explorem o mundo da eletrônica,
        design 3D e programação de maneira intuitiva e eficaz. Neste artigo, mergulharemos no universo do Tinkercad,
        explorando o que é, como funciona e como essa plataforma revolucionária está moldando o futuro da aprendizagem e
        prototipagem.</p>
      <br>
      <h2>O que é o Tinkercad? </h2>
      <p>O Tinkercad é uma plataforma online de prototipagem e modelagem 3D que combina simplicidade e poder para
        permitir que pessoas de todas as idades e níveis de habilidade criem projetos eletrônicos, impressões 3D e
        simulações virtuais de maneira descomplicada. Fundado em 2011 e adquirido pela Autodesk em 2013, o Tinkercad é
        amplamente utilizado em escolas, universidades e pela comunidade maker em todo o mundo.</p>
      <br>
      <h2>Funcionalidades Principais do Tinkercad: </h2>
      <ol>
        <li>Design 3D: Os usuários podem criar modelos tridimensionais facilmente, usando ferramentas intuitivas de
          arrastar e soltar. Esses modelos podem ser impressos em 3D ou integrados em projetos eletrônicos. </li>
        <li>Eletrônica Simulada: O Tinkercad oferece uma suíte de componentes eletrônicos virtualizados, permitindo que
          os usuários construam circuitos, simulem seu funcionamento e testem conceitos sem a necessidade de hardware
          físico. </li>
        <li>Codificação: A plataforma inclui um ambiente de programação baseado em blocos (similar ao Scratch) para
          controlar dispositivos e criar interações. Também suporta a programação em JavaScript para usuários mais
          avançados. </li>
        <li>Impressão 3D: O Tinkercad permite que os modelos 3D criados sejam exportados para impressão em 3D em
          impressoras compatíveis. </li>
        <li>Compartilhamento e Colaboração: Os projetos podem ser compartilhados facilmente com outras pessoas,
          permitindo colaboração em tempo real. </li>
      </ol>
      <br>
      <h2>Aplicações do Tinkercad: </h2>
      <ol>
        <li>Educação: O Tinkercad é uma ferramenta valiosa para educadores que desejam ensinar conceitos de eletrônica,
          programação e design 3D de forma envolvente e acessível. </li>
        <li>Aprendizado Remoto: Durante a pandemia de COVID-19, o Tinkercad tornou-se uma ferramenta valiosa para o
          ensino à distância, possibilitando que estudantes continuem a explorar e criar em casa. </li>
        <li>Prototipagem Rápida: O Tinkercad é usado por makers e engenheiros para criar protótipos de dispositivos
          eletrônicos e estruturas em 3D antes de construí-los fisicamente. </li>
        <li>Projetos Pessoais: Os entusiastas da eletrônica e do design usam o Tinkercad para dar vida às suas ideias e
          criar projetos pessoais, desde robôs autônomos até modelos 3D criativos. </li>
      </ol>
      <br>
      <h2>Por que o Tinkercad é Importante? </h2>
      <ol>
        <li>Acessibilidade: O Tinkercad é gratuito para uso e não requer hardware caro. Isso o torna acessível a uma
          ampla gama de pessoas, independentemente de suas condições financeiras. </li>
        <li>Facilidade de Uso: A interface intuitiva e as ferramentas de arrastar e soltar tornam o Tinkercad acessível
          até mesmo para iniciantes em eletrônica e design 3D. </li>
        <li>Aprendizado Lúdico: O Tinkercad integra jogos e desafios em suas lições, tornando o aprendizado divertido e
          envolvente. </li>
        <li>Comunidade Ativa: A plataforma possui uma comunidade vibrante de criadores e educadores que compartilham
          projetos, tutoriais e oferecem suporte. </li>
      </ol>
      <br>
      <h2>Conclusão</h2>
      <p>O Tinkercad é muito mais do que uma ferramenta de design e prototipagem; é uma porta de entrada para um mundo
        de criatividade, aprendizado e inovação. Com sua capacidade de simplificar conceitos complexos e tornar a
        eletrônica, o design 3D e a programação acessíveis a todos, o Tinkercad está capacitando uma nova geração de
        inventores e solucionadores de problemas. À medida que o aprendizado baseado em projetos e a prototipagem se
        tornam ainda mais essenciais na educação e no desenvolvimento de habilidades, o Tinkercad continuará a
        desempenhar um papel fundamental na formação do futuro. É uma ferramenta que transcende fronteiras e barreiras,
        capacitando pessoas de todas as idades a transformar suas ideias em realidade.</p>
      <br><br>
      <hr>
      <div id="art-recom">
        <h1>Leituras recomendadas</h1>
        <div id="art-reco">
          <article>
            <a href="oque-é-iot.php"><img src="img/oqueéiot.png" alt="Image 1" /></a>
            <a href="oque-é-iot.php">
              <h2>O que é IoT?</h2>
            </a>
            <p>A Internet das Coisas (IoT) emergiu como uma das tecnologias mais promissoras e transformadoras deste
              século. Ela está mudando fundamentalmente ...</p>
          </article>
          <article>
            <a href="objetos-conectados.php"><img src="img/objconect.jpg" alt="Image 2" /></a>
            <a href="objetos-conectados.php">
              <h2>Objetos Conectados</h2>
            </a>
            <p>A conectividade é um dos pilares fundamentais da Internet das Coisas (IoT) e do mundo da eletrônica, onde
              o Arduino desempenha um papel essencial. A escolha ...</p>
          </article>
        </div>
      </div>
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
  </script>
</body>

</html>