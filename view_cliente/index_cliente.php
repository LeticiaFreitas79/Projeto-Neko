<!--Objetivo do Código: Página inicial do site onde deve ser exibido os destaques da Clínica Neko-->
<!--Status do Código: Concluído e Comentado-->

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--CSS-->
    <link href="../view_css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../view_css/estilo.css">
    <link rel="shortcut icon" href="../view_img/logo_circulo2.png" type="image/png">
    
    <title>Suas Informações | Cliente Clínica Neko</title>
</head>
<body>
    <?php
        include_once ("cliente_menu.php");
    ?>

    <!--INFORMAÇÕES PRINCIPAIS-->
    <div class="bloco-titulo">
        <h2 class="titulo">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
            </svg>
            SUAS INFORMAÇÕES
        </h2>
    </div> <!--Fecha 'bloco-titulo'-->

    <div class="bloco-clienteInfo">
        <h2 class="titulo-clienteInfo">Nome do Cliente</h2>
        <p class="text-clienteInfo">CPF do Cliente</p>
        <p class="text-clienteInfo">Email do Cliente</p>
        <p class="text-clienteInfo">Telefone do Cliente</p>

        <div class="bloco-btnCliente">
            <button class="btn-cliente">
                <a href="<!--link para cliente_atualizar-->">EDITAR</a>
            </button>
        </div><!--Fecha bloco-btnCliente-->

    </div><!--Fecha bloco-clienteInfo-->

    <!--ENDEREÇO-->
    <div class="bloco-clienteInfo">
        <h2 class="titulo-clienteInfo">ENDEREÇO</h2>
        <p class="text-clienteInfo">CEP</p>
        <p class="text-clienteInfo">Logradouro</p>
        <p class="text-clienteInfo">Número</p>
        <p class="text-clienteInfo">Bairro</p>
        <p class="text-clienteInfo">Cidade</p>
        <p class="text-clienteInfo">Complemento</p>
        <p class="text-clienteInfo">UF</p>
        <p class="text-clienteInfo">Tipo</p>

        <div class="bloco-btnCliente">
            <button class="btn-cliente">
                <a href="<!--link para cliente_atualizar-->">EDITAR</a>
            </button>
            <button class="btn-cliente">
                <a href="<!--link para cliente_atualizar-->">EXCLUIR</a>
            </button>
            <button class="btn-cliente">
                <a href="<!--link para cliente_atualizar-->">NOVO</a>
            </button>
        </div><!--Fecha bloco-btnCliente-->

    </div><!--Fecha bloco-clienteInfo-->


    <!--Separar Destaques-->
    <div class="bloco-separar"></div>


    <!--PETS-->
    <div class="bloco-titulo">
        <h2 class="titulo">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
            </svg>
            INFORMAÇÕES DO(s) PET(s)
        </h2>
    </div> <!--Fecha 'bloco-titulo'-->

    <div class="bloco-clienteInfo">
        <h2 class="titulo-clienteInfo">Nome do Pet</h2>
        <p class="text-clienteInfo">Raça</p>
        <p class="text-clienteInfo">Idade</p>
        <p class="text-clienteInfo">Peso</p>

        <div class="bloco-btnCliente">
            <button class="btn-cliente">
                <a href="<!--link para cliente_atualizar-->">EDITAR</a>
            </button>
            <button class="btn-cliente">
                <a href="<!--link para cliente_atualizar-->">EXCLUIR</a>
            </button>
            <button class="btn-cliente">
                <a href="<!--link para cliente_atualizar-->">NOVO</a>
            </button>
        </div><!--Fecha bloco-btnCliente-->

    </div><!--Fecha bloco-clienteInfo-->




















    <!--Separar Destaques-->
    <div class="bloco-separar"></div>
    
    <?php
        include_once ("cliente_rodape.php");
    ?>

    <!--JavaScript-->
    <script src="../view_js/bootstrap.bundle.min.js"></script>
  </body>
</body>
</html>