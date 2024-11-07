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
    <link rel="shortcut icon" href="../view_img/logo_circulo1.png" type="image/png">
    
    <title>Novo Endereço | Cliente Clínica Neko</title>
</head>
<body>

    <div class="bloco-formulario">
        <div class="bloco-cadastro">

            <!--Separar Destaques-->
            <div class="bloco-separar"></div>

            <div class="bloco-cabecalho">
                <!--Icon de Cadastro-->
                <img src="../view_img/icon_endereco.png" alt="Gatinho" width="200" height="200">

                <!--Separar Destaques-->
                <div class="bloco-separar"></div>

                <h1 class="titulo">NOVO ENDEREÇO</h1>
            </div><!--Fecha bloco cabecalho-->

                <div class="bloco-campos">
                    <form action="" method="POST">

                    <!-- Label para atualizar o CEP -->
                    <label class="label-title" for="cep">CEP</label>
                        <br>
                    <input class="input-cadastro" type="number">
                            
                    <br><br>

                    <!-- Label para atualizar o Logradouro -->
                    <label class="label-title" for="logradouro">Logradouro</label>
                        <br>
                    <input class="input-cadastro" type="text">
                            
                    <br><br>
                    
                    <!-- Label para atualizar o Número -->
                    <label class="label-title" for="numero">Número</label>
                        <br>
                    <input class="input-cadastro" type="number">
                            
                    <br><br>

                    <!-- Label para atualizar o Bairro -->
                    <label class="label-title" for="bairro">Bairro</label>
                        <br>
                    <input class="input-cadastro" type="text">
                            
                    <br><br>

                    <!-- Label para atualizar a Cidade -->
                    <label class="label-title" for="cidade">Cidade</label>
                        <br>
                    <input class="input-cadastro" type="text">

                    <br><br>

                    <!-- Label para atualizar o Complemento -->
                    <label class="label-title" for="complemento">Complemento</label>
                        <br>
                    <input class="input-cadastro" type="text">
                            
                    <br><br>

                    <!-- Label para atualizar o UF -->
                    <label class="label-title" for="uf">UF</label>
                        <br>
                    <select class="input-cadastro" name="uf">
                        <option value="" selected disabled hidden>Selecione</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                            
                    <br><br>

                    <!-- Label para atualizar o Tipo -->
                    <label class="label-title" for="tipo">Tipo</label>
                        <br>
                    <select class="input-cadastro" name="tipo">
                        <option value="" selected disabled hidden>Selecione</option>
                        <option value="AC">Comercial</option>
                        <option value="AL">Residencial</option>
                    </select>

                    <br><br><br>

                    <!-- Botão para enviar as informações preenchidas -->
                    <div class="bloco-btn">
                        <button class="btn-cadastro" type="submit" >INSERIR ENDEREÇO</button>
                    </div>

                    </form>

                    <!--Separar Destaques-->
                    <div class="bloco-separar"></div>

                </div><!--Fecha bloco campos-->
            </div><!--Fecha bloco-cadastro-->
        </div><!--Fecha bloco-formulario-->

    <!--JavaScript-->
    <script src="../view_js/bootstrap.bundle.min.js"></script>

</body>
</html>