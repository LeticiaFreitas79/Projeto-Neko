<!--Objetivo do Código: Informa sobre a Clínica Neko; sua história, missão, visão e valores-->
<!--Status do Código: Em correção; os cards da equipe ainda não puxam os dados do Banco-->

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CSS-->
    <link href="../view_css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../view_css/estilo.css">
    <link rel="shortcut icon" href="../view_img/logo_circulo2.png" type="image/png">
    
    <title>Sobre | Clínica Neko</title>
</head>
<body>
    <?php
        include_once ("publico_menu.php");
    ?>

    <!--Banner-->
    <a class="navbar-brand" href="#">
      <img src="../view_img/banner_sobre.png" alt="Bootstrap" width="100%" height="100%">
    </a>


    <!--Bloco da História da Clínica-->
    <div class="bloco-sobre">
        <h1 class="titulo-claro">NOSSA HISTÓRIA</h1>
          <br>
        <p class="text-claro">
          Em 2014, o renomado veterinário Kenji Kimura decidiu transformar um sonho de longa data em realidade:
          abrir sua própria clínica veterinária. Após mais de duas décadas dedicadas ao cuidado de animais em
          diversas instituições e hospitais veterinários, o Dr. Kimura sentia que era o momento certo para criar
          um espaço que refletisse sua filosofia de atendimento e carinho pelos pets. Assim nasceu a Clínica Veterinária Neko. 
        </p>
          <br>
        <p class="text-claro">
          Desde a inauguração, a Clínica Neko se destacou pela excelência em atendimento e pelo cuidado personalizado
          oferecido a cada paciente. O Dr. Kimura implementou uma abordagem holística que considera não apenas as
          necessidades médicas dos animais, mas também seu bem-estar emocional. Ele acreditava firmemente que um ambiente
          positivo e reconfortante contribuía significativamente para a recuperação e saúde geral dos pets. 
        </p>
          <br>
        <p class="text-claro">
          A clínica rapidamente se tornou um pilar na comunidade, reconhecida por sua dedicação e inovação.
          Dr. Kimura e sua equipe, formada por veterinários e profissionais de saúde animal altamente qualificados,
          estabeleceram uma reputação de cuidado excepcional, combinando conhecimento técnico com um toque humano.
          A Clínica Neko se tornou um lugar onde cada animal é tratado como parte da família, e cada tutor é respeitado e ouvido. 
        </p>
    </div> <!--Fecha o Bloco da História-->


    <!--Bloco Missão-->
    <div class="bloco-sobre">
      <h1 class="titulo-claro">MISSÃO</h1>
        <p class="text-claro">
          A missão da Clínica Veterinária Neko é proporcionar cuidados veterinários de excelência, oferecendo diagnósticos precisos
          e tratamentos eficazes com um toque de carinho e respeito. Comprometemo-nos a promover a saúde e o bem-estar dos animais,
          garantindo um atendimento personalizado que atenda às necessidades individuais de cada pet. Buscamos ser um apoio essencial
          para os tutores, fornecendo orientações e soluções para garantir uma vida longa e saudável para seus companheiros de quatro patas. 
        </p>
    </div><!--Fecha 'bloco missão'-->


    <!--Bloco Visão-->
    <div class="bloco-sobre">
      <h1 class="titulo-claro">VISÃO</h1>
        <p class="text-claro">
          Nossa visão é ser reconhecida como a clínica veterinária líder na comunidade, conhecida pela qualidade superior de atendimento
          e pelo compromisso inabalável com a saúde dos animais. Almejamos expandir nosso impacto positivo, promovendo a educação sobre
          cuidados com pets e oferecendo produtos e serviços inovadores que melhoram a qualidade de vida dos animais e fortalecem o vínculo
          entre eles e seus tutores. 
        </p>
    </div><!--Fecha 'bloco visão'-->


    <!--Bloco Valores-->
    <div class="bloco-sobre">
      <h1 class="titulo-claro">VALORES</h1>
        <p class="text-claro">
          Na Clínica Veterinária Neko, valorizamos a empatia, a integridade e a excelência. Acreditamos que cada animal merece um tratamento
          respeitoso e compassivo, e nos esforçamos para oferecer cuidados com a máxima ética e transparência. Estamos dedicados à melhoria
          contínua e ao aprendizado, buscando sempre as melhores práticas e soluções para atender nossos clientes e seus pets com o mais alto
          padrão de qualidade. 
        </p>
    </div><!--Fecha 'bloco valores'-->

     <!--Separar Destaques-->
     <div class="bloco-separar"></div>

    <!--Equipe Veterinária-->

    <div class="bloco-titulo">
        <h2 class="titulo">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
            <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z"/>
          </svg>
            EQUIPE VETERINÁRIA
        </h2>
        <p class="subtitulo">Conheça nossos veterinários competentes! </p>
    </div> <!--Fecha 'bloco-titulo'-->
    
    <div class="equipe">
  
      <div class="card" style="width: 18rem;">
        <img src="../view_img/equipe-gregoriaCasa.png" class="card-imgSobre" alt="...">
      <div class="card-body">
        <h5 class="card-title">Gregório Casa</h5>
          <p class="card-text">
            Veterinário Diagnóstico
          </p>
      </div><!--Fecha 'card'-->
    </div><!--Fecha 'card-body'-->

    <div class="card" style="width: 18rem;">
        <img src="../view_img/equipe-luisaKimura.png" class="card-imgSobre" alt="...">
      <div class="card-body">
        <h5 class="card-title">Luísa Kimura</h5>
          <p class="card-text">
            Veterinária Geral
          </p>
      </div><!--Fecha 'card'-->
    </div><!--Fecha 'card-body'-->

    <div class="card" style="width: 18rem;">
        <img src="../view_img/equipe-emilyGonzaga.png" class="card-imgSobre" alt="...">
      <div class="card-body">
        <h5 class="card-title">Emily Gonzaga</h5>
          <p class="card-text">
            Veterinária Cardiologista
          </p>
      </div><!--Fecha 'card'-->
    </div><!--Fecha 'card-body'-->

    <div class="card" style="width: 18rem;">
        <img src="../view_img/equipe-pedroOliveira.png" class="card-imgSobre" alt="...">
      <div class="card-body">
        <h5 class="card-title">Pedro Oliveira</h5>
          <p class="card-text">
            Auxiliar Veterinário
          </p>
      </div><!--Fecha 'card'-->
    </div><!--Fecha 'card-body'-->

    </div> <!--Fecha 'equipe'-->


    <!--Separar Destaques-->
    <div class="bloco-separar"></div>


    <!--Equipe de Serviços-->
    <div class="bloco-titulo">
        <h2 class="titulo">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
            <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z"/>
          </svg>
            EQUIPE DE SERVIÇOS
        </h2>
        <p class="subtitulo">Conheça nossos cuidadores e adestradores!</p>
    </div> <!--Fecha 'div-titulo'-->
    
    <div class="equipe">
  
      <div class="card" style="width: 18rem;">
        <img src="../view_img/equipe_lauraFernandes.png" class="card-imgSobre" alt="...">
      <div class="card-body">
        <h5 class="card-title">Laura Fernandes</h5>
          <p class="card-text">
            Adestradora
          </p>
      </div><!--Fecha 'card'-->
    </div><!--Fecha 'card-body'-->

    <div class="card" style="width: 18rem;">
        <img src="../view_img/equipe_marianaCarvalho.png" class="card-imgSobre" alt="...">
      <div class="card-body">
        <h5 class="card-title">Mariana Carvalho</h5>
          <p class="card-text">
            Banho e Tosa
          </p>
      </div><!--Fecha 'card'-->
    </div><!--Fecha 'card-body'-->

    </div> <!--Fecha 'equipe'-->

  <!--Separar Destaques-->
  <div class="bloco-separar"></div>

    <?php
        include_once ("publico_rodape.php");
    ?>

    <!--JavaScript-->
    <script src="../view_js/bootstrap.bundle.min.js"></script>
  </body>
</body>
</html>