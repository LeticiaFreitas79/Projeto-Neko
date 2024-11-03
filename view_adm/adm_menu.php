<!--Objetivo do Código: Barra de Navegação Administrativa. Serve para ser referenciada em outros arquivos-->
<!--Status do Código: Concluído-->

<!--Abre a barra de navegação-->
<nav id="barra-nav" class="navbar navbar-expand-lg">

    <!--Abre o bloco-->
    <div class="container-fluid">

    <!--Logo da Clínica Neko + Redirecionamento para página 'HOME'-->
    <a class="navbar-brand" href="#">
        <img src="../view_img/logo_circulo1.png" alt="Bootstrap" width="50" height="50">
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

            <!--página ADM-->
            <li class="nav-item">
                <button type="button" id="btnNav" class="btn">
                    <a href="index_adm.php">ADM</a>
                </button>
            </li>

             <!--página USUÁRIOS-->
            <li class="nav-item">
                <button type="button" id="btnNav" class="btn">
                    <a href="adm_usuarios.php">USUÁRIOS</a>
                </button>
            </li>

            <!--página PRODUTOS-->
            <li class="nav-item">
                <button type="button" id="btnNav" class="btn">
                    <a href="adm_produtos.php">PRODUTOS</a>
                </button>
            </li>
        </ul> <!--Fecha o bloco das páginas de navegação-->

        <!--Botão da BUSCA-->
        <form class="d-flex">
            <input id="barraPesquisa" class="form-control me-2" type="search" placeholder="Pesquisar produtos" aria-label="Search">
                <button type="button" class="btn">
                    <a href="../view/busca.php" target="_blank">
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


