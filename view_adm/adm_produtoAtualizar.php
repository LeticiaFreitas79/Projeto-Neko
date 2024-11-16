<!--Objetivo do Código: Exibe o formulário para editar um produto selecionado; os dados do produto devem apaerecer nos inputs-->
<!--Status do Código: Em desenvolvimento-->

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--CSS-->
    <link href="../view_css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../view_css/estilo.css">
    <link rel="shortcut icon" href="../view_img/logo_adm.png" type="image/png">
    
    <title>Atualizar Produto | Neko Administração</title>
</head>
<body>
    <?php
        include_once ("adm_menu.php");
    ?>

    <!-- Informação para atualizar Produto -->
    <div class="bloco-formulario">
        <div class="bloco-cadastro">
            
            <!--Separar Destaques-->
            <div class="bloco-separar"></div>

            <div class="bloco-cabecalho">
                <!--Icon de Cadastro-->
                <img src="../view_img/icon_produto.png" alt="Gatinho" width="200" height="200">

                <!--Separar Destaques-->
                <div class="bloco-separar"></div>
                <h1 class="titulo">ATUALIZAR PRODUTO</h1>
            </div><!--Fecha bloco cabecalho-->

                <div class="bloco-campos">
                    <form action="../controller/controllerProduto/produto_atualizar.php" method="POST">

                        <!-- Label para atualizar a Categoria -->
                        <label  class="label-title" for="id_categoria">Categoria</label>
                            <br>
                        <select class="input-cadastro" name="categoria">
                            <option value="" selected disabled hidden>Selecione</option>
                            <option value="Categoria do Produto"><!--PHP: puxar opção de categoria--></option>
                            <!--PHP: Laço de Repetição para puxar todas as Categorias de Produtos existentes no Banco de Dados-->
                        </select>
                    
                        <br><br>

                        <!-- Label para atualizar a Marca -->
                        <label  class="label-title" for="id_marca">Marca</label>
                            <br>
                            <select class="input-cadastro" name="marca">
                            <option value="" selected disabled hidden>Selecione</option>
                            <option value="Marca do Produto"><!--PHP: puxar opção de Marca--></option>
                            <!--PHP: Laço de Repetição para puxar todas as Marcas de Produtos existentes no Banco de Dados-->
                        </select>
                    
                        <br><br>

                        <!-- Label para atualizar o Nome -->
                        <label  class="label-title" for="nome">Nome</label>
                            <br>
                        <input class="input-cadastro" type="text" name="nome" required>
                    
                        <br><br>

                        <!-- Label para atualizar o Descrição -->
                        <label class="label-title" for="descricao">Descrição</label>
                            <br>
                        <input class="input-cadastro" type="text" name="descricao" required title="Digite o CPF">
                        
                        <br><br>

                        <!-- Label para atualizar a Data de Validade -->
                        <label class="label-title" for="data_validade">Data de Validade</label>
                            <br>
                        <input class="input-cadastro" type="date" name="data_validade" required>
                        
                        <br><br>

                        <!-- Label para atualizar o Valor -->
                        <label class="label-title" for="valor">Valor</label>
                            <br>
                        <input class="input-cadastro" type="number" name="valor" required>
                        
                        <br><br>

                        <!-- Label para atualizar o Peso -->
                        <label class="label-title" for="peso">Peso</label>
                            <br>
                        <input class="input-cadastro" type="number" name="peso" required>
                        
                        <br><br>

                        <!-- Label para atualizar a Quantidade em Estoque -->
                        <label class="label-title" for="qtde_estoque">Quantidade em Estoque</label>
                            <br>
                        <input class="input-cadastro" type="number" name="qtde_estoque" required>

                        <br><br><br>

                        <!-- Botão para enviar as informações preenchidas -->
                        <div class="bloco-btn">
                            <button class="btn-cadastro" type="submit">ATUALIZAR PRODUTO</button>
                        </div>

                    </form>

                    <!--Separar Destaques-->
                    <div class="bloco-separar"></div>

                </div><!--Fecha bloco campos-->
            </div>
        </div><!--Fecha bloco-cadastro-->
    </div><!--Fecha bloco-formulario-->  

    <?php
        include_once ("adm_rodape.php");
    ?>

    <!--JavaScript-->
    <script src="../view_js/bootstrap.bundle.min.js"></script>

</body>
</html>