<!--Objetivo do Código: Mostrar os meios de contato da Clínica Neko-->
<!--Status do Código: Concluído e Coemntado-->

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CSS-->
    <link href="../view_css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../view_img/logo_principal.png" type="image/png">
    <link rel="stylesheet" href="../view_css/estilo.css">
    <title>Contato | Clínica Neko</title>
</head>
<body>
    <?php
        include_once ("publico_menu.php");
    ?>

    <!--Banner-->
    <a class="navbar-brand" href="#">
      <img src="../view_img/banner_contato.png" alt="Bootstrap" width="100%" height="100%">
    </a>

    <!--Separar Destaques-->
    <div class="bloco-separar"></div>

    <!--Bloco dos Contatos-->
    <div class="bloco-titulo">
        <h2 class="titulo">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
            <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z"/>
          </svg>
            FALE CONOSCO
        </h2>
        <p class="subtitulo">Estamos aqui para ouvir você! </p>
    </div> <!--Fecha 'bloco-titulo'-->

    <div class="bloco-contato">
      <div class="card" style="width: 18rem;">
        <img src="../view_img/destaque_contato_telefone.png" class="card-imgSobre" alt="...">
        <div class="card-body">
          <h5 class="card-title">TELEFONES</h5>
            <p class="card-text">(11) 98765-4321</p>
            <p class="card-text">(11) 99876-5432</p>
        </div><!--Fecha 'card'-->
      </div><!--Fecha 'card-body'-->

      <div class="card" style="width: 18rem;">
        <img src="../view_img/destaque_contato_email.png" class="card-imgSobre" alt="...">
        <div class="card-body">
          <h5 class="card-title">EMAIL</h5>
            <p class="card-text">contato@nekoclinica.com</p>
            <p class="card-text">atendimento@nekoclinica.com</p>
        </div><!--Fecha 'card'-->
      </div><!--Fecha 'card-body'-->

    <div class="card" style="width: 18rem;">
        <img src="../view_img/destaque_contato_social.png" class="card-imgSobre" alt="...">
        <div class="card-body">
          <h5 class="card-title">REDES SOCIAIS</h5>
            <p class="card-text">@clinica_neko no Instagram</p>
            <p class="card-text">(11) 91234-5678 no Whatsapp</p>
        </div><!--Fecha 'card'-->
      </div><!--Fecha 'card-body'-->
    </div>

    </div><!--Fecha bloco contato-->

    <!--Separar Destaques-->
    <div class="bloco-separar"></div>

    <!--Bloco do Mapa-->
    <div class="bloco-titulo">
        <h2 class="titulo">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
            <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z"/>
          </svg>
            VISITE NOSSA LOJA
        </h2>
        <p class="subtitulo">Nossos horários de atendimento são de segunda a sábado, das 08h às 20h.</p>
    </div> <!--Fecha 'bloco-titulo'-->

    <div class="bloco-mapa">
    <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=800&amp;height=400&amp;hl=en&amp;q=mooca&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://sprunkin.com/">Sprunki</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>
    </div><!--Fecha bloco mapa-->

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