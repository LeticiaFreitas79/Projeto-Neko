<!--Objetivo do Código: Formulário para o cliente atualizar seus dados -->
<!--Status do Código: Em correção; editar labels-->

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

    <!--Bloco Menu-->
    <div class="bloco-footer2"></div>
<div class="bloco-cadastro2">
    <div class="bloco-cadastro">

        <!--Separar Destaques-->
        <div class="bloco-separar"></div>

        <div class="bloco-cabecalho">
            <!--Icon de Cadastro-->
            <img src="../view_img/icon_info.png" alt="Gatinho" width="200" height="200">

            <!--Separar Destaques-->
            <div class="bloco-separar"></div>

            <h1 class="titulo">ATUALIZAR DADOS</h1>
        </div><!--Fecha bloco cabecalho-->

            <div class="bloco-campos">
                <form action="" method="POST">

                <!-- Label para atualizar o Nome -->
                <label class="label-title" for="nome">Nome</label>
                    <br>
                <input class="input-cadastro" type="text">
                        
                <br><br>

                <!-- Label para atualizar o CPF -->
                <label class="label-title" for="cpf">CPF</label>
                    <br>
                <input class="input-cadastro" type="text">
                        
                <br><br>
                
                <!-- Label para atualizar o Telefone -->
                <label class="label-title" for="cpf">Telefone</label>
                    <br>
                <input class="input-cadastro" type="email">
                        
                <br><br>

                <!-- Label para atualizar o Email -->
                <label class="label-title" for="cpf">Email</label>
                    <br>
                <input class="input-cadastro" type="email">
                        
                <br><br>

                <!-- Label para atualizar a Senha -->
                <label class="label-title" for="senha">Senha</label>
                    <br>
                <input class="input-cadastro" type="text">
                        
                <br><br><br>

                <!-- Botão para enviar as informações preenchidas -->
                <div class="bloco-btn">
                    <button class="btn-cadastro" type="submit"><!--PHP: cliente_atualizar -->ATUALIZAR DADOS</button>
                </div>

                </form>

                <!--Separar Destaques-->
                <div class="bloco-separar"></div>

            </div><!--Fecha bloco campos-->
        </div><!--Fecha bloco-cadastro-->
        </div><!--Fecha bloco-cadastro2-->
    
    <!--Bloco Rodape-->
    <div class="bloco-footer2"></div>

    <!--JavaScript-->
    <script src="../view_js/bootstrap.bundle.min.js"></script>
  </body>
</body>
</html>
