<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre nós</title>
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="./sobre.css">
  <link rel="stylesheet" href="dark-mode.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    #agrad {
      float: right;
    }

    h2 {
      text-align: center;
    }
  </style>
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
  <div id="conteudo">
    <div class="main" id="sobreprojeto">
      <p><b>
          <ul>
            <li>JONATHAS LUAN (github_JonathasLuan)</li>
            <li>PAMELA MARTINS</li>
            <li>FERNANDO BATISTA</li>
            <li>CRISTIANA FARIAS</li>
          </ul>
        </b>
      </p>
      <br>
      <h1>IoTudo</h1>
      <p></p>
      <h2>Sobre Nós</h2>

      <p>Bem-vindo ao nosso site dedicado à Internet das Coisas (IoT) no Brasil! Aqui, nossa missão é clara e direta:
        divulgar e democratizar o conhecimento sobre o setor e a tecnologia de Internet das Coisas em solo brasileiro.
        Estamos comprometidos em tornar a IoT acessível e compreensível para todos, abordando temas relevantes que
        promovem o entendimento popular deste assunto fascinante.</p>
      <br>
      <h2>Quem Somos:</h2>

      <p>Somos um grupo apaixonado por tecnologia, inovação e educação. Nosso time é composto por entusiastas,
        especialistas e educadores dedicados ao campo da IoT. Acreditamos que a IoT tem o potencial de revolucionar
        vidas,
        negócios e comunidades, e estamos empenhados em compartilhar esse conhecimento com você.</p>
      <br>
      <h2>Nossa Missão:</h2>

      <p>Nossa missão é dupla. Em primeiro lugar, buscamos disseminar o conhecimento sobre a Internet das Coisas,
        tornando-o acessível a pessoas de todas as origens e níveis de experiência. Queremos que você compreenda como a
        IoT funciona, suas aplicações práticas e seu impacto na sociedade.
        <br>
        Em segundo lugar, estamos empenhados em destacar o cenário da IoT no Brasil. O nosso país está desempenhando
        um
        papel crescente no desenvolvimento e na adoção dessa tecnologia, e queremos destacar as inovações e as
        iniciativas
        que estão acontecendo por aqui.
      </p>
      <br>
      <h2>O Que Oferecemos:</h2>

      - **Artigos Educativos:** Publicamos regularmente artigos informativos e tutoriais que explicam os conceitos
      fundamentais da IoT de maneira clara e acessível.

      - **Notícias e Tendências:** Mantemo-lo atualizado com as últimas notícias e tendências no mundo da IoT,
      especialmente as que têm relevância para o Brasil.

      - **Guias Práticos:** Fornecemos guias práticos passo a passo para ajudá-lo a iniciar seus próprios projetos de
      IoT, desde construir um dispositivo simples até desenvolver soluções avançadas.

      - **Recursos e Ferramentas:** Apresentamos recursos úteis, como plataformas de desenvolvimento, hardware
      recomendado e muito mais, para facilitar sua jornada na IoT.

      **Por que Estamos Aqui:**

      <p>Estamos aqui porque acreditamos que a IoT é uma das tecnologias mais emocionantes e transformadoras de nossa
        era.
        Ela não apenas impulsiona a inovação tecnológica, mas também tem o potencial de resolver desafios significativos
        em áreas como saúde, agricultura, transporte e meio ambiente.
        <br>
        Ao compartilhar nosso conhecimento e paixão pela IoT, esperamos capacitar você a explorar esse campo em
        crescimento, seja como um entusiasta, um estudante, um empreendedor ou um profissional. Queremos fazer parte da
        sua jornada na IoT e estamos ansiosos para explorar o emocionante mundo da Internet das Coisas juntos.
        <br>
        Se você tiver alguma pergunta, sugestão ou desejar entrar em contato, não hesite em nos enviar uma mensagem.
        Estamos aqui para ajudar e aprender com você enquanto continuamos a desvendar os mistérios e as maravilhas da
        IoT
        no Brasil e no mundo. Obrigado por nos visitar!
      </p>

      <p id="agrad">Atenciosamente,
        <br>
        A Equipe IoTudo.
      </p>
    </div>
  </div>

  <?php
  include('footer.php');
  include('set_theme_session.php');
  ?>
</body>

</html>