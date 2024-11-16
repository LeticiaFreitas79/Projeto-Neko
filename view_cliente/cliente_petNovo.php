<!--Objetivo do Código: Exibe o formulário para editar um produto selecionado; os dados do produto devem apaerecer nos inputs-->
<!--Status do Código: Em desenvolvimento; add PHP-->

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--CSS-->
    <link href="../view_css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../view_css/estilo.css">
    <link rel="shortcut icon" href="../view_img/logo_cliente.png" type="image/png">
    
    <title>Novo Pet | Cliente Clínica Neko</title>
</head>
<body>
    <?php
        include_once ("cliente_menu.php");
    ?>
    
    <!--Separar Destaques-->
    <div class="bloco-separar"></div>

    <div class="bloco-formulario">
        <div class="bloco-cadastro">

            <!--Separar Destaques-->
            <div class="bloco-separar"></div>

            <div class="bloco-cabecalho">
                <!--Icon de Cadastro-->
                <img src="../view_img/icon_pet.png" alt="Gatinho" width="200" height="200">

                <!--Separar Destaques-->
                <div class="bloco-separar"></div>

                <h1 class="titulo">NOVO PET</h1>
            </div><!--Fecha bloco cabecalho-->

                <div class="bloco-campos">
                    <form action="" method="POST">

                    <!-- Label para atualizar o Nome -->
                    <label class="label-title" for="nome">Nome</label>
                        <br>
                    <input class="input-cadastro" type="text">
                            
                    <br><br>

                    <!-- Label para atualizar a Especie -->
                    <label class="label-title" for="especie">Espécie</label>
                        <br>
                    <select class="input-cadastro" name="especie">
                        <option value="" selected disabled hidden>Selecione</option>
                        <option value="AC">Cachorro</option>
                        <option value="AL">Gato</option>
                    </select>

                    <br><br>

                    <!-- Label para atualizar a Raça -->
                    <label class="label-title" for="raca">Raça</label>
                        <br>
                    <select class="input-cadastro" name="raca">
                        <option value="" selected disabled hidden>Selecione</option>
                        <option value="Labrador Retriever">Labrador Retriever</option>
                        <option value="Poodle">Poodle</option>
                        <option value="Shih Tzu">Shih Tzu</option>
                        <option value="Bulldog Francês">Bulldog Francês</option>
                        <option value="Golden Retriever">Golden Retriever</option>
                        <option value="Siamês">Siamês</option>
                        <option value="Persa">Persa</option>
                        <option value="Maine Coon">Maine Coon</option>
                        <option value="Bengal">Bengal</option>
                        <option value="Sphynx">Sphynx</option>
                    </select>
                            
                    <br><br>
                    
                    <!-- Label para atualizar o Idade -->
                    <label class="label-title" for="idade">Idade</label>
                        <br>
                    <input class="input-cadastro" type="text">
                            
                    <br><br>

                    <!-- Label para atualizar o Peso -->
                    <label class="label-title" for="peso">Peso</label>
                        <br>
                    <input class="input-cadastro" type="text">

                    <br><br><br>

                    <!-- Botão para enviar as informações preenchidas -->
                    <div class="bloco-btn">
                        <button class="btn-cadastro" type="submit"><!--PHP: cliente_pet_novo-->ATUALIZAR</button>
                    </div>

                    </form>

                    <!--Separar Destaques-->
                    <div class="bloco-separar"></div>

                </div><!--Fecha bloco campos-->
            </div><!--Fecha bloco-cadastro-->
        </div><!--Fecha bloco-formulario-->






    <?php
        include_once ("cliente_rodape.php");
    ?>

    <!--JavaScript-->
    <script src="../view_js/bootstrap.bundle.min.js"></script>

</body>
</html>