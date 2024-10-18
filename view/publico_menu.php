<!--Objetivo do Código: Barra de Navegação de todas as páginas principais do site-->
<!--Status do Código: Em desenvolvimento-->

<!--Abre a barra de navegação-->
<nav class="navbar navbar-expand-lg">

    <!--Abre o bloco-->
    <div class="container-fluid">

    <!--Logo da Clínica Neko-->
    <a class="navbar-brand" href="#">
      <img src="../view_img/logo_circulo1.png" alt="Bootstrap" width="50" height="50">
    </a>

        <!--Abre o bloco das páginas da navegação-->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <!--página HOME-->
            <li class="nav-item">
                <button type="button" class="btn">
                    <a href="index.php">HOME</a>
                </button>
            </li>

             <!--página SOBRE-->
            <li class="nav-item">
                <button type="button" class="btn">
                    <a href="principal_sobre.php">SOBRE</a>
                </button>
            </li>

            <!--página VETERINÁRIO-->
            <li class="nav-item">
                <button type="button" class="btn">
                    <a href="principal_veterinario.php">VETERINÁRIO</a>
                </button>
            </li>

            <!--página SERVIÇOS-->
            <li class="nav-item">
                <button type="button" class="btn">
                    <a href="principal_servicos.php">SERVIÇOS</a>
                </button>
            </li>

             <!--página LOJA-->
            <li class="nav-item">
                <button type="button" class="btn">
                    <a href="principal_loja.php">LOJA</a>
                </button>
            </li>

            <!--página CONTATO-->
            <li class="nav-item">
                <button type="button" class="btn">
                    <a href="principal_contato.php">CONTATO</a>
                </button>
            </li>
        </ul> <!--Fecha o bloco das páginas de navegação-->

        <!--Botão da BUSCA-->
        <button type="button" class="btn btn-success">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
            </svg>
        </button>

        <!--Botão do CARRINHO-->   
        <button type="button" class="btn btn-success">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
            </svg>        
    </button>

        <!--Botão da CONTA-->    
        <button type="button" class="btn btn-success">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
            </svg> 
        </button>           
        
        </div> <!--Fecha o bloco das páginas da navegação-->
    </div> <!--Fecha o bloco-->
    </nav> <!--Fecha a barra de navegação-->

