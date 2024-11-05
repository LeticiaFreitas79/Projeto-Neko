<!--Objetivo do Código: Página admisnitrativa para o usuário inserir um novo produto no site-->
<!--Status do Código: Em correção; adicionar direcionamento e centralizar div-->

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--CSS-->
    <link href="../view_css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../view_css/estilo.css">
    <link rel="shortcut icon" href="../view_img/logo_circulo2.png" type="image/png">
    
    <title>Novo Produto | Neko Administração</title>
</head>
<body>
    <?php
        include_once ("adm_menu.php");
    ?>

    <!--Separar Destaques-->
    <div class="bloco-separar"></div>

    <!-- Informação para realizar o Cadastro  -->
    <div class="bloco-cadastro">
        
        <!--Separar Destaques-->
        <div class="bloco-separar"></div>

        <div class="bloco-cabecalho">
            <h1 class="titulo">NOVO PRODUTO</h1>
        </div><!--Fecha bloco cabecalho-->

            <div class="bloco-campos">
                <form action="../controller/controllerProduto/produto_novo.php" method="POST">

                    <!-- Label para inserir o Nome -->
                    <label  class="label-title" for="id_categoria">Categoria</label>
                        <br>
                    <input class="input-cadastro" type="text" name="id_categoria" required>
                
                    <br><br>

                    <!-- Label para inserir o Nome -->
                    <label  class="label-title" for="id_marca">Marca</label>
                        <br>
                    <input class="input-cadastro" type="text" name="id_marca" required>
                
                    <br><br>


                    <!-- Label para inserir o Nome -->
                    <label  class="label-title" for="nome">Nome</label>
                        <br>
                    <input class="input-cadastro" type="text" name="nome" required>
                
                    <br><br>

                    <!-- Label para inserir o CPF -->
                    <label class="label-title" for="descricao">Descrição</label>
                        <br>
                    <input class="input-cadastro" type="text" name="descricao" required title="Digite o CPF">
                    
                    <br><br>

                    <!-- Label para inserir a Data de nascimento -->
                    <label class="label-title" for="data_validade">Data de Validade</label>
                        <br>
                    <input class="input-cadastro" type="date" name="data_validade" required>
                    
                    <br><br>

                    <!-- Label para inserir o Email -->
                    <label class="label-title" for="valor">Valor</label>
                        <br>
                    <input class="input-cadastro" type="number" name="valor" required>
                    
                    <br><br>

                    <!-- Label para inserir a Senha -->
                    <label class="label-title" for="peso">Peso</label>
                        <br>
                    <input class="input-cadastro" type="number" name="peso" required>
                    
                    <br><br>

                    <!-- Label para inserir a Senha -->
                    <label class="label-title" for="qtde_estoque">Quantidade em Estoque</label>
                        <br>
                    <input class="input-cadastro" type="number" name="qtde_estoque" required>

                    <br><br><br>

                    <!-- Botão para enviar as informações preenchidas -->
                    <div class="bloco-btn">
                        <button class="btn-cadastro" type="submit" >INSERIR PRODUTO</button>
                    </div>

                </form>

                <!--Separar Destaques-->
                <div class="bloco-separar"></div>

            </div><!--Fecha bloco campos-->
        </div>
    </div><!--Fecha bloco-cadastro-->  

    <?php
        include_once ("adm_rodape.php");
    ?>

    <!--JavaScript-->
    <script src="../view_js/bootstrap.bundle.min.js"></script>

</body>
</html>

