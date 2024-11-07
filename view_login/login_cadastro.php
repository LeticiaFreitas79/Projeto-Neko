<!--Objetivo do Código: Página mostrando os campos para o cliente realizar seu cadastro no site-->
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
    
    <title>Cadastro | Clínica Neko</title>
</head>
<body>
    <?php
        include_once ("login_menu.php");
    ?>

    <!--Separar Destaques-->
    <div class="bloco-separar"></div>

    <!-- Informação para realizar o Cadastro  -->
    <div class="bloco-formulario">
        <div class="bloco-cadastro">
            
            <!--Separar Destaques-->
            <div class="bloco-separar"></div>

            <div class="bloco-cabecalho">
                <!--Icon de Cadastro-->
                <img src="../view_img/icon_cadastro.png" alt="Gatinho de Cadastro Miau!!!" width="200" height="200">

                <!--Separar Destaques-->
                <div class="bloco-separar"></div>

                <h1 class="titulo">FAÇA SEU CADASTRO</h1>
                <p class="subtitulo-cadastro"> <strong>Preencha</strong> os <strong>campos abaixo</strong> para criar sua conta no site.<br>
                    É rápido e fácil, não se preocupe!</p>
                </div><!--Fecha bloco cabecalho-->

                <div class="bloco-campos">
                    <form action="../controller/controllerLogin/envia.php" method="POST">
                        <!-- Label para inserir o Nome -->
                        <label  class="label-title" for="nome">NOME</label>
                            <br>
                        <input class="input-cadastro" type="text" name="nome" required title="Digite seu nome">
                    
                        <br><br>

                        <!-- Label para inserir o CPF -->
                        <label class="label-title" for="cpf">CPF</label>
                            <br>
                        <input class="input-cadastro" type="numer" name="cpf" required title="Digite seu CPF">
                        
                        <br><br>

                        <!-- Label para inserir a Data de nascimento -->
                        <label class="label-title" for="data_nascimento">DATA DE NASCIMENTO</label>
                            <br>
                        <input class="input-cadastro" type="date" name="data_nascimento" required>
                        
                        <br><br>

                        <!-- Label para inserir o Telefone -->
                        <label class="label-title" for="telefone">TELEFONE</label>
                            <br>
                        <input class="input-cadastro" type="tel" name="telefone" required title="Digite seu telefone">
                        
                        <br><br>

                        <!-- Label para inserir o Email -->
                        <label class="label-title" for="email">EMAIL</label>
                            <br>
                        <input class="input-cadastro" type="email" name="email" required title="Digite seu Email">
                        
                        <br><br>

                        <!-- Label para inserir a Senha -->
                        <label class="label-title" for="senha">SENHA</label>
                            <br>
                        <input class="input-cadastro" type="password" name="senha" required title="Digite uam senha">
                        
                        <br><br><br>

                        <!-- Botão para enviar as informações preenchidas -->
                        <div class="bloco-btn">
                            <button class="btn-cadastro" type="submit" >CRIAR CONTA</button>
                        </div>

                    </form>

                    <!--Separar Destaques-->
                    <div class="bloco-separar"></div>

                </div><!--Fecha bloco campos-->
            </div>
        </div><!--Fecha bloco-cadastro-->
    </div><!--Fecha bloco-formulario-->

    <!--Separar Destaques-->
    <div class="bloco-separar"></div>

    <?php
        include_once ("login_rodape.php");
    ?>
    
    <!--JavaScript-->
    <script src="../view_js/bootstrap.bundle.min.js"></script>
</body>
</html>