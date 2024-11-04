
<?php 
include '../../model/banco.php';
// inicia a verificação do login
if($_POST){
    $email  = $_POST['email'];
    $senha = md5($_POST['senha']);
    $emailRes = $conn->query("select * from cliente where login = '$email' and senha  = '$senha'");
    $rowLogin = $emailRes->fetch_assoc();
    $numRow  = $emailRes->num_rows;
    // se a sessão não existir
    if(!isset($_SESSION)){
        $sessaoAntiga = session_name('clinicanekodb');
        session_start();
        $session_name_new = session_name();
    }
    if($numRow>0){
        $_SESSION['email_usuario'] = $email;
        $_SESSION['nivel_usuario'] = $rowEmail['nivel'];
        $_SESSION['nome_da_sessao'] = session_name();
        if($rowEmail['nivel']=='sup'){
            echo "<script>window.open('../../view_adm/index_adm.php?','_self')</script>";
        }
        else{
            echo "<script>window.open('../../view_login/index_login.php?cliente=".$email."','_self')</script>";
        }
    }
    else{
       echo "<script>window.open('invasor.php','_self')</script>";
    }
}
?>

