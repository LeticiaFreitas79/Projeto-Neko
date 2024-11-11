<!--Objetivo do Código: Exibe a administração de produtos do site.-->
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
    
    <title>Produtos | Neko Administração</title>
</head>
<body>
    <?php
        include_once ("adm_menu.php");
    ?>
<!--Separar Destaques-->
<div class="bloco-separar"></div>
    
    <div class="bloco-titulo">
        <h2 class="titulo">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0"/>
                <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z"/>
            </svg>
            TODOS OS PRODUTOS
        </h2>
    </div> <!--Fecha 'bloco-titulo'-->

    <div class="bloco-tabela">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Data de Validade</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Peso</th>
                    <th scope="col">Qtde. Estoque</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
        <tbody>
            <tr>
                <!--Campos contendo os dados de um produto especifico; Informações puxadas da tabela 'produtos' no Banco de Dados-->
                <th scope="row"><!--PHP: puxar o ID do Produto--></th>
                <td><!--PHP: puxar a Categoria do Produto--></td>
                <td><!--PHP: puxar a Marca do Produto--></td>
                <td><!--PHP: puxar o Nome do Produto--></td>
                <td><!--PHP: puxar o Descrição do Produto--></td>
                <td><!--PHP: puxar o Data de Validade do Produto--></td>
                <td><!--PHP: puxar o Valor do Produto--></td>
                <td><!--PHP: puxar o Peso do Produto--></td>
                <td><!--PHP: puxar a Quantidade em Estoque do Produto--></td>
                <td>
                    <button class="btn-atualizar">
                        <a href="adm_produtoAtualizar.php" target="_blank">ATUALIZAR</a>
                    </button>
                    <button class="btn-deletar">
                        <a href="../controller/controllerProdutos/produto_deletar.php">DELETAR</a>
                    </button>
                </td>
                    <!--PHP: laço de repetição para mostrar todos os Produtos existentes no Banco de Dados-->
            </tr>
        </tbody>
        </table>
    </div><!--Fecha bloco tabela-->

        <!--Botão para inserir novo produto // inserir dentro da div 'bloco-tabela' posteriormente-->
        <button class="btn-adm2">
            <a href="adm_produtoNovo.php" target="_blank">NOVO PRODUTO</a>
        </button>
        
    <?php
        include_once ("adm_rodape.php");
    ?>

    <!--JavaScript-->
    <script src="../view_js/bootstrap.bundle.min.js"></script>

</body>
</html>