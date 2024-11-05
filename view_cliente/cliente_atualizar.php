<!--Objetivo do Código: -->
<!--Status do Código: Em desenvolvimento-->

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--CSS-->
    <link href="../view_css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../view_css/estilo.css">
    <link rel="shortcut icon" href="../view_img/logo_circulo2.png" type="image/png">
    
    <title>Atualizar Dados | Cliente Clínica Neko</title>
</head>
<body>
    <?php
        include_once ("cliente_menu.php");
    ?>


    <div class="bloco-cadastro">
        <div class="bloco-cabecalho">
            <!--Icon de Cadastro-->
            <img src="../view_img/icon_login.png" alt="Gatinho de Cadastro Miau!!!" width="200" height="200">

            <!--Separar Destaques-->
            <div class="bloco-separar"></div>

            <h1 class="titulo">ATUALIZAR DADOS</h1>
        </div><!--Fecha bloco cabecalho-->

            <div class="bloco-campos">
                <form action="" method="POST">

                <!-- Label para atualizar o Nome -->
                <label class="label-title" for="nome">Nome</label>
                    <br>
                <input class="input-cadastro" type="nome" name="nome" required>
                        
                <br><br>

                <!-- Label para atualizar o CPF -->
                <label class="label-title" for="cpf">CPF</label>
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
                    <button class="btn-cadastro" type="submit" >ATUALIZAR DADOS</button>
                </div>

                </form>

                <!--Separar Destaques-->
                <div class="bloco-separar"></div>

            </div><!--Fecha bloco campos-->
        </div><!--Fecha bloco-cadastro-->

    <?php
        include_once ("cliente_rodape.php");
    ?>

    <!--JavaScript-->
    <script src="../view_js/bootstrap.bundle.min.js"></script>
  </body>
</body>
</html>
