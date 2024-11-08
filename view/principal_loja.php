<!--Objetivo do Código: Mostrar as categorias de produtos da Clínica Neko-->
<!--Status do Código: Em desenvolvimento; add PHP-->

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CSS-->
    <link href="../view_css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../view_css/estilo.css">
    <link rel="shortcut icon" href="../view_img/logo_circulo2.png" type="image/png">

    <title>Loja | Clínica Neko</title>
</head>
<body>
    <?php
        include_once ("publico_menu.php");
    ?>

    <!--Banner-->
    <a class="navbar-brand" href="#">
      <img src="../view_img/banner_loja.png" alt="Bootstrap" width="100%" height="100%">
    </a>


    <!--Separar Destaques-->
    <div class="bloco-separar"></div>


    <!--Todos os Produtos-->
    <div class="bloco-titulo">
        <h2 class="titulo">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
            <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z"/>
          </svg>
            TODOS OS PRODUTOS
        </h2>
    </div> <!--Fecha 'bloco-titulo'-->
    
    <div class="bloco-loja">

      <!--PHP: laço de repetição para mostrar todos os produtos referentes a categoria especifica existente no Banco de Dados-->

        <div class="card" style="width: 18rem;">
            <img src="<!--PHP: puxa a Imagem do Produto-->" class="card-imgSobre" alt="...">
          <div class="card-body">
            <h5 class="card-title"><!--PHP: puxa o Nome do Produto--></h5>
              <p class="card-descricao"><!--PHP: puxa a Descrição do Produto--></p>
              <p class="card-valor">R$<!--PHP: puxa o Valor do Produto--></p>
          </div><!--Fecha 'card-body'-->
        </div><!--Fecha 'card'-->

      <!--PHP: Fecha laço de repetição-->

    </div><!--Fecha bloco Loja-->
  

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