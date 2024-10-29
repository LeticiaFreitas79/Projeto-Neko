<!--Objetivo do Código: Página inicial do site onde deve ser exibido os destaques da Clínica Neko-->
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
      <div id="container-text-quemSomos" style="width: 50%; height: 50%;">
        <p>A Clínica Veterinária Neko é um refúgio acolhedor e moderno para animais de estimação, idealizada e fundada por um veterinário apaixonado pelo cuidado com os pets. Localizada em um bairro tranquilo e acessível, nossa clínica é o resultado do sonho de um profissional que decidiu unir sua expertise com seu amor pelos animais em um espaço dedicado ao bem-estar dos nossos amigos de quatro patas. </p>
        </div>
      <div id="container-img-quemSomos" style="width: 50%; height: 50%;">
        <img src="../view_img/cachorro_cinza.jpg" class="img-quemSomos">
      </div>
    </div>

    <!--Veterinário-->
      <div id="Card01" class="card" style="width: 18rem;">
        <img src="../view_img/cachorro-estetoscopio.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">PRONTO SOCORRO 24H</p>
          </div>
      </div>

    <!--Loja-->
    <!--Servicos-->
    


    <!--JavaScript-->
    <script src="../view_js/bootstrap.bundle.min.js"></script>
  </body>
</body>
</html>