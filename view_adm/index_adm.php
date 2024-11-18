<!--Objetivo do Código: Exibe as áreas administrativas do site.-->
<!--Status do Código: Concluído-->


<?php
    include ("../controller/controllerLogin/acessoAdm.php");
?>


<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--CSS-->
    <link href="../view_css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../view_css/estilo.css">
    <link rel="shortcut icon" href="../view_img/logo_adm.png" type="image/png">
    
    <title>Home | Neko Administração</title>
</head>
<body>
    <?php
        include_once ("adm_menu.php");
    ?>

    <div class="bloco-adm">

        <div class="card" style="width: 18rem;">
            <img src="../view_img/destaque_adm_usuario.png" class="card-imgSobre" alt="...">
        <div class="card-body">
            <h5 class="card-title">USUÁRIOS</h5>
                <button class="btn-adm">
                    <a href="adm_usuarios.php">Listar</a>
                </button>
        </div><!--Fecha 'card'-->
        </div><!--Fecha 'card-body'-->

        <div class="card" style="width: 18rem;">
            <img src="../view_img/destaque_adm_produtos.png" class="card-imgSobre" alt="...">
        <div class="card-body">
            <h5 class="card-title">PRODUTOS</h5>
                <button class="btn-adm">
                    <a href="adm_produtos.php">Listar</a>
                </button>
        </div><!--Fecha 'card'-->
        </div><!--Fecha 'card-body'-->

        <div class="card" style="width: 18rem;">
            <img src="../view_img/destaque_adm_cliente.png" class="card-imgSobre" alt="...">
        <div class="card-body">
            <h5 class="card-title">CLIENTES</h5>
                <button class="btn-adm">
                    <a href="adm_cliente.php">Listar</a>

                </button>
        </div><!--Fecha 'card'-->
        </div><!--Fecha 'card-body'-->

    </div><!--Fecha bloco adm-->

    <div class="bloco-btnCliente">
        <button class="btn-cliente">
            <a href="../controller/controllerLogin/logout.php">SAIR</a>
        </button>
    </div><!--Fecha bloco-btnCliente-->

    <?php
        include_once ("adm_rodape.php");
    ?>

    <!--JavaScript-->
    <script src="../view_js/bootstrap.bundle.min.js"></script>

</body>
</html>