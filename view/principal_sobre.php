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
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bandaid" viewBox="0 0 16 16">
            <path d="M14.121 1.879a3 3 0 0 0-4.242 0L8.733 3.026l4.261 4.26 1.127-1.165a3 3 0 0 0 0-4.242M12.293 8 8.027 3.734 3.738 8.031 8 12.293zm-5.006 4.994L3.03 8.737 1.879 9.88a3 3 0 0 0 4.241 4.24l.006-.006 1.16-1.121ZM2.679 7.676l6.492-6.504a4 4 0 0 1 5.66 5.653l-1.477 1.529-5.006 5.006-1.523 1.472a4 4 0 0 1-5.653-5.66l.001-.002 1.505-1.492z"/>
            <path d="M5.56 7.646a.5.5 0 1 1-.706.708.5.5 0 0 1 .707-.708Zm1.415-1.414a.5.5 0 1 1-.707.707.5.5 0 0 1 .707-.707M8.39 4.818a.5.5 0 1 1-.708.707.5.5 0 0 1 .707-.707Zm0 5.657a.5.5 0 1 1-.708.707.5.5 0 0 1 .707-.707ZM9.803 9.06a.5.5 0 1 1-.707.708.5.5 0 0 1 .707-.707Zm1.414-1.414a.5.5 0 1 1-.706.708.5.5 0 0 1 .707-.708ZM6.975 9.06a.5.5 0 1 1-.707.708.5.5 0 0 1 .707-.707ZM8.39 7.646a.5.5 0 1 1-.708.708.5.5 0 0 1 .707-.708Zm1.413-1.414a.5.5 0 1 1-.707.707.5.5 0 0 1 .707-.707"/>
          </svg>
            EQUIPE VETERINÁRIA</h2>
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
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-suit-heart" viewBox="0 0 16 16">
            <path d="m8 6.236-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2 2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92 15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852-.545.515-.93 1.152-1.152 1.595zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.6 7.6 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z"/>
          </svg>
            EQUIPE DE SERVIÇOS</h2>
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