<!--Objetivo do Código: Mostrar todos os produtos da Clínica Neko por categoria-->
<!--Status do Código: Em desenvolvimento-->

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CSS-->
    <link href="../../view_css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../view_css/estilo.css">
    <link rel="shortcut icon" href="../../view_img/logo_circulo2.png" type="image/png">

    <title>Produtos | Clínica Neko</title>
</head>
<body>
    <?php
        include_once ("cat_menu.php");
    ?>

    <!--Banner-->
    <a class="navbar-brand" href="#">
      <img src="../../view_img/banner_produtos.png" alt="Bootstrap" width="100%" height="100%">
    </a>

    <?php
        include_once ("cat_rodape.php");
    ?>
    
    <!--JavaScript-->
    <script src="../../view_js/bootstrap.bundle.min.js"></script>
  </body>
</body>
</html>