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
    <link rel="shortcut icon" href="../view_img/logo_circulo1.png" type="image/png">
    
    <title>Adicionar Endereço | Cliente Clínica Neko</title>
</head>
<body>
    <?php
        include_once ("cliente_menu.php");
    ?>
    
    <!--Separar Destaques-->
    <div class="bloco-separar"></div>

    <div class="bloco-cadastro2">
    <div class="bloco-cadastro">

        <!--Separar Destaques-->
        <div class="bloco-separar"></div>

        <div class="bloco-cabecalho">
            <!--Icon de Cadastro-->
            <img src="../view_img/icon_endereco.png" alt="Gatinho" width="200" height="200">

            <!--Separar Destaques-->
            <div class="bloco-separar"></div>

            <h1 class="titulo">NOVO ENDEREÇO</h1>
        </div><!--Fecha bloco cabecalho-->

            <div class="bloco-campos">
                <form action="" method="POST">

                <!-- Label para atualizar o CEP -->
                <label class="label-title" for="cep">CEP</label>
                    <br>
                <input class="input-cadastro" type="text">
                        
                <br><br>

                <!-- Label para atualizar o Logradouro -->
                <label class="label-title" for="logradouro">Logradouro</label>
                    <br>
                <input class="input-cadastro" type="text">
                        
                <br><br>
                
                <!-- Label para atualizar o Número -->
                <label class="label-title" for="numero">Número</label>
                    <br>
                <input class="input-cadastro" type="number">
                        
                <br><br>

                <!-- Label para atualizar o Email -->
                <label class="label-title" for="cpf">Bairro</label>
                    <br>
                <input class="input-cadastro" type="email">
                        
                <br><br>

                <!-- Label para atualizar a Senha -->
                <label class="label-title" for="senha">Cidade</label>
                    <br>
                <input class="input-cadastro" type="text">

                <br><br>

                <!-- Label para atualizar o Email -->
                <label class="label-title" for="cpf">Complemento</label>
                    <br>
                <input class="input-cadastro" type="email">
                        
                <br><br>

                <!-- Label para atualizar o Email -->
                <label class="label-title" for="cpf">UF</label>
                    <br>
                <input class="input-cadastro" type="email">
                        
                <br><br>

                <!-- Label para atualizar o Email -->
                <label class="label-title" for="cpf">Tipo</label>
                    <br>
                <input class="input-cadastro" type="email">
                        
                <br><br>

                <br><br><br>

                <!-- Botão para enviar as informações preenchidas -->
                <div class="bloco-btn">
                    <button class="btn-cadastro" type="submit" >INSERIR ENDEREÇO</button>
                </div>

                </form>

                <!--Separar Destaques-->
                <div class="bloco-separar"></div>

            </div><!--Fecha bloco campos-->
        </div><!--Fecha bloco-cadastro-->
        </div><!--Fecha bloco-cadastro2-->






    <?php
        include_once ("cliente_rodape.php");
    ?>

    <!--JavaScript-->
    <script src="../view_js/bootstrap.bundle.min.js"></script>

</body>
</html>