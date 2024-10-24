<!--Código com objetivo de Incluir produtos-->

<?php
require_once("../model/modelProduto.php");
class produtoNovo{

    private $produto;

    public function __construct(){
        $this->produto = new Cadastro();
        $this->incluir();
    }

    private function incluir(){
        $this->produto->setNome($_POST['nome']);
        $this->produto->setDescricao($_POST['descricao']);
        $this->produto->setData(date('Y-m-d',strtotime($_POST['data'])));
        $this->produto->setValor($_POST['valor']);
        $this->produto->setPeso($_POST['peso']);
        $this->produto->setQtde_estoque($_POST['qtde_estoque']);
        $result = $this->produto->incluir();
        if($result >= 1){
            echo "<script>alert('Registro inclui­do com sucesso!');document.location='../view/cadastro.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!, verifique se o livro nÃo esta duplicado');history.back()</script>";
        }
    }
}
new produtoNovo();