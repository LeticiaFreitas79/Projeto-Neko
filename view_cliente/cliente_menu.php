<!--Objetivo do Código: Barra de Navegação de todas as páginas de cliente-->
<!--Status do Código: Concluído e Comentado -->

<!--Abre a barra de navegação-->
<nav id="barra-nav" class="navbar navbar-expand-lg">

    <!--Abre o bloco-->
    <div class="container-fluid">

    <!--Logo da Clínica Neko + Redirecionamento para página 'HOME'-->
    <a class="navbar-brand" href="#">
        <img src="../view_img/logo_cliente.png" alt="Bootstrap" width="50" height="50">
    </a>

        <!--Abre o bloco das páginas da navegação-->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <!--página HOME-->
            <li class="nav-item">
                <button type="button" id="btnNav" class="btn">
                    <a href="../view/index.php">HOME</a>
                </button>
            </li>

             <!--página SOBRE-->
            <li class="nav-item">
                <button type="button" id="btnNav" class="btn">
                    <a href="../view/principal_sobre.php">SOBRE</a>
                </button>
            </li>

            <!--página VETERINÁRIO-->
            <li class="nav-item">
                <button type="button" id="btnNav" class="btn">
                    <a href="../view/principal_veterinario.php">VETERINÁRIO</a>
                </button>
            </li>

            <!--página SERVIÇOS-->
            <li class="nav-item">
                <button type="button" id="btnNav" class="btn">
                    <a href="../view/principal_servicos.php">SERVIÇOS</a>
                </button>
            </li>

             <!--página LOJA-->
             <div class="dropdown">
                <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    LOJA ▼
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../view_categorias/categoria_acessorios.php">Acessórios</a></li>
                    <li><a class="dropdown-item" href="../view_categorias/categoria_brinquedos.php">Brinquedos</a></li>
                    <li><a class="dropdown-item" href="../view_categorias/categoria_casinhas.php">Casinhas e Transporte</a></li>
                    <li><a class="dropdown-item" href="../view_categorias/categoria_higiene.php">Higiene e Limpeza</a></li>
                    <li><a class="dropdown-item" href="../view_categorias/categoria_racoes.php">Rações e Petiscos</a></li>
                    <li><a class="dropdown-item" href="../view_categorias/categoria_remedios.php">Remédios</a></li>
                    <li><a class="dropdown-item" href="../view_categorias/categoria_roupas.php">Roupas e Camas</a></li>
                    <li><a class="dropdown-item" href="../view_categorias/categoria_saude.php">Saúde</a></li>
                    <li><a class="dropdown-item" href="../view/principal_loja.php">Todos os Produtos</a></li>
                </ul>
            </div>

            <!--página CONTATO-->
            <li class="nav-item">
                <button type="button" id="btnNav" class="btn">
                    <a href="../view/principal_contato.php">CONTATO</a>
                </button>
            </li>
        </ul> <!--Fecha o bloco das páginas de navegação-->

        <!--Botão da BUSCA-->
        <form class="d-flex">
            <input id="barraPesquisa" class="form-control me-2" type="search" placeholder="Pesquisar produtos" aria-label="Search">
                <button type="button" class="btn">
                    <a href="busca.php" target="_blank">
                        <img src="../view_img/icon_busca.svg" alt="busca" width="25" height="25" fill="white" />
                    </a>
                </button>    
        </form>

        <!--Botão da CONTA-->    
        <button type="button" class="btn">
            <a href="../view_login/index_login.php" target="_blank">
          <img src="../view_img/icon_conta.svg" alt="conta" width="25" height="25" fill="white" />
          </a>
        </button>           
        
        </div> <!--Fecha o bloco das páginas da navegação-->
    </div> <!--Fecha o bloco-->
    </nav> <!--Fecha a barra de navegação-->


