<?php
$conexao = mysqli_connect("localhost","root","","clinicanekodb","3306","utf8");
?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--CSS-->
    <link href="../view_css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../view_css/estilo.css">
    <link rel="shortcut icon" href="../view_img/logo_circulo2.png" type="image/png">
    
    <title>Produtos - inserir | Clínica Neko</title>
</head>
<body>
    <!--Separar Destaques-->
    <div class="bloco-separar"></div>
    <!-- Informação para realizar o Cadastro  -->
    <div class="bloco-cadastro">
        
        <!--Separar Destaques-->
        <div class="bloco-separar"></div>
        <div class="bloco-cabecalho">
            <!--Icon de Cadastro-->
            <img src="../view_img/icon_cadastro.png" alt="Gatinho de Cadastro Miau!!!" width="200" height="200">
            <!--Separar Destaques-->
            <div class="bloco-separar"></div>
            <h1 class="titulo">Insira o Produto desejado</h1>
            <p class="subtitulo-cadastro"> <strong>Preencha</strong> os <strong>campos abaixo</strong> para inserir o produto no site.<br>
                É rápido e fácil, não se preocupe!</p>
            </div><!--Fecha bloco cabecalho-->
            <div class="bloco-campos">
                <form action="produto_novo.php" method="POST">

                    <!-- Label para inserir o categoria -->      
                    <p><label  class="select" for="id_categoria" type="text"  name="id_categoria" > CATEGORIA </label></p>
                    <p><label for="categoria">Selecione a categoria:</label> 
                    <select name="id_categoria" id="id_categoria" required>
                    <option value="">
                        <?php
                        $sql="SELECT nome FROM categoria";
                        $resultado=$conexao->query($sql);

                        while($dados = $resultado->fetch_assoc()){
                        echo "<option value=".$dados['nome'].">".$dados['nome']."</option>";
                        }

                        ?> 
                    </option>
                    </select></p>

                    <!-- Label para inserir a marca -->
                    <p><label  class="label-title" for="id_marca" type="text"  name="id_marca" > MARCA </label></p>
                    <p><label for="marca" >Selecione a Marca: </label> 
                    <select name="id_marca" id="id_marca" required>
                    <option value="">
                        <?php
                        $sql="SELECT nome FROM marca";
                        $resultado=$conexao->query($sql);

                        while($dados = $resultado->fetch_assoc()){
                        echo "<option value=".$dados['nome'].">".$dados['nome']."</option>";
                        }
                        ?>
                    </option>
                    </select></p>

                    <!-- Label para inserir o Nome -->
                    <label  class="label-title" for="nome">NOME</label>
                        <br>
                    <input class="input-cadastro" type="text" name="nome" required>
                
                    <br><br>
                    <!-- Label para inserir o CPF -->
                    <label class="label-title" for="descricao">DESCRIÇÃO</label>
                        <br>
                    <input class="input-cadastro" type="text" name="descricao" required title="Digite o CPF">
                    
                    <br><br>
                    <!-- Label para inserir a Data de nascimento -->
                    <label class="label-title" for="data_validade">DATA DE VALIDADE</label>
                        <br>
                    <input class="input-cadastro" type="date" name="data_validade" required>
                    
                    <br><br>
                    <!-- Label para inserir o Email -->
                    <label class="label-title" for="valor">VALOR</label>
                        <br>
                    <input class="input-cadastro" type="number" name="valor" required>
                    
                    <br><br>
                    <!-- Label para inserir a Senha -->
                    <label class="label-title" for="peso">PESO</label>
                        <br>
                    <input class="input-cadastro" type="number" name="peso" required>
                    
                    <br><br>
                    <!-- Label para inserir a Senha -->
                    <label class="label-title" for="qtde_estoque">QTDE_ESTOQUE</label>
                        <br>
                    <input class="input-cadastro" type="number" name="qtde_estoque" required>
                    <br><br><br>
                    <!-- Botão para enviar as informações preenchidas -->
                    <div class="bloco-btn">
                        <button class="btn-cadastro" type="submit" >Adicionar Produto</button>
                    </div>
                </form>
                <!--Separar Destaques-->
                <div class="bloco-separar"></div>
            </div><!--Fecha bloco campos-->
        </div>
    </div><!--Fecha bloco-cadastro-->
    <!--Separar Destaques-->
    <!--JavaScript-->
    <script src="../view_js/bootstrap.bundle.min.js"></script>
</body>
</html>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
