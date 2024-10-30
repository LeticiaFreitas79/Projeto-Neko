<!--Objetivo do Código: Informa sobre a Clínica Neko; sua história, missão, visão e valores-->
<!--Status do Código: Em desenvolvimento-->

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
      <img src="../view_img/banner2.png" alt="Bootstrap" width="100%" height="100%">
    </a>

    <!--Carrossel Apresentando a Clínica Neko-->
    <div id="caixa-carrossel">
    <div id="carrossel"> <!--Identificador do Carrossel-->

      <div id="caroselCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>

        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../view_img/banner-carrossel1.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>INICIO DE UMA JORNADA</h5>
                <p>Em 2014, o renomado veterinário Kenji Kimura decidiu transformar um sonho de longa data em realidade: abrir sua própria clínica veterinária. Após mais de duas décadas dedicadas ao cuidado de animais em diversas instituições e hospitais veterinários, o Dr. Kimura sentia que era o momento certo para criar um espaço que refletisse sua filosofia de atendimento e carinho pelos pets. Assim nasceu a Clínica Veterinária Neko. O Dr. Kenji Kimura começou sua carreira com uma profunda paixão por animais e uma determinação em oferecer o melhor cuidado possível. Durante sua trajetória, ele acumulou vasta experiência e construiu uma reputação sólida na comunidade veterinária. No entanto, ele sempre sentiu que a estrutura das clínicas tradicionais limitava sua capacidade de oferecer um atendimento verdadeiramente personalizado e acolhedor. 
Com o desejo de criar um ambiente que reunisse suas ideias sobre um atendimento veterinário ideal, o Dr. Kimura decidiu abrir a Clínica Neko. Ele escolheu um local estratégico no bairro da Mooca em São Paulo, projetando o espaço com um cuidado especial para garantir que fosse tanto funcional quanto acolhedor. </p>
              </div>
          </div>

        <div class="carousel-item">
          <img src="../view_img/banner-carrossel2.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>CONSTRUINDO A CLÍNICA</h5>
              <p>A construção da Clínica Veterinária Neko foi uma jornada meticulosa. Dr. Kimura envolveu-se em cada detalhe, desde a escolha dos equipamentos de última geração até o design dos espaços. A clínica foi planejada para ser um local onde tanto os pets quanto seus tutores se sentissem confortáveis e seguros. As salas de atendimento foram projetadas para serem tranquilas e bem iluminadas, enquanto a área de espera foi equipada com assentos confortáveis e uma decoração relaxante. Desde a inauguração, a Clínica Neko se destacou pela excelência em atendimento e pelo cuidado personalizado oferecido a cada paciente. O Dr. Kimura implementou uma abordagem holística que considera não apenas as necessidades médicas dos animais, mas também seu bem-estar emocional. Ele acreditava firmemente que um ambiente positivo e reconfortante contribuía significativamente para a recuperação e saúde geral dos pets. 
A clínica rapidamente se tornou um pilar na comunidade, reconhecida por sua dedicação e inovação. Dr. Kimura e sua equipe, formada por veterinários e profissionais de saúde animal altamente qualificados, estabeleceram uma reputação de cuidado excepcional, combinando conhecimento técnico com um toque humano. A Clínica Neko se tornou um lugar onde cada animal é tratado como parte da família, e cada tutor é respeitado e ouvido. </p>
            </div>
        </div>

        <div class="carousel-item">
          <img src="../view_img/banner-carrossel3.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>LEGADO E FUTURO</h5>
              <p>Com o tempo, a Clínica Neko expandiu seus serviços e se envolveu ainda mais com a comunidade. Além de atender casos clínicos e emergenciais, a clínica iniciou campanhas de vacinação e eventos educativos sobre cuidados com os animais. Dr. Kimura sempre acreditou na importância de uma abordagem comunitária e trabalhou para garantir que a Clínica Neko contribuísse para a saúde e bem-estar dos animais e de seus tutores. Hoje, a Clínica Veterinária Neko é um exemplo de dedicação e paixão pelo cuidado animal. O legado de Dr. Kenji Kimura continua a inspirar e guiar a equipe, mantendo o compromisso com a excelência e o carinho que são a marca registrada da clínica. A história da Clínica Neko é uma prova de que com visão, dedicação e amor, é possível criar um espaço que realmente faça a diferença na vida dos animais e de seus tutores. 
E assim, a Clínica Veterinária Neko segue sua missão, oferecendo cuidado de primeira classe e reafirmando o compromisso de Dr. Kimura com a saúde e a felicidade dos pets e suas famílias. </p>
            </div>
        </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>

      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>

  </div>
</div>
</div>

    <?php
        include_once ("publico_rodape.php");
    ?>

    <!--JavaScript-->
    <script src="../view_js/bootstrap.bundle.min.js"></script>
  </body>
</body>
</html>