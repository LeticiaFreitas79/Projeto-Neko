<!--Objetivo do Código: Página onde devem ser exibidas as informações da Clínica Neko-->
<!--Status do Código: Em desenvolvimento; add PHP-->

<!--NOTA: Transformar as informações do cliente em tabelas-->

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
        <h2 class="titulo-clienteInfo">CLIENTE<!--PHP puxando Dados do Banco--></h2>
            <br>
        <p class="text-clienteInfo"><strong>CPF: </strong><!--PHP puxando Dados do Banco--></p>
        <p class="text-clienteInfo"><strong>Email: </strong><!--PHP puxando Dados do Banco--></p>
        <p class="text-clienteInfo"><strong>Telefone: </strong><!--PHP puxando Dados do Banco--></p>
    </div><!--Fecha bloco-clienteInfo-->

    <div class="bloco-btnCliente">
        <button class="btn-cliente">
            <a href="cliente_atualizar.php" target="_blank">EDITAR</a>
        </button>
    </div><!--Fecha bloco-btnCliente-->

    <!--Separar Destaques-->
    <div class="bloco-separar"></div>

    <!--ENDEREÇO-->
    <div class="bloco-clienteInfo">
        <h2 class="titulo-clienteInfo">ENDEREÇO</h2>
            <br>
        <p class="text-clienteInfo"><strong>CEP: </strong><!--PHP puxando Dados do Banco--></p>
        <p class="text-clienteInfo"><strong>Logradouro: </strong><!--PHP puxando Dados do Banco--></p>
        <p class="text-clienteInfo"><strong>Número: </strong><!--PHP puxando Dados do Banco--></p>
        <p class="text-clienteInfo"><strong>Bairro: </strong><!--PHP puxando Dados do Banco--></p>
        <p class="text-clienteInfo"><strong>Cidade: </strong><!--PHP puxando Dados do Banco--></p>
        <p class="text-clienteInfo"><strong>Complemento: </strong><!--PHP puxando Dados do Banco--></p>
        <p class="text-clienteInfo"><strong>UF: </strong><!--PHP puxando Dados do Banco--></p>
        <p class="text-clienteInfo"><strong>Tipo: </strong><!--PHP puxando Dados do Banco--></p>
    </div><!--Fecha bloco-clienteInfo-->

    <div class="bloco-btnCliente">
        <button class="btn-cliente">
            <a href="cliente_enderecoAtualizar.php" target="_blank">EDITAR</a>
        </button>
        <button class="btn-cliente">
            <a href="../controller/controllerCliente/cliente_endereco_deletar.php" target="_blank">EXCLUIR</a>
        </button>
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
            INFORMAÇÕES DO(s) PET(s)
        </h2>
    </div> <!--Fecha 'bloco-titulo'-->

    <div class="bloco-clienteInfo">
        <h2 class="titulo-clienteInfo">PET<!--PHP puxando Dados do Banco--></h2>
        <br>
        <p class="text-clienteInfo"><strong>Raça: </strong><!--PHP puxando Dados do Banco--></p>
        <p class="text-clienteInfo"><strong>Idade: </strong><!--PHP puxando Dados do Banco--></p>
        <p class="text-clienteInfo"><strong>Peso: </strong><!--PHP puxando Dados do Banco--></p>
    </div><!--Fecha bloco-clienteInfo-->

    <div class="bloco-btnCliente">
        <button class="btn-cliente">
            <a href="cliente_petAtualizar.php" target="_blank">EDITAR</a>
        </button>
        <button class="btn-cliente">
            <a href="../controller/controllerCliente/cliente_pet_deletar.php" target="_blank">EXCLUIR</a>
        </button>
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
                <th scope="row">Consulta</th>
                <td>Cardiologista</td>
                <td>Pandora</td>
                <td>23/10/2024</td>
                <td>14h00</td>
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
                <th scope="row">Adestramento</th>
                <td>Bolinha</td>
                <td>12/09/2024</td>
                <td>15h00</td>
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
                <th scope="row">4127</th>
                <td>R$ 50,00</td>
                <td>25/08/2024</td>
                <td>
                    <button class="btn-clienteTable">
                        <a href="cliente_detalhesPedido.php">Ver Itens</a>
                    </button>
                </td>
            </tr>
        </tbody>
        </table>
    </div><!--Fecha bloco tabela-->

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