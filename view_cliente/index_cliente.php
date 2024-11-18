<!--Objetivo do Código: Página onde devem ser exibidas as informações da Clínica Neko-->
<!--Status do Código: Em desenvolvimento; add PHP-->


<?php
    include ("../controller/controllerLogin/acessoCliente.php");
?>


<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--CSS-->
    <link href="../view_css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../view_css/estilo.css">
    <link rel="shortcut icon" href="../view_img/logo_cliente.png" type="image/png">
    
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
        <h2 class="titulo-clienteInfo"><?php echo $_SESSION['nome']; ?></h2>
            <br>
        <p class="text-clienteInfo"><strong>CPF: </strong><?php echo $_SESSION['cpf']; ?></p>
        <p class="text-clienteInfo"><strong>Email: </strong><?php echo $_SESSION['email']; ?></p>
        <p class="text-clienteInfo"><strong>Telefone: </strong><?php echo $_SESSION['telefone']; ?></p>
    </div><!--Fecha bloco-clienteInfo-->

    <div class="bloco-btnCliente">
        <button class="btn-cliente">
            <a href="cliente_atualizar.php" target="_blank">EDITAR</a>
        </button>
    </div><!--Fecha bloco-btnCliente-->


    <!--Separar Destaques-->
    <div class="bloco-separar"></div>


    <!--ENDEREÇO-->
    <div class="bloco-titulo">
        <h2 class="titulo">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
            </svg>
            ENDEREÇO(s)
        </h2>
    </div> <!--Fecha 'bloco-titulo'-->

    <div class="bloco-tabela">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">CEP</th>
                    <th scope="col">Logradouro</th>
                    <th scope="col">Número</th>
                    <th scope="col">Bairro</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Complemento</th>
                    <th scope="col">UF</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
        <tbody>
            <tr>
                <th scope="row"><!--PHP puxando o CEP do Cliente--></th>
                <td><!--PHP puxando o Logradouro do Cliente--></td>
                <td><!--PHP puxando o Número do Cliente--></td>
                <td><!--PHP puxando o Bairro do Cliente--></td>
                <td><!--PHP puxando a Cidade do Cliente--></td>
                <td><!--PHP puxando o Complemento do Cliente--></td>
                <td><!--PHP puxando o UF do Cliente--></td>
                <td><!--PHP puxando O Tipo do Cliente--></td>

                <td>
                    <button class="btn-atualizar">
                        <a href="cliente_enderecoAtualizar.php" target="_blank">EDITAR</a>
                    </button>
                    <button class="btn-deletar">
                        <a href="../controller/controllerCliente/cliente_endereco_deletar.php">DELETAR</a>
                    </button>
                </td>
            </tr>
        </tbody>
        </table>
    </div><!--Fecha bloco tabela-->

    <div class="bloco-btnCliente">
        <button class="btn-cliente">
            <a href="cliente_enderecoNovo.php" target="_blank">NOVO</a>
        </button>
    </div><!--Fecha bloco-btnCliente-->
    
    <!--Separar Destaques-->
    <div class="bloco-separar"></div>

    <!--PETS-->
    <div class="bloco-titulo">
        <h2 class="titulo">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
            </svg>
            PET(s)
        </h2>
    </div> <!--Fecha 'bloco-titulo'-->

    <div class="bloco-tabela">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Espécie</th>
                    <th scope="col">Raça</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Peso</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
        <tbody>
            <tr>
                <th scope="row"><!--PHP puxando o Nome do Pet--></th>
                <td><!--PHP puxando a Espécie do Pet--></td>
                <td><!--PHP puxando a Raça do Pet--></td>
                <td><!--PHP puxando a Idade do Pet--></td>
                <td><!--PHP puxando o Peso do Pet--></td>
                <td>
                    <button class="btn-atualizar">
                        <a href="cliente_petAtualizar.php" target="_blank">EDITAR</a>
                    </button>
                    <button class="btn-deletar">
                        <a href="../controller/controllerCliente/cliente_pet_deletar.php">DELETAR</a>
                    </button>
                </td>
            </tr>
        </tbody>
        </table>
    </div><!--Fecha bloco tabela-->

    <div class="bloco-btnCliente">
        <button class="btn-cliente">
            <a href="cliente_petNovo.php" target="_blank">NOVO</a>
        </button>
    </div><!--Fecha bloco-btnCliente-->
    <!--Separar Destaques-->
    <div class="bloco-separar"></div>

    <!--HISTÓRICO VETERINÁRIO-->
    <div class="bloco-titulo">
        <h2 class="titulo">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
            </svg>
            HISTÓRICO VETERINÁRIO
        </h2>
    </div> <!--Fecha 'bloco-titulo'-->

    <div class="bloco-tabela">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Tipo</th>
                    <th scope="col">Especialidade</th>
                    <th scope="col">Pet</th>
                    <th scope="col">Data</th>
                    <th scope="col">Hora</th>
                </tr>
            </thead>
        <tbody>
            <tr>
                <th scope="row"><!--PHP puxando o Tipo do Serviço Veterinário--></th>
                <td><!--PHP puxando a Especialidade do Serviço Veterinário--></td>
                <td><!--PHP puxando o Nome do Pet--></td>
                <td><!--PHP puxando a Data do Serviço Veterinário--></td>
                <td><!--PHP puxando o horário do Serviço Veterinário--></td>
            </tr>
        </tbody>
        </table>
    </div><!--Fecha bloco tabela-->

    <!--Separar Destaques-->
    <div class="bloco-separar"></div>

    <!--HISTÓRICO SERVIÇOS-->
    <div class="bloco-titulo">
        <h2 class="titulo">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
            </svg>
            HISTÓRICO DE SERVIÇOS
        </h2>
    </div> <!--Fecha 'bloco-titulo'-->

    <div class="bloco-tabela">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Tipo</th>
                    <th scope="col">Pet</th>
                    <th scope="col">Data</th>
                    <th scope="col">Hora</th>
                </tr>
            </thead>
        <tbody>
            <tr>
                <th scope="row"><!--PHP puxando o Tipo de Serviço--></th>
                <td><!--PHP puxando o Nome do Pet--></td>
                <td><!--PHP puxando a Data de Serviço--></td>
                <td><!--PHP puxando o Horário de Serviço--></td>
            </tr>
        </tbody>
        </table>
    </div><!--Fecha bloco tabela-->

    <!--Separar Destaques-->
    <div class="bloco-separar"></div>

    <!--HISTÓRICO COMPRAS-->
    <div class="bloco-titulo">
        <h2 class="titulo">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
            </svg>
            HISTÓRICO DE COMPRAS
        </h2>
    </div> <!--Fecha 'bloco-titulo'-->

    <div class="bloco-tabela">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">N° Pedido</th>
                    <th scope="col">Valor Total</th>
                    <th scope="col">Data</th>
                    <th scope="col">Itens</th>
                </tr>
            </thead>
        <tbody>
            <tr>
                <th scope="row"><!--PHP puxando o Número do Pedido--></th>
                <td><!--PHP puxando o Valor Total do Pedido--></td>
                <td><!--PHP puxando a Data do Pedido--></td>
                <td>
                    <button class="btn-clienteTable">
                        <a href="cliente_detalhesPedido.php" target="_blank">VER ITENS</a>
                    </button>
                </td>
            </tr>
        </tbody>
        </table>
    </div><!--Fecha bloco tabela-->

    <!--Separar Destaques-->
    <div class="bloco-separar"></div>

    <div class="bloco-btnCliente">
        <button class="btn-cliente">
            <a href="../controller/controllerLogin/logout.php">SAIR</a>
        </button>
    </div><!--Fecha bloco-btnCliente-->
    
    <?php
        include_once ("cliente_rodape.php");
    ?>

    <!--JavaScript-->
    <script src="../view_js/bootstrap.bundle.min.js"></script>
  </body>
</body>
</html>