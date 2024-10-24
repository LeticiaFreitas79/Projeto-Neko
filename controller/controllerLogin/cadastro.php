<?php
require_once("../../model/banco.php");
class cadastroController{

    private $cadastro;

    public function _construct(){
        $this->cadastro = new Cadastro();
        $this->incluir();
    }

    private function incluir(){
        $this->cadastro->setNome($_POST['nome']);
        $this->cadastro->setCpf($_POST['cpf']);       
        $this->cadastro->setQuantidade($_POST['data_nascimento']);
        $this->cadastro->setPreco($_POST['email']);
        $this->cadastro->setPreco($_POST['senha']);
        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('Registro inclui­do com sucesso!');document.location='../view/cadastro.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!, verifique se o livro nÃo esta duplicado');history.back()</script>";
        }
    }
}
new cadastroController();
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="30;URL=../index.php">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/2495680ceb.js" crossorigin="anonymous"></script>
    <!-- Link para CSS específico -->
    <link rel="stylesheet" href="../css/estilo.css" type="text/css">
    
    <title>Clínica Neko - Login</title>
</head>

<body>
    <main class="container">
        <section>
            <article>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <h2 class="breadcrumb text-info text-center">Faça seu Cadastro</h2>
                    
                        <h1 class="breadcrumb text-info text-center">Preencha os campos abaixo para criar a sua conta no site. É </h1>

                        <h1 class="breadcrumb text-info text-center"> rápido e fácil, não se preocupe! </h1> 

                        <div class="thumbnail">
                            <p class="text-info text-center" role="alert">
                                
                            </p>
                            <br>                        
                            <div class="alert alert-info" role="alert">
                                <form action="login.php" name="form_login" id="form_login" method="POST" enctype="multipart/form-data">
                                    <label for="nome">Nome:</label>
                                    <p class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-user text-info" aria-hidden="true"></span>
                                        </span>
                                        <input type="text" name="login" id="login" class="form-control" autofocus required autocomplete="off" placeholder="Digite seu Nome.">
                                    </p>

                                    <label for="cpf">CPF:</label>
                                    <p class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-qrcode text-info" aria-hidden="true"></span>
                                        </span>
                                        <input type="text" name="senha" id="senha" class="form-control" required autocomplete="off" placeholder="Digite seu CPF.">
                                    </p>

                                    <label for="data de nascimento">Data de Nascimento:</label>
                                    <p class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-qrcode text-info" aria-hidden="true"></span>
                                        </span>
                                        <input type="text" name="senha" id="senha" class="form-control" required autocomplete="off" placeholder="Digite sua data de nasc..">
                                    </p>

                                    <label for="email">Email:</label>
                                    <p class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-qrcode text-info" aria-hidden="true"></span>
                                        </span>
                                        <input type="text" name="senha" id="senha" class="form-control" required autocomplete="off" placeholder="Digite seu Email.">
                                    </p>

                                    <label for="senha">Senha:</label>
                                    <p class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-qrcode text-info" aria-hidden="true"></span>
                                        </span>
                                        <input type="password" name="senha" id="senha" class="form-control" required autocomplete="off" placeholder="Digite sua Senha.">
                                    </p>

                                    <p class="text-right">
                                        <input type="submit" value="Criar Conta" class="btn btn-primary">
                                    </p>

                                    </form>
                                    <p class="text-center">
                                    <small>
                                        <br>
                                        
                                    </small>
                                </p>
                            </div><!-- fecha alert -->
                        </div><!-- fecha thumbnail -->
                    </div><!-- fecha dimensionamento -->
                </div><!-- fecha row -->
            </article>
        </section>
    </main>