<!--Objetivo do Código: Página mostrando os campos para o cliente realizar seu cadastro no site-->
<!--Status do Código: Em análise-->

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
    <div class="bloco-cadastro">
        <h1 class="titulo">FAÇA SEU CADASTRO</h1>
            <form action="../controller/controllerLogin/envia.php" method="POST">

                <!-- Label para inserir o Nome -->
                <label class="label-cadastro" for="nome">Nome:</label>
                    <br>
                <input type="text" name="nome" required>
                
                <br><br>

                <!-- Label para inserir o CPF -->
                <label class="label-cadastro" for="cpf">CPF:</label>
                    <br>
                <input type="text" name="cpf" required title="Digite o CPF">
                
                <br><br>

                <!-- Label para inserir a Data de nascimento -->
                <label class="label-cadastro" for="data_nascimento">Data de Nascimento:</label>
                    <br>
                <input type="date" name="data_nascimento" required>
                
                <br><br>

                <!-- Label para inserir o Email -->
                <label class="label-cadastro" for="email">Email:</label>
                    <br>
                <input type="email" name="email" required>
                
                <br><br>

                <!-- Label para inserir a Senha -->
                <label class="label-cadastro" for="senha">Senha:</label>
                    <br>
                <input type="text" name="senha" required>
                
                <br><br>

                <!-- Botão para enviar as informações preenchidas -->
                <button class="btn-cadastro" type="submit" >CRIAR CONTA</button>
            </form>
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

