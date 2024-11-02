<!--Objetivo do Código: Exibe as áreas administrativas do site.-->
<!--Status do Código: Concluído-->

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--CSS-->
    <link href="../view_css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../view_css/estilo.css">
    <link rel="shortcut icon" href="../view_img/logo_circulo1.png" type="image/png">
    
    <title>Home | Neko Administração</title>
</head>
<body>
    <?php
        include_once ("adm_menu.php");
    ?>

    <div class="bloco-adm">
        <div class="bloco-adm-user">
            <div class="bloquinho-titulo">
                <h1 class="titulo-claro">USUÁRIOS</h1>
            </div>
            <div class="bloco-separar"></div>
            <div class="bloco-btn">
                <button class="btn-adm">
                    <a href="../controller/controllerUsuario/usuario_novo.php">Inserir</a>
                </button>
                <button class="btn-adm">
                    <a href="adm_usuarios.php">Listar</a>
                </button>
            </div>
        </div><!--Fecha bloco adm user-->   

        <div class="bloco-adm-produtos">
            <div class="bloquinho-titulo">
                <h1 class="titulo-claro">PRODUTOS</h1>
            </div>
            <div class="bloco-separar"></div>
            <div class="bloco-btn">
                <button class="btn-adm">
                    <a href="../controller/controllerProdutos/produto_novo.php">Inserir</a>
                </button>
                <button class="btn-adm">
                    <a href="adm_produtos.php">Listar</a>
                </button>
            </div>
        </div><!--Fecha bloco adm produtos-->   

    </div>

    <?php
        include_once ("adm_rodape.php");
    ?>