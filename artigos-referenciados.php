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
      background-color: blue;
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

    #artigos .fa {
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
    <?php
    include('barra-pesquisa.php');
    ?>
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
                    <a class="artigo-link" href="http://conexoes.ifce.edu.br/index.php/conexoes/article/view/1007"><i class="fa fa-solid fa-file"></i>&nbsp&nbsp Internet das
                      coisas:
                      uma breve revisão bibliográfica.</a></span><button class="eye"><i class="fa fa-solid fa-eye"></i></button>
                  <div class="artigo-inf">
                    <div class="artigo-p">
                      <p><b>Revista:</b> 2018 Conexões - Ciência e Tecnologia</p>
                      <p><b>Autores:</b> Moisés Panegassi Fachini, Nathalia Pinheiro Mesquita, Rafael Padovani Oliveira,
                        Patricia Gallo de França</p>
                      <p><b>Rusumo:</b>
                        <br>
                        A tecnologia está em constante mudança e evolução, tendendo cada vez mais a se
                        incorporar em diversos aspectos do nosso cotidiano, não se limitando apenas a computadores; ela
                        vem agregando conectividade a objetos do nosso dia a dia. Este fenômeno é conhecido como
                        “Internet
                        das Coisas” e será objeto de estudo deste artigo. Porém, por se tratar de uma temática atual e
                        que
                        ainda é tendência para os próximos anos, não dispõe, ainda, de uma bibliografia mais consistente
                        e
                        aprofundada, especialmente na língua portuguesa. Essa constatação, motivou a escrita deste
                        artigo
                        que tem como objetivo reunir, sistematicamente, a bibliografia disponível para que, assim,
                        possamos divulgar os conceitos e definições sobre esse tema, com maior facilidade, a quem se
                        interesse pelo assunto, ou mesmo a curiosos que desejam entender um pouco mais desta tendência
                        tecnológica. Metodologicamente, o estudo foi realizado através da coleta, leitura e análise de
                        trabalhos científicos publicados, escolhidos por critérios pré-estabelecidos. Além disso, para
                        compreendermos como esta tecnologia tem se desenvolvido, abordaremos sua história, seu
                        surgimento
                        e sua evolução, até chegarmos ao atual panorama. Desta forma, com a leitura desse artigo será
                        possível definir o que é Internet das Coisas, identificar exemplos, conhecer seu contexto
                        histórico, bem como as mudanças que essa tecnologia vem trazendo à realidade em que vivemos.
                      </p>
                    </div>
                    <div class="pdf-displayer">
                      <br>
                      <iframe id="pdfViewer" width="100%" height="500px" src="pdfs\1007-5725-1-PB.pdf"></iframe>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="artigo-info"><span><a class="artigo-link" href="https://lcv.fee.unicamp.br/images/BTSym-17/Papers/76926.pdf"><i class="fa fa-solid fa-file"></i>&nbsp&nbsp A Internet das Coisas (IoT): Tecnologias e
                      Aplicações.</a></span><button class="eye"><i class="fa fa-solid fa-eye"></i></button>
                  <div class="artigo-inf">
                    <div class="artigo-p">
                      <p><b>Revista:</b> 2017 Brazilian Technology Symposium ISSN 2447-8326. V.1. © 2017 BTSYM</p>
                      <p><b>Autores:</b> J.R. Emiliano Leite, Paulo S. Martins e Edson L. Ursini</p>
                      <p><b>Rusumo:</b>
                        <br>
                        The Internet established itself as a network and an
                        international communication tool, enabling the communication of
                        people and computers. The decrease in cost and size of Internet
                        access components let ordinary devices (e.g. TV sets, refrigerators,
                        cookers, air-conditioning systems, residential alarms, and lamps) to
                        access a broader network. More recently, the Internet of Things (IoT)
                        has appeared allowing the increment of intelligence in the various
                        sectors of the economy. The growing application of the IoT needs to
                        be properly understood due to its potential to increase and exploit
                        real-time data and the wealth of information currently available from
                        sensors. Within this context, this paper presents an overview of this
                        new network environment in terms of its technologies, models,
                        architectures and applications.
                      </p>
                    </div>
                    <div class="pdf-displayer">
                      <br>
                      <iframe id="pdfViewer" width="100%" height="500px" src="pdfs\A INTERNET das COISAS (IoT) Tecnologias e.pdf"></iframe>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="artigo-info"><span><a class="artigo-link" href="https://revistas.udesc.br/index.php/hfd/article/view/2316796308152019049"><i class="fa fa-solid fa-file"></i>&nbsp&nbsp Internet da Coisas (IoT): Definições e
                      aplicabilidade aos usuários finais.</a></span><button class="eye"><i class="fa fa-solid fa-eye"></i></button>
                  <div class="artigo-inf">
                    <div class="artigo-p">
                      <p><b>Revista:</b> v. 8 n. 15 (2019): Human Factors in Design - Edição Especial - P&D Design 2018
                      </p>
                      <p><b>Autores:</b> Patricia Carrion - PUC RJ; Manuela Quaresma - PUC RJ</p>
                      <p><b>Rusumo:</b>
                        <br>
                        A interconexão de dispositivos físicos com capacidades computacionais de detecção e comunicação
                        de dados não é uma concepção nova, porém a compreensão da real aplicabilidade de uma Internet
                        das Coisas (Internet of Things, ou IoT) ainda é incipiente. A Internet das Coisas descreve o que
                        se observa hoje com o crescente número de dispositivos conectados habilitados à internet. Isto
                        é, um estado onde “coisas”, de pequenos objetos a ambientes e cidades, veem-se capacitados a se
                        comunicar uns com os outros, e consequentemente com os humanos presentes no ecossistema. Neste
                        artigo, buscou-se discutir como a realidade de produtos cada vez mais conectados vem
                        transformando o modo como usuários e organizações interagem com tecnologias em níveis novos e
                        distintos. Para tanto, foram traçadas definições acerca da IoT, de suas aplicações voltadas ao
                        usuário final, e de como os serviços IoT, centradas no cliente-usuário, dependem de fatores
                        instituídos ainda no processo de design..
                      </p>
                    </div>
                    <div class="pdf-displayer">
                      <br>
                      <iframe id="pdfViewer" width="100%" height="500px" src="pdfs\Internet da Coisas (IoT) Definições e aplicabilidade aos usuários finais.pdf"></iframe>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="artigo-info"><span><a class="artigo-link" href="https://www.bu.ufmg.br/bu_atual/wp-content/uploads/2017/08/internet-das-coisas.pdf"><i class="fa fa-solid fa-file"></i>&nbsp&nbsp Internet das coisas: da teoria à
                      prática.</a></span><button class="eye"><i class="fa fa-solid fa-eye"></i></button>
                  <div class="artigo-inf">
                    <div class="artigo-p">
                      <p><b>Revista:</b> Departamento de Ciência da Computação
                        Universidade Federal de Minas Gerais (UFMG)
                        Belo Horizonte, MG, Brasil</p>
                      <p><b>Autores:</b> Bruno P. Santos, Lucas A. M. Silva, Clayson S. F. S. Celes, João B. Borges
                        Neto, Bruna S. Peres, Marcos Augusto M. Vieira, Luiz Filipe M. Vieira,
                        Olga N. Goussevskaia e Antonio A. F. Loureiro</p>
                      <p><b>Rusumo:</b>
                        <br>
                        A proliferação de objetos inteligentes com capacidade de sensoriamento, processamento
                        e comunicação tem aumentado nos últimos anos. Neste cenário, a Internet das
                        Coisas (Internet of Things (IoT)) conecta estes objetos à Internet e promove a comunicação
                        entre usuários e dispositivos. A IoT possibilita uma grande quantidade de novas
                        aplicações, as quais tanto a academia quanto a industria podem se beneficiar, tais como
                        cidades inteligentes, saúde e automação de ambientes. Por outro lado, existem diversos
                        desafios que devemos enfrentar no âmbito social, teórico e prático. Para responder
                        a essas questões, precisamos vencer alguns desafios como, por exemplo, restrições dos
                        objetos inteligentes (processamento, memória e fonte de alimentação), largura de banda
                        limitada e dimensão do hardware. Deste modo, devemos explorar novos paradigmas
                        de comunicação, protocolos incluindo questões sobre o endereçamento IP e adaptações
                        para interoperar com a Internet, arquitetura de hardware e projeto de software. Além
                        disso, aplicações de IoT precisam tratar questões como coletar, armazenar, processar e
                        extrair conhecimento de dados obtidos dos objetos inteligentes. O objetivo deste capítulo
                        é descrever o estado-da-arte de IoT discutindo questões teóricas e práticas.
                      </p>
                    </div>
                    <div class="pdf-displayer">
                      <br>
                      <iframe id="pdfViewer" width="100%" height="500px" src="pdfs\Internet das Coisas - da Teoria à Prática.pdf"></iframe>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="artigo-info"><span><a class="artigo-link" href="https://www.scielo.br/j/gp/a/GwQ7Hd7k6WhVwzDkZ75wFwc/?lang=en"><i class="fa fa-solid fa-file"></i>&nbsp&nbsp Adoption of Industry 4.0
                      technologies:
                      an analysis of small and medium-sized companies in the state of São Paulo,
                      Brazil.</a></span><button class="eye"><i class="fa fa-solid fa-eye"></i></button>
                  <div class="artigo-inf">
                    <div class="artigo-p">
                      <p><b>Revista:</b> Gestão & Produção, 29, e122.</p>
                      <p><b>Autores:</b> Antonio Arnaldo Baio Junior, Marcelo José Carrer</p>
                      <p><b>Rusumo:</b>
                        <br>
                        Este artigo teve os objetivos de analisar o nível de adoção e comparar características de
                        adotantes e não adotantes de tecnologias da Indústria 4.0. Dados primários do ano de 2021 foram
                        coletados por meio de um questionário estruturado com 30 pequenas e médias empresas do setor
                        metalúrgico, que operam com processos de usinagem, no estado de São Paulo. Os dados foram
                        analisados por meio de medidas de estatística descritiva e coeficientes de correlação. As
                        tecnologias 4.0 adotadas pelas empresas da amostra foram: Computação em Nuvem (10 empresas),
                        Sistemas de Integração Horizontal e Vertical (5 empresas), Big Data (4 empresas) e Internet das
                        Coisas Industrial (4 empresas). A análise comparativa entre as características das empresas
                        adotantes e não adotantes mostrou que: (I) as adotantes possuem, com frequência muito maior,
                        funcionários com competências em TICs e também contratam mais frequentemente serviços de
                        consultoria em TICs; (II) o uso de sistemas de ERP e MRP é muito maior entre as empresas
                        adotantes de tecnologias da Indústria 4.0; (III) as empresas adotantes participam com mais
                        frequência de programas de cooperação com Universidades, Institutos de Ciência e Tecnologia ou
                        Agências de Fomento à Pesquisa e Desenvolvimento Tecnológico; (IV) as empresas que adotam
                        tecnologias 4.0 possuem maior percepção de vantagem relativa e compatibilidade dessas
                        tecnologias.
                      </p>
                    </div>
                    <div class="pdf-displayer">
                      <br>
                      <iframe id="pdfViewer" width="100%" height="500px" src="pdfs\Adoption of Industry 4.0 technologies an analysis of small and medium-sized companies in the state of São Paulo, Brazil.pdf"></iframe>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="artigo-info">
                  <span><a class="artigo-link" href="https://www.scielo.br/j/gp/a/tdqBhbj5TDcztX5y9xzWGNg/?lang=en"><i class="fa fa-solid fa-file"></i>&nbsp&nbsp Towards Industry 4.0: a
                      SWOT-based
                      analysis for companies located in the Sorocaba Metropolitan Region (São
                      Paulo
                      State, Brazil).</a></span><button class="eye"><i class="fa fa-solid fa-eye"></i></button>
                  <div class="artigo-inf">
                    <div class="artigo-p">
                      <p><b>Revista:</b> Gestão & Produção, 27(3), e5622.</p>
                      <p><b>Autores:</b> Alessandro Silveira Firmino1, Guilherme Xavier Perles, Juliana Veiga
                        Mendes,
                        João Eduardo Azevedo Ramos da Silva, Diogo Aparecido Lopes Silva</p>
                      <p><b>Rusumo:</b>
                        <br>
                        O conceito de Indústria 4.0 foi introduzido pela primeira vez na Alemanha em 2011. Também
                        chamado de 4ª revolução industrial, este conceito é baseado na digitalização e integração entre
                        mídias físicas e digitais com foco na automação dos processos de produção e integração em toda a
                        cadeia de valor. Devido ao recente e rápido desenvolvimento da Indústria 4.0 nos últimos anos,
                        este estudo efetuou uma análise SWOT para avaliar pontos estratégicos para o desenvolvimento e
                        aplicação de tecnologias digitais nas empresas situadas na RMS - Região Metropolitana de
                        Sorocaba (SP, Brasil). Uma revisão de literatura foi desenvolvida na concepção da Indústria 4.0
                        e de suas principais tecnologias: Sistemas Ciber-Físicos, Internet das Coisas, Fábricas
                        Inteligentes e Big Data. Os resultados da revisão de literatura foram utilizados para
                        desenvolver um questionário exploratório (survey), que foi aplicado com representantes de
                        empresas da RMS. Em seguida, aplicou-se uma matriz SWOT, a fim de se gerar planos de ação
                        visando facilitar a inserção da Indústria 4.0 nas empresas da RMS, com base na seleção de
                        estratégias ofensivas, de confronto, reforço e defesa. As estratégias propostas neste trabalho
                        devem ser utilizadas como motivadores envolvendo questões de políticas públicas na RMS, e também
                        poderiam ser expandidas para outras regiões do Brasil como estratégias de curto e longo prazo.
                      </p>
                    </div>
                    <div class="pdf-displayer">
                      <br>
                      <iframe id="pdfViewer" width="100%" height="500px" src="pdfs\towards.pdf"></iframe>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="artigo-info">
                  <span><a class="artigo-link" href="https://repositorio.ipea.gov.br/bitstream/11058/11628/5/Radar_71_Art03_internet.pdf"><i class="fa fa-solid fa-file"></i>&nbsp&nbsp INTERNET
                      DAS
                      COISAS NO BRASIL: BREVE DESCRIÇÃO DE POLÍTICAS E CASOS DE SUCESSO.</a></span><button class="eye"><i class="fa fa-solid fa-eye"></i></button>
                  <div class="artigo-inf">
                    <div class="artigo-p">
                      <p><b>Revista:</b> Radar: Tecnologia, Produção e Comércio Exterior</p>
                      <p><b>Autores:</b> Luis Claudio Kubota, Mauricio Benedeti Rosa</p>
                      <p><b>Rusumo:</b>
                        <br>
                        A internet das coisas (IoT) é composta por redes de comunicação entre dispositivos e a internet
                        mais ampla. Entre
                        potenciais ganhos de produtividade para a economia com a adoção da internet das coisas, pode-se
                        citar a redução:
                        de perdas por extravio de carga, do tempo de internação pós-operatória, de desperdício devido a
                        vazamentos de
                        água ou gases, de perdas no campo devido à infestação de pragas nas colheitas e criação de
                        animais, entre inúmeras
                        outras. O Brasil possui um sistema setorial de inovação desenvolvido, com capacidade para gerar
                        e implementar as
                        tecnologias necessárias. O país desenvolveu também um plano de IoT bem elaborado e com uma boa
                        governança
                        de acompanhamento. Finalmente, várias iniciativas mencionadas no texto anterior mostram o
                        potencial de
                        desenvolvimento da IoT no país.
                      </p>
                    </div>
                    <div class="pdf-displayer">
                      <br>
                      <iframe id="pdfViewer" width="100%" height="500px" src="pdfs\Radar_71_Art03_internet.pdf"></iframe>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="artigo-info">
                  <span><a class="artigo-link" href="https://www.scielo.br/j/ccedes/a/BLbqJ3HLqnc8WsxtDypsVkB/?lang=pt"><i class="fa fa-solid fa-file"></i>&nbsp&nbsp BIPES:
                      PROGRAMAÇÃO
                      DE
                      DISPOSITIVOS ELETRÔNICOS EM BLOCOS PARA ATIVIDADES EDUCACIONAIS MÃO NA MASSA.</a></span><button class="eye"><i class="fa fa-solid fa-eye"></i></button>
                  <div class="artigo-inf">
                    <div class="artigo-p">
                      <p><b>Revista:</b> Cad. CEDES 43 (120) • May-Aug 2023</p>
                      <p><b>Autores:</b> Jorge André Gastmaier Marques,
                        Wesley Flávio Gueta,
                        Tatiana de Figueiredo Pereira Alves Taveira Pazelli,
                        Rafael Vidal Aroca.
                      </p>
                      <p><b>Rusumo:</b>
                        <br>
                        O desenvolvimento de habilidades de programação de computadores é relevante em
                        diversos contextos educacionais. As atividades práticas maker, de robótica e solução de
                        problemas
                        por projetos trazem resultados importantes para alunos que participam desses tipos de atividade.
                        Entretanto, mesmo com tecnologias acessíveis, como o Arduino e o ESP8266, os custos e a
                        dificuldade
                        de instalação podem restringir o acesso a esses recursos educacionais. Nesse sentido, o Projeto
                        Block
                        Based Integrated Platform for Embedded Systems (BIPES) foi concebido no início do ano de 2020
                        com o objetivo de facilitar essas atividades, oferecendo recursos como programação por blocos,
                        suporte a vários dispositivos embarcados e a flexibilidade de dispensar a instalação e
                        configuração
                        de qualquer software adicional. Este artigo descreve os aspectos operacionais do Projeto BIPES e
                        apresenta alguns resultados do seu uso em oficinas e outras atividades. Atualmente, o projeto
                        conta
                        com mais de 10 mil usuários.
                      </p>
                    </div>
                    <div class="pdf-displayer">
                      <br>
                      <iframe id="pdfViewer" width="100%" height="500px" src="pdfs\BIPES - PROGRAMAÇÃO DE DISPOSITIVOS ELETRÔNICOS.pdf"></iframe>
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
                      inovação para o agronegócio.</a></span><button class="eye"><i class="fa fa-solid fa-eye"></i></button>
                  <div class="artigo-inf">
                    <div class="artigo-p">
                      <p><b>Revista:</b> 2018 Conexões - Ciência e Tecnologia</p>
                      <p><b>Autores:</b> Moisés Panegassi Fachini, Nathalia Pinheiro Mesquita, Rafael Padovani Oliveira,
                        Patricia Gallo de França</p>
                      <p><b>Rusumo:</b>
                        <br>
                        A tecnologia está em constante mudança e evolução, tendendo cada vez mais a se
                        incorporar em diversos aspectos do nosso cotidiano, não se limitando apenas a computadores; ela
                        vem agregando conectividade a objetos do nosso dia a dia. Este fenômeno é conhecido como
                        “Internet
                        das Coisas” e será objeto de estudo deste artigo. Porém, por se tratar de uma temática atual e
                        que
                        ainda é tendência para os próximos anos, não dispõe, ainda, de uma bibliografia mais consistente
                        e
                        aprofundada, especialmente na língua portuguesa. Essa constatação, motivou a escrita deste
                        artigo
                        que tem como objetivo reunir, sistematicamente, a bibliografia disponível para que, assim,
                        possamos divulgar os conceitos e definições sobre esse tema, com maior facilidade, a quem se
                        interesse pelo assunto, ou mesmo a curiosos que desejam entender um pouco mais desta tendência
                        tecnológica. Metodologicamente, o estudo foi realizado através da coleta, leitura e análise de
                        trabalhos científicos publicados, escolhidos por critérios pré-estabelecidos. Além disso, para
                        compreendermos como esta tecnologia tem se desenvolvido, abordaremos sua história, seu
                        surgimento
                        e sua evolução, até chegarmos ao atual panorama. Desta forma, com a leitura desse artigo será
                        possível definir o que é Internet das Coisas, identificar exemplos, conhecer seu contexto
                        histórico, bem como as mudanças que essa tecnologia vem trazendo à realidade em que vivemos.
                      </p>
                    </div>
                    <div class="pdf-displayer">
                      <br>
                      <iframe id="pdfViewer" width="100%" height="500px" src="pdfs\INTERNET DAS COISAS (IoT) E INDÚSTRIA 4.0: revolucionando o mundo dos negócios.pdf"></iframe>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="artigo-info">
                  <span><a class="artigo-link" href=""><i class="fa fa-solid fa-file"></i>&nbsp&nbsp Internet das coisas
                      (IOT): um estudo exploratório em agronegócios
                      Internet of
                      Things (IOT): na exploratory study in agribusiness.</a></span><button class="eye"><i class="fa fa-solid fa-eye"></i></button>
                  <div class="artigo-inf">
                    <div class="artigo-p">
                      <p><b>Revista:</b> 2018 Conexões - Ciência e Tecnologia</p>
                      <p><b>Autores:</b> Moisés Panegassi Fachini, Nathalia Pinheiro Mesquita, Rafael Padovani Oliveira,
                        Patricia Gallo de França</p>
                      <p><b>Rusumo:</b>
                        <br>
                        A tecnologia está em constante mudança e evolução, tendendo cada vez mais a se
                        incorporar em diversos aspectos do nosso cotidiano, não se limitando apenas a computadores; ela
                        vem agregando conectividade a objetos do nosso dia a dia. Este fenômeno é conhecido como
                        “Internet
                        das Coisas” e será objeto de estudo deste artigo. Porém, por se tratar de uma temática atual e
                        que
                        ainda é tendência para os próximos anos, não dispõe, ainda, de uma bibliografia mais consistente
                        e
                        aprofundada, especialmente na língua portuguesa. Essa constatação, motivou a escrita deste
                        artigo
                        que tem como objetivo reunir, sistematicamente, a bibliografia disponível para que, assim,
                        possamos divulgar os conceitos e definições sobre esse tema, com maior facilidade, a quem se
                        interesse pelo assunto, ou mesmo a curiosos que desejam entender um pouco mais desta tendência
                        tecnológica. Metodologicamente, o estudo foi realizado através da coleta, leitura e análise de
                        trabalhos científicos publicados, escolhidos por critérios pré-estabelecidos. Além disso, para
                        compreendermos como esta tecnologia tem se desenvolvido, abordaremos sua história, seu
                        surgimento
                        e sua evolução, até chegarmos ao atual panorama. Desta forma, com a leitura desse artigo será
                        possível definir o que é Internet das Coisas, identificar exemplos, conhecer seu contexto
                        histórico, bem como as mudanças que essa tecnologia vem trazendo à realidade em que vivemos.
                      </p>
                    </div>
                    <div class="pdf-displayer">
                      <br>
                      <iframe id="pdfViewer" width="100%" height="500px" src="1007-5725-1-PB.pdf"></iframe>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="artigo-info">
                  <span><a class="artigo-link" href="A internet das coisas (IOT) com enfoque na saúde;"><i class="fa fa-solid fa-file"></i>&nbsp&nbsp A internet das
                      coisas (IOT) com
                      enfoque na
                      saúde.</a></span><button class="eye"><i class="fa fa-solid fa-eye"></i></button>
                  <div class="artigo-inf">
                    <div class="artigo-p">
                      <p><b>Revista:</b> Tecnologia em Projeção, volume 8, número 1, ano 2017. p. 85</p>
                      <p><b>Autores:</b> José Lucas Sousa de Oliveira
                        Rogério oliveira da Silva </p>
                      <p><b>Rusumo:</b>
                        <br>
                        Este artigo aborta pesquisas, conceitos e discursões sobre a internet das
                        coisas na área da saúde, apresentando um pouco da história sobre este paradigma
                        e seus benefícios, destacando as tecnologias envolvidas para que fosse possível. O
                        objetivo do estudo é evidenciar de forma conceitual as diferentes compreensões que
                        o fenômeno adquiriu ao longo do tempo, bem como avaliar a importância de sua
                        utilização na saúde. Ao final observamos marcas de extrema importância que
                        resultou em muitos benefícios, demostrando claramente que o IoT é uma ferramenta
                        que se vale o investimento e que a era digital já faz parte no meio da saúde com um
                        futuro um tanto quanto promissor.
                      </p>
                    </div>
                    <div class="pdf-displayer">
                      <br>
                      <iframe id="pdfViewer" width="100%" height="500px" src="pdfs\A internet das coisas (IOT) com enfoque na saúde.pdf"></iframe>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="artigo-info">
                  <span><a class="artigo-link" href="https://www.scielo.br/j/rca/a/DVtW6Gqn88LZ7KSrMG8TnJh/?lang=en"><i class="fa fa-solid fa-file"></i>&nbsp&nbsp Internet
                      das Coisas aplicada a negócios - um estudo bibliométrico, Agro 4.0: Enabling agriculture digital
                      transformation
                      through IoT.</a></span><button class="eye"><i class="fa fa-solid fa-eye"></i></button>
                  <div class="artigo-inf">
                    <div class="artigo-p">
                      <p><b>Revista:</b> 2018 Conexões - Ciência e Tecnologia</p>
                      <p><b>Autores:</b> Moisés Panegassi Fachini, Nathalia Pinheiro Mesquita, Rafael Padovani Oliveira,
                        Patricia Gallo de França</p>
                      <p><b>Rusumo:</b>
                        <br>
                        A tecnologia está em constante mudança e evolução, tendendo cada vez mais a se
                        incorporar em diversos aspectos do nosso cotidiano, não se limitando apenas a computadores; ela
                        vem agregando conectividade a objetos do nosso dia a dia. Este fenômeno é conhecido como
                        “Internet
                        das Coisas” e será objeto de estudo deste artigo. Porém, por se tratar de uma temática atual e
                        que
                        ainda é tendência para os próximos anos, não dispõe, ainda, de uma bibliografia mais consistente
                        e
                        aprofundada, especialmente na língua portuguesa. Essa constatação, motivou a escrita deste
                        artigo
                        que tem como objetivo reunir, sistematicamente, a bibliografia disponível para que, assim,
                        possamos divulgar os conceitos e definições sobre esse tema, com maior facilidade, a quem se
                        interesse pelo assunto, ou mesmo a curiosos que desejam entender um pouco mais desta tendência
                        tecnológica. Metodologicamente, o estudo foi realizado através da coleta, leitura e análise de
                        trabalhos científicos publicados, escolhidos por critérios pré-estabelecidos. Além disso, para
                        compreendermos como esta tecnologia tem se desenvolvido, abordaremos sua história, seu
                        surgimento
                        e sua evolução, até chegarmos ao atual panorama. Desta forma, com a leitura desse artigo será
                        possível definir o que é Internet das Coisas, identificar exemplos, conhecer seu contexto
                        histórico, bem como as mudanças que essa tecnologia vem trazendo à realidade em que vivemos.
                      </p>
                    </div>
                    <div class="pdf-displayer">
                      <br>
                      <iframe id="pdfViewer" width="100%" height="500px" src="pdfs\INTERNET DAS COISAS APLICADA A NEGÓCIOS - UM ESTUDO BIBLIOMÉTRICO.pdf"></iframe>
                    </div>
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
                    <div class="artigo-p">
                      <p><b>Revista:</b> 2018 Conexões - Ciência e Tecnologia</p>
                      <p><b>Autores:</b> Moisés Panegassi Fachini, Nathalia Pinheiro Mesquita, Rafael Padovani Oliveira,
                        Patricia Gallo de França</p>
                      <p><b>Rusumo:</b>
                        <br>
                        A tecnologia está em constante mudança e evolução, tendendo cada vez mais a se
                        incorporar em diversos aspectos do nosso cotidiano, não se limitando apenas a computadores; ela
                        vem agregando conectividade a objetos do nosso dia a dia. Este fenômeno é conhecido como
                        “Internet
                        das Coisas” e será objeto de estudo deste artigo. Porém, por se tratar de uma temática atual e
                        que
                        ainda é tendência para os próximos anos, não dispõe, ainda, de uma bibliografia mais consistente
                        e
                        aprofundada, especialmente na língua portuguesa. Essa constatação, motivou a escrita deste
                        artigo
                        que tem como objetivo reunir, sistematicamente, a bibliografia disponível para que, assim,
                        possamos divulgar os conceitos e definições sobre esse tema, com maior facilidade, a quem se
                        interesse pelo assunto, ou mesmo a curiosos que desejam entender um pouco mais desta tendência
                        tecnológica. Metodologicamente, o estudo foi realizado através da coleta, leitura e análise de
                        trabalhos científicos publicados, escolhidos por critérios pré-estabelecidos. Além disso, para
                        compreendermos como esta tecnologia tem se desenvolvido, abordaremos sua história, seu
                        surgimento
                        e sua evolução, até chegarmos ao atual panorama. Desta forma, com a leitura desse artigo será
                        possível definir o que é Internet das Coisas, identificar exemplos, conhecer seu contexto
                        histórico, bem como as mudanças que essa tecnologia vem trazendo à realidade em que vivemos.
                      </p>
                    </div>
                    <div class="pdf-displayer">
                      <br>
                      <iframe id="pdfViewer" width="100%" height="500px" src="pdfs\Uma Revisão Sistemática da Literatura Sobre.pdf"></iframe>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="artigo-info">
                  <span><a class="artigo-link" href=""><i class="fa fa-solid fa-file"></i>&nbsp&nbsp Infraestruturas de
                      Autenticação e de Autorização para Internet das Coisas.</a></span><button class="eye"><i class="fa fa-solid fa-eye"></i></button>
                  <div class="artigo-inf">
                    <div class="artigo-p">
                      <p><b>Revista:</b> 2018 Conexões - Ciência e Tecnologia</p>
                      <p><b>Autores:</b> Moisés Panegassi Fachini, Nathalia Pinheiro Mesquita, Rafael Padovani Oliveira,
                        Patricia Gallo de França</p>
                      <p><b>Rusumo:</b>
                        <br>
                        A tecnologia está em constante mudança e evolução, tendendo cada vez mais a se
                        incorporar em diversos aspectos do nosso cotidiano, não se limitando apenas a computadores; ela
                        vem agregando conectividade a objetos do nosso dia a dia. Este fenômeno é conhecido como
                        “Internet
                        das Coisas” e será objeto de estudo deste artigo. Porém, por se tratar de uma temática atual e
                        que
                        ainda é tendência para os próximos anos, não dispõe, ainda, de uma bibliografia mais consistente
                        e
                        aprofundada, especialmente na língua portuguesa. Essa constatação, motivou a escrita deste
                        artigo
                        que tem como objetivo reunir, sistematicamente, a bibliografia disponível para que, assim,
                        possamos divulgar os conceitos e definições sobre esse tema, com maior facilidade, a quem se
                        interesse pelo assunto, ou mesmo a curiosos que desejam entender um pouco mais desta tendência
                        tecnológica. Metodologicamente, o estudo foi realizado através da coleta, leitura e análise de
                        trabalhos científicos publicados, escolhidos por critérios pré-estabelecidos. Além disso, para
                        compreendermos como esta tecnologia tem se desenvolvido, abordaremos sua história, seu
                        surgimento
                        e sua evolução, até chegarmos ao atual panorama. Desta forma, com a leitura desse artigo será
                        possível definir o que é Internet das Coisas, identificar exemplos, conhecer seu contexto
                        histórico, bem como as mudanças que essa tecnologia vem trazendo à realidade em que vivemos.
                      </p>
                    </div>
                    <div class="pdf-displayer">
                      <br>
                      <iframe id="pdfViewer" width="100%" height="500px" src="1007-5725-1-PB.pdf"></iframe>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="artigo-info">
                  <span><a class="artigo-link" href=""><i class="fa fa-solid fa-file"></i>&nbsp&nbsp Segurança da
                      informaçao para internet das coisas
                      (iot): uma abordagem sobre a lei geral de proteçao de dados (lgpd).</a></span><button class="eye"><i class="fa fa-solid fa-eye"></i></button>
                  <div class="artigo-inf">
                    <div class="artigo-p">
                      <p><b>Revista:</b> 2018 Conexões - Ciência e Tecnologia</p>
                      <p><b>Autores:</b> Moisés Panegassi Fachini, Nathalia Pinheiro Mesquita, Rafael Padovani Oliveira,
                        Patricia Gallo de França</p>
                      <p><b>Rusumo:</b>
                        <br>
                        A tecnologia está em constante mudança e evolução, tendendo cada vez mais a se
                        incorporar em diversos aspectos do nosso cotidiano, não se limitando apenas a computadores; ela
                        vem agregando conectividade a objetos do nosso dia a dia. Este fenômeno é conhecido como
                        “Internet
                        das Coisas” e será objeto de estudo deste artigo. Porém, por se tratar de uma temática atual e
                        que
                        ainda é tendência para os próximos anos, não dispõe, ainda, de uma bibliografia mais consistente
                        e
                        aprofundada, especialmente na língua portuguesa. Essa constatação, motivou a escrita deste
                        artigo
                        que tem como objetivo reunir, sistematicamente, a bibliografia disponível para que, assim,
                        possamos divulgar os conceitos e definições sobre esse tema, com maior facilidade, a quem se
                        interesse pelo assunto, ou mesmo a curiosos que desejam entender um pouco mais desta tendência
                        tecnológica. Metodologicamente, o estudo foi realizado através da coleta, leitura e análise de
                        trabalhos científicos publicados, escolhidos por critérios pré-estabelecidos. Além disso, para
                        compreendermos como esta tecnologia tem se desenvolvido, abordaremos sua história, seu
                        surgimento
                        e sua evolução, até chegarmos ao atual panorama. Desta forma, com a leitura desse artigo será
                        possível definir o que é Internet das Coisas, identificar exemplos, conhecer seu contexto
                        histórico, bem como as mudanças que essa tecnologia vem trazendo à realidade em que vivemos.
                      </p>
                    </div>
                    <div class="pdf-displayer">
                      <br>
                      <iframe id="pdfViewer" width="100%" height="500px" src="1007-5725-1-PB.pdf"></iframe>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="artigo-info">
                  <span><a class="artigo-link" href=""><i class="fa fa-solid fa-file"></i>&nbsp&nbsp Plataformas para a
                      internet das coisas.</a></span><button class="eye"><i class="fa fa-solid fa-eye"></i></button>
                  <div class="artigo-inf">
                    <div class="artigo-p">
                      <p><b>Revista:</b> 2018 Conexões - Ciência e Tecnologia</p>
                      <p><b>Autores:</b> Moisés Panegassi Fachini, Nathalia Pinheiro Mesquita, Rafael Padovani Oliveira,
                        Patricia Gallo de França</p>
                      <p><b>Rusumo:</b>
                        <br>
                        A tecnologia está em constante mudança e evolução, tendendo cada vez mais a se
                        incorporar em diversos aspectos do nosso cotidiano, não se limitando apenas a computadores; ela
                        vem agregando conectividade a objetos do nosso dia a dia. Este fenômeno é conhecido como
                        “Internet
                        das Coisas” e será objeto de estudo deste artigo. Porém, por se tratar de uma temática atual e
                        que
                        ainda é tendência para os próximos anos, não dispõe, ainda, de uma bibliografia mais consistente
                        e
                        aprofundada, especialmente na língua portuguesa. Essa constatação, motivou a escrita deste
                        artigo
                        que tem como objetivo reunir, sistematicamente, a bibliografia disponível para que, assim,
                        possamos divulgar os conceitos e definições sobre esse tema, com maior facilidade, a quem se
                        interesse pelo assunto, ou mesmo a curiosos que desejam entender um pouco mais desta tendência
                        tecnológica. Metodologicamente, o estudo foi realizado através da coleta, leitura e análise de
                        trabalhos científicos publicados, escolhidos por critérios pré-estabelecidos. Além disso, para
                        compreendermos como esta tecnologia tem se desenvolvido, abordaremos sua história, seu
                        surgimento
                        e sua evolução, até chegarmos ao atual panorama. Desta forma, com a leitura desse artigo será
                        possível definir o que é Internet das Coisas, identificar exemplos, conhecer seu contexto
                        histórico, bem como as mudanças que essa tecnologia vem trazendo à realidade em que vivemos.
                      </p>
                    </div>
                    <div class="pdf-displayer">
                      <br>
                      <iframe id="pdfViewer" width="100%" height="500px" src="1007-5725-1-PB.pdf"></iframe>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="artigo-info">
                  <span><a class="artigo-link" href="https://dialnet.unirioja.es/servlet/articulo?codigo=7653186"><i class="fa fa-solid fa-file"></i>&nbsp&nbsp Segurança da Informação para
                      Internet das Coisas (IoT): uma Abordagem sobre a Lei Geral de Proteção de Dados
                      (LGPD), O desafio da privacidade na internet das coisas</a></span><button class="eye"><i class="fa fa-solid fa-eye"></i></button>
                  <div class="artigo-inf">
                    <div class="artigo-p">
                      <p><b>Revista:</b> 2018 Conexões - Ciência e Tecnologia</p>
                      <p><b>Autores:</b> Moisés Panegassi Fachini, Nathalia Pinheiro Mesquita, Rafael Padovani Oliveira,
                        Patricia Gallo de França</p>
                      <p><b>Rusumo:</b>
                        <br>
                        A tecnologia está em constante mudança e evolução, tendendo cada vez mais a se
                        incorporar em diversos aspectos do nosso cotidiano, não se limitando apenas a computadores; ela
                        vem agregando conectividade a objetos do nosso dia a dia. Este fenômeno é conhecido como
                        “Internet
                        das Coisas” e será objeto de estudo deste artigo. Porém, por se tratar de uma temática atual e
                        que
                        ainda é tendência para os próximos anos, não dispõe, ainda, de uma bibliografia mais consistente
                        e
                        aprofundada, especialmente na língua portuguesa. Essa constatação, motivou a escrita deste
                        artigo
                        que tem como objetivo reunir, sistematicamente, a bibliografia disponível para que, assim,
                        possamos divulgar os conceitos e definições sobre esse tema, com maior facilidade, a quem se
                        interesse pelo assunto, ou mesmo a curiosos que desejam entender um pouco mais desta tendência
                        tecnológica. Metodologicamente, o estudo foi realizado através da coleta, leitura e análise de
                        trabalhos científicos publicados, escolhidos por critérios pré-estabelecidos. Além disso, para
                        compreendermos como esta tecnologia tem se desenvolvido, abordaremos sua história, seu
                        surgimento
                        e sua evolução, até chegarmos ao atual panorama. Desta forma, com a leitura desse artigo será
                        possível definir o que é Internet das Coisas, identificar exemplos, conhecer seu contexto
                        histórico, bem como as mudanças que essa tecnologia vem trazendo à realidade em que vivemos.
                      </p>
                    </div>
                    <div class="pdf-displayer">
                      <br>
                      <iframe id="pdfViewer" width="100%" height="500px" src="1007-5725-1-PB.pdf"></iframe>
                    </div>
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