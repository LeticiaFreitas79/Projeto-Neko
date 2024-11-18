<!--Objetivo do Código: Página mostrando os detalhes de uma compra especifica-->
<!--Status do Código: Em desenvolvimento; add PHP-->


<?php
    include ("../controller/controllerLogin/acessoCliente.php");
?>


<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--CSS-->
    <link href="../view_css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../view_css/estilo.css">
    <link rel="shortcut icon" href="../view_img/logo_cliente.png" type="image/png">
    
    <title>Detalhes de Pedido | Cliente Clínica Neko</title>
</head>
<body>
    <?php
        include_once ("cliente_menu.php");
    ?>

    <!--ITESS DO PEDIDO-->
    <div class="bloco-titulo">
        <h2 class="titulo">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
            </svg>
            ITENS DO PEDIDO N°<!--PHP puxando o número do pedido armazenado no Banco de Dados-->
        </h2>
    </div> <!--Fecha 'bloco-titulo'-->

    <div class="bloco-tabela">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Produto</th>
                    <th scope="col">Valor Unit</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Desconto</th>
                </tr>
            </thead>
        <tbody>
            <tr>
                <th scope="row"><!--PHP: puxa o nome do produto no Banco--></th>
                <td><!--PHP: puxa o valor unitário do produto no Banco--></td>
                <td><!--PHP: puxa a quantidade comprada do produto no Banco--></td>
                <td><!--PHP: puxa o desconto do produto no Banco--></td>
            </tr>
        </tbody>
        </table>
    </div><!--Fecha bloco tabela-->

    
    <!--Separar Destaques-->
    <div class="bloco-separar"></div>
    
    <?php
        include_once ("cliente_rodape.php");
    ?>

    <!--JavaScript-->
    <script src="../view_js/bootstrap.bundle.min.js"></script>
</body>
</html>