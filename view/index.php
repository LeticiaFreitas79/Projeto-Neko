<!--Objetivo do Código: Página inicial do site onde deve ser exibido os destaques da Clínica Neko-->
<!--Status do Código: Concluído e Comentado-->

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--CSS-->
    <link href="../view_css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../view_css/estilo.css">
    <link rel="shortcut icon" href="../view_img/logo_principal.png" type="image/png">
    
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
    <!--Bloco Quem Somos-->
    <div class="bloco-quemSomos">
          <h1 class="titulo-claro">QUEM SOMOS?</h1>
            <p class="text-claro">
              A Clínica Veterinária Neko é um refúgio acolhedor e moderno para animais de estimação, idealizada
              e fundada por um veterinário apaixonado pelo cuidado com os pets. Localizada em um bairro tranquilo
              e acessível, nossa clínica é o resultado do sonho de um profissional que decidiu unir sua expertise
              com seu amor pelos animais em um espaço dedicado ao bem-estar dos nossos amigos de quatro patas.
            </p>
            <p class="text-claro">
              Além dos serviços veterinários de alta qualidade, oferecemos um ambiente que promove a tranquilidade e o
              conforto dos animais durante as consultas. Nossa equipe é composta por profissionais dedicados e carinhosos,
              que entendem a importância de um atendimento humanizado, garantindo que cada visita à clínica seja uma experiência
              positiva tanto para os pets quanto para seus tutores.
            </p>
        </div><!--Fecha o bloco Quem Somos?-->

    <!--Separar Destaques-->
    <div class="bloco-separar"></div>

    <!--Veterinário-->
    <div class="bloco-titulo">
      <h2 class="titulo">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
          <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z"/>
        </svg>
          VETERINÁRIO
      </h2>
      <p class="subtitulo">Serviços veterinários mais procurados</p>

      <!--Bloco dos Cards-->
      <div class="bloco-destaqueVet">
        <!--Primeiro Card - Pronto Socorro-->
        <div class="card-destaque">
          <a href="principal_veterinario.php#bloco-prontoSocorro">
            <img src="../view_img/destaque_socorro.png" class="card-img" alt="...">
          </div>
        <!--Segundo Card - Consultas-->
        <div class="card-destaque">
        <a href="principal_veterinario.php#bloco-consultas">
          <img src="../view_img/destaque_consulta.png" class="card-img" alt="...">
        </div>
        <!--Terceiro Card - Exames-->
        <div class="card-destaque">
        <a href="principal_veterinario.php#bloco-exames">
          <img src="../view_img/destaque_exames.png" class="card-img" alt="...">
        </div>
      </div> <!-- Fecha a 'bloco-destaqueVet'-->
      <!--Botão Ver Mais-->
      <button type="button" class="btn-verMais">
      <a href="principal_veterinario.php">Clique aqui para ver mais  
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
          <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
        </svg>
      </a>
    </button>
    </div> <!--Fecha 'bloco-titulo'-->

    <!--Separar Destaques-->
    <div class="bloco-separar"></div>

    <!--Loja-->
    <div class="bloco-titulo">
      <h2 class="titulo">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
          <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z"/>
        </svg>
          LOJA
      </h2>
      <p class="subtitulo">Categorias mais procuradas</p>

      <!--Container dos Cards-->
      <div class="bloco-destaqueVet">
        <!--Primeiro Card - Ração-->
        <div class="card-destaque">
        <a href="../view_categorias/categoria_racoes.php">
          <img src="../view_img/destaque_racao.png" class="card-img" alt="...">
        </div>
        <!--Segundo Card - Farmácia-->
        <div class="card-destaque">
        <a href="../view_categorias/categoria_remedios.php">
          <img src="../view_img/destaque_farmacia.png" class="card-img" alt="...">
        </div>
        <!--Terceiro Card - Higiene-->
        <div class="card-destaque">
        <a href="../view_categorias/categoria_higiene.php">
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
    </div> <!--Fecha 'bloco-titulo'-->

    <!--Separar Destaques-->
    <div class="bloco-separar"></div>

    <!--Servicos-->
    <div class="bloco-titulo">
      <h2 class="titulo">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
          <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z"/>
        </svg>
          SERVIÇOS
        </h2>
        <p class="subtitulo">Serviços mais procurados</p>

      <!--Container dos Cards-->
      <div class="bloco-destaqueVet">
        <!--Primeiro Card - Banho-->
        <div class="card-destaque">
        <a href="principal_servicos.php#bloco-banhoTosa">
          <img src="../view_img/destaque_banho.png" class="card-img" alt="...">
        </div>
        <!--Segundo Card - Adestramento-->
        <div class="card-destaque">
        <a href="principal_servicos.php#bloco-adestramento">
          <img src="../view_img/destaque_adestramento.png" class="card-img" alt="...">
        </div>
        <!--Terciro Card - Vacinação-->
        <div class="card-destaque">
        <a href="principal_servicos.php#bloco-vacina">
          <img src="../view_img/destaque_vacinacao.png" class="card-img" alt="...">
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
    </div> <!--Fecha 'bloco-titulo'-->
    
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