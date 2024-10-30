<!--Objetivo do Código: Página inicial do site onde deve ser exibido os destaques da Clínica Neko-->
<!--Status do Código: Finalizado e Comentado-->

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--CSS-->
    <link href="../view_css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../view_css/estilo.css">
    <link rel="shortcut icon" href="../view_img/logo_circulo2.png" type="image/png">
    
    <title>Home | Clínica Neko</title>
</head>
<body>
    <?php
        include_once ("publico_menu.php");
    ?>

    <!--Banner-->
    <a class="navbar-brand" href="#">
      <img src="../view_img/banner1.png" alt="Bootstrap" width="100%" height="100%">
    </a>

    <!--Quem Somos-->
    <div class="container-quemSomos">
      <div id="container-text-quemSomos">
        <h1 id="titulo">QUEM SOMOS?</h1>
          <br>
        <p id="text-quemSomos">A Clínica Veterinária Neko é um refúgio acolhedor e moderno para animais de estimação, idealizada e fundada por um veterinário apaixonado pelo cuidado com os pets. Localizada em um bairro tranquilo e acessível, nossa clínica é o resultado do sonho de um profissional que decidiu unir sua expertise com seu amor pelos animais em um espaço dedicado ao bem-estar dos nossos amigos de quatro patas. </p>
        <p id="text-quemSomos">Além dos serviços veterinários de alta qualidade, oferecemos um ambiente que promove a tranquilidade e o conforto dos animais durante as consultas. Nossa equipe é composta por profissionais dedicados e carinhosos, que entendem a importância de um atendimento humanizado, garantindo que cada visita à clínica seja uma experiência positiva tanto para os pets quanto para seus tutores.</p>
      </div>
      <div id="container-img-quemSomos">
        <img id="img-quemSomos" src="../view_img/cachorro_borderCollie.jpg">
      </div>
    </div>

    <!--Veterinário-->
    <div id="div-titulo">
      <h2 id="titulo">VETERINÁRIO</h2>
      <!--Container dos Cards-->
      <div class="container-destaqueVet">
        <!--Primeiro Card-->
        <div class="cardDestaque">
        <a href="principal_veterinario.php">
          <img src="../view_img/destaque_socorro.png" class="card-img" alt="...">
        </div>
        <!--Segundo Card-->
        <div class="cardDestaque">
        <a href="principal_veterinario.php">
          <img src="../view_img/destaque_vacina.png" class="card-img" alt="...">
        </div>
        <!--Terceiro Card-->
        <div class="cardDestaque">
        <a href="principal_veterinario.php">
          <img src="../view_img/destaque_consulta.png" class="card-img" alt="...">
        </div>
      </div> <!-- Fecha a 'container-destaqueVet'-->
      <!--Botão Ver Mais-->
      <button type="button" class="btn-verMais">
      <a href="principal_veterinario.php">Clique aqui para ver mais  
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
          <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
        </svg>
      </a>
    </button>
    </div> <!--Fecha 'div-titulo'-->

    <!--Separar Destaques-->
    <div id="div-separar"></div>

    <!--Loja-->
    <div id="div-titulo">
      <h2 id="titulo">LOJA</h2>
      <!--Container dos Cards-->
      <div class="container-destaqueVet">
        <!--Primeiro Card-->
        <div class="cardDestaque">
        <a href="principal_loja.php">
          <img src="../view_img/destaque_racao.png" class="card-img" alt="...">
        </div>
        <!--Segundo Card-->
        <div class="cardDestaque">
        <a href="principal_loja.php">
          <img src="../view_img/destaque_farmacia.png" class="card-img" alt="...">
        </div>
        <!--Terceiro Card-->
        <div class="cardDestaque">
        <a href="principal_loja.php">
          <img src="../view_img/destaque_higiene.png" class="card-img" alt="...">
        </div>
      </div> <!-- Fecha a 'container-destaqueVet'-->
      <!--Botão Ver Mais-->
      <button type="button" class="btn-verMais">
      <a href="principal_loja.php">Clique aqui para ver mais  
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
          <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
        </svg>
      </a>
    </button>
    </div> <!--Fecha 'div-titulo'-->

    <!--Separar Destaques-->
    <div id="div-separar"></div>

    <!--Servicos-->
    <div id="div-titulo">
      <h2 id="titulo">SERVIÇOS</h2>
      <!--Container dos Cards-->
      <div class="container-destaqueVet">
        <!--Primeiro Card-->
        <div class="cardDestaque">
        <a href="principal_servicos.php">
          <img src="../view_img/destaque_banho.png" class="card-img" alt="...">
        </div>
        <!--Segundo Card-->
        <div class="cardDestaque">
        <a href="principal_servicos.php">
          <img src="../view_img/destaque_adestramento.png" class="card-img" alt="...">
        </div>
        <!--Terciro Card-->
        <div class="cardDestaque">
        <a href="principal_servicos.php">
          <img src="../view_img/destaque_hotel.png" class="card-img" alt="...">
        </div>
      </div> <!-- Fecha a 'container-destaqueVet'-->
      <!--Botão Ver Mais-->
      <button type="button" class="btn-verMais">
      <a href="principal_servicos.php">Clique aqui para ver mais  
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
          <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
        </svg>
      </a>
    </button>
    </div> <!--Fecha 'div-titulo'-->
    
    <!--Separar Destaques-->
    <div id="div-separar"></div>
    
    <?php
        include_once ("publico_rodape.php");
    ?>

    <!--JavaScript-->
    <script src="../view_js/bootstrap.bundle.min.js"></script>
  </body>
</body>
</html>