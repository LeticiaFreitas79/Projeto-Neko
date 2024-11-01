<!--Objetivo do Código: Barra de Navegação de todas as páginas principais do site-->
<!--Status do Código: Em correção; os botões 'busca' e 'conta' ainda não levam ás páginas indicadas -->

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
                    <a href="index.php">HOME</a>
                </button>
            </li>

             <!--página SOBRE-->
            <li class="nav-item">
                <button type="button" id="btnNav" class="btn">
                    <a href="principal_sobre.php">SOBRE</a>
                </button>
            </li>

            <!--página VETERINÁRIO-->
            <li class="nav-item">
                <button type="button" id="btnNav" class="btn">
                    <a href="principal_veterinario.php">VETERINÁRIO</a>
                </button>
            </li>

            <!--página SERVIÇOS-->
            <li class="nav-item">
                <button type="button" id="btnNav" class="btn">
                    <a href="principal_servicos.php">SERVIÇOS</a>
                </button>
            </li>

             <!--página LOJA-->
             <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    LOJA
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../view/view_categorias/categoria_acessorios.php">Acessórios</a></li>
                    <li><a class="dropdown-item" href="../view/view_categorias/categoria_brinquedos.php">Brinquedos</a></li>
                    <li><a class="dropdown-item" href="../view/view_categorias/categoria_casinhas.php">Casinhas e Transporte</a></li>
                    <li><a class="dropdown-item" href="../view/view_categorias/categoria_higiene.php">Higiene e Limpeza</a></li>
                    <li><a class="dropdown-item" href="../view/view_categorias/categoria_racoes.php">Rações e Petiscos</a></li>
                    <li><a class="dropdown-item" href="../view/view_categorias/categoria_remedios.php">Remédios</a></li>
                    <li><a class="dropdown-item" href="../view/view_categorias/categoria_roupas.php">Roupas e Camas</a></li>
                    <li><a class="dropdown-item" href="../view/view_categorias/categoria_saude.php">Saúde</a></li>
                    <li><a class="dropdown-item" href="principal_loja.php">Todos os Produtos</a></li>
                </ul>
            </div>


            <li class="nav-item">
                <button type="button" id="btnNav" class="btn">
                    <a href="principal_loja.php">LOJA</a>
                </button>
            </li>

            <!--página CONTATO-->
            <li class="nav-item">
                <button type="button" id="btnNav" class="btn">
                    <a href="principal_contato.php">CONTATO</a>
                </button>
            </li>
        </ul> <!--Fecha o bloco das páginas de navegação-->

        <!--Botão da BUSCA-->
        <form class="d-flex">
            <input id="barraPesquisa" class="form-control me-2" type="search" placeholder="Pesquisar produtos" aria-label="Search">
            <button class="btn" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                </svg>
            </button>
        </form>

        <!--Botão da CONTA-->    
        <button type="button" class="btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-person" viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
            </svg> 
        </button>           
        
        </div> <!--Fecha o bloco das páginas da navegação-->
    </div> <!--Fecha o bloco-->
    </nav> <!--Fecha a barra de navegação-->


