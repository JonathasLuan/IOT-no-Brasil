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
      height: 50vh;
      display: flex;
      padding: 20px;
      color: white;
    }

    #sec1 {
      background-color: #3F51B5;
    }

    #sec2 {
      background-color: white;
    }

    #sec3 {
      background-color: #3F51B5;
    }

    #sec4 {
      background-color: white;
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
                <img src="" alt="">
              </div>
              <div class="canal-title">
                <h2></h2>
              </div>
            </div>
            <div class="video">
              <div class="video-displayer">
                <iframe src="https://www.youtube.com/embed/VIDEO_ID1"></iframe>
              </div>
              <div class="video-info">
                <div class="video-title">
                  <h3></h3>
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
                <img src="" alt="">
              </div>
              <div class="site-title">
                <h2></h2>
              </div>
            </div>
            <div class="description">
              <div class="site-p">
                <p></p>
              </div>
              <div class="site-a">
                <a href="">Link</a>
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
                <img src="" alt="">
              </div>
              <div class="canal-title">
                <h2></h2>
              </div>
            </div>
            <div class="video">
              <div class="video-displayer">
                <iframe src="https://www.youtube.com/embed/VIDEO_ID1"></iframe>
              </div>
              <div class="video-info">
                <div class="video-title">
                  <h3></h3>
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
                <img src="" alt="">
              </div>
              <div class="site-title">
                <h2></h2>
              </div>
            </div>
            <div class="description">
              <div class="site-p">
                <p></p>
              </div>
              <div class="site-a">
                <a href="">Link</a>
              </div>
            </div>
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