
<!-- Informação para o cadastro de cliente -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
<!-- Titulo da página -->
    <title>Cadastro de Cliente</title>
</head>


<style>


input{
    font-size:15px;
    padding:10px;
    margin-top:5px;
    margin-left:5px;
}

label {
    padding:10px;
    margin-right:5px;

}

button {
    margin-top:60px;
    font-size:20px;
    background-color:#709477;
    cursor: pointer;
    margin-left:50px;
}

.cad{
    height:600px;
    width:400px;
    background-color:#9fb4ab;
    

}

.h1{
    text-align:center;
}


</style>
<body>
    <div class="cad">
    <!-- Informação para realizar o Cadastro  -->
        <h1>Faça seu Cadastro</h1>
            <form action="envia.php" method="POST">
                
                <!-- Label para inserir o Nome -->
                <label for="nome">Nome:</label><br>
                <input type="text" id="nome" name="nome" required><br><br>

                    <!-- Label para inserir o CPF -->
                    <label for="cpf">CPF:</label><br>
                    <input type="text" id="cpf" name="cpf" required title="Digite o CPF"><br><br>

                        <!-- Label para inserir a Data de nascimento -->
                        <label for="data_nascimento">Data de Nascimento:</label><br>
                        <input type="date" id="data_nascimento" name="data_nascimento" required><br><br>

                                <!-- Label para inserir o Email -->
                                <label for="email">Email:</label><br>
                                <input type="email" id="email" name="email" required><br><br>

                                    <!-- Label para inserir a Senha -->
                                    <label for="senha">Senha:</label><br>
                                    <input type="text" id="senha" name="senha"><br><br>

                                <!-- Botão para enviar as informações preenchidas -->
                                <button type="submit" >enviar </button>
                    
                            <!-- pular linha -->
                            <br>
                        <br>
                    <br>
                 <br>
            <br>   
        </form>
    </div>
</body>
</html>

