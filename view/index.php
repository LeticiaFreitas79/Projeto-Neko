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
      <img src="../view_img/banner_home.png" alt="Bootstrap" width="100%" height="100%">
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

    <!--Separar Destaques-->
    <div id="div-separar"></div>

    <!--Veterinário-->
    <div id="div-titulo">
      <h2 class="titulo">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-lungs" viewBox="0 0 16 16">
          <path d="M8.5 1.5a.5.5 0 1 0-1 0v5.243L7 7.1V4.72C7 3.77 6.23 3 5.28 3c-.524 0-1.023.27-1.443.592-.431.332-.847.773-1.216 1.229-.736.908-1.347 1.946-1.58 2.48-.176.405-.393 1.16-.556 2.011-.165.857-.283 1.857-.241 2.759.04.867.233 1.79.838 2.33.67.6 1.622.556 2.741-.004l1.795-.897A2.5 2.5 0 0 0 7 11.264V10.5a.5.5 0 0 0-1 0v.764a1.5 1.5 0 0 1-.83 1.342l-1.794.897c-.978.489-1.415.343-1.628.152-.28-.25-.467-.801-.505-1.63-.037-.795.068-1.71.224-2.525.157-.82.357-1.491.491-1.8.19-.438.75-1.4 1.44-2.25.342-.422.703-.799 1.049-1.065.358-.276.639-.385.833-.385a.72.72 0 0 1 .72.72v3.094l-1.79 1.28a.5.5 0 0 0 .58.813L8 7.614l3.21 2.293a.5.5 0 1 0 .58-.814L10 7.814V4.72a.72.72 0 0 1 .72-.72c.194 0 .475.11.833.385.346.266.706.643 1.05 1.066.688.85 1.248 1.811 1.439 2.249.134.309.334.98.491 1.8.156.814.26 1.73.224 2.525-.038.829-.224 1.38-.505 1.63-.213.19-.65.337-1.628-.152l-1.795-.897A1.5 1.5 0 0 1 10 11.264V10.5a.5.5 0 0 0-1 0v.764a2.5 2.5 0 0 0 1.382 2.236l1.795.897c1.12.56 2.07.603 2.741.004.605-.54.798-1.463.838-2.33.042-.902-.076-1.902-.24-2.759-.164-.852-.38-1.606-.558-2.012-.232-.533-.843-1.571-1.579-2.479-.37-.456-.785-.897-1.216-1.229C11.743 3.27 11.244 3 10.72 3 9.77 3 9 3.77 9 4.72V7.1l-.5-.357z"/>
        </svg>
          VETERINÁRIO
      </h2>

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
      <h2 class="titulo">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
          <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5M4 15h3v-5H4zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zm3 0h-2v3h2z"/>
        </svg>
          LOJA
      </h2>

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
      <h2 class="titulo">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
          <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z"/>
        </svg>
          SERVIÇOS
        </h2>

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