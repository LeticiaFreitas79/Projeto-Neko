<!--Objetivo do Código: Página mostrando os campos para o cliente/funcionário realizar seu login no site-->
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
    
    <title>Login | Clínica Neko</title>
</head>
<body>
    <?php
        include_once ("login_menu.php");
    ?>

    <!--Separar Destaques-->
    <div class="bloco-separar"></div>

    <!-- Informação para realizar o Cadastro  -->
    <div class="bloco-cadastro">
        
        <!--Separar Destaques-->
        <div class="bloco-separar"></div>

        <div class="bloco-cabecalho">
            <!--Icon de Cadastro-->
            <img src="../view_img/icon_login.png" alt="Gatinho de Cadastro Miau!!!" width="200" height="200">

            <!--Separar Destaques-->
            <div class="bloco-separar"></div>

            <h1 class="titulo">REALIZE SEU LOGIN</h1>
            <p class="subtitulo-cadastro">
                Ao fazer login no site da Clínica Neko, você pode <strong>agendar consultas, exames, cirurgias e serviços</strong>,
                além de <strong>realizar compras</strong> na <strong>NekoShop</strong>.</P>
            </div><!--Fecha bloco cabecalho-->

            <div class="bloco-campos">
                <form action="" method="POST">

                    <!-- Label para inserir o Email -->
                    <label class="label-title" for="email">EMAIL</label>
                        <br>
                    <input class="input-cadastro" type="email" name="email" required>
                    
                    <br><br>

                    <!-- Label para inserir a Senha -->
                    <label class="label-title" for="senha">SENHA</label>
                        <br>
                    <input class="input-cadastro" type="text" name="senha" required>
                    
                    <br><br><br>

                    <!-- Botão para enviar as informações preenchidas -->
                    <div class="bloco-btn">
                        <button class="btn-cadastro" type="submit" >ACESSAR CONTA</button>
                    </div>

                </form>

                <!--Separar Destaques-->
                <div class="bloco-separar"></div>

            </div><!--Fecha bloco campos-->

            <p class="subtitulo-cadastro">
                Ainda <strong>não possui</strong> uma <strong>conta</strong> na Clínica Neko? 
                <a href="login_cadastro.php">Clique aqui</a> e faça seu cadastro.
            </p>

        </div><!--Fecha bloco cabecalho-->
    </div><!--Fecha bloco-cadastro-->

    <!--Separar Destaques-->
    <div class="bloco-separar"></div>

    <?php
        include_once ("login_rodape.php");
    ?>
    
    <!--JavaScript-->
    <script src="../view_js/bootstrap.bundle.min.js"></script>
</body>
</html>

