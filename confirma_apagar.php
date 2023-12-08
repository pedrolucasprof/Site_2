<?php
session_start();
if((!isset($SESSION['id'])== true)and(!isset($SESSION['nome'])==true)and(!isset($_SESSION['email'])==true)){
    unset($_SESSION['id']);
    unset($_SESSION['nome']);
    unset($_SESSION['email']);
    header('Location: ../index.html');
}
require('conecta.php');

?>
<?php
include_once('cabecalho.php');
$id_cliente=$_GET['id']; //Pega da URL
?>

<div class="alert - alert danger" role= "alert">
    Deseja apagar o usuário?

<div class="alert alert-light" role="alert">
    <a a href="apaga_cliente.php?id=<?php echo $id_cliente;?>"class="btn btn-danger">Apagar</a>
    <a a href="index.php" class="btn btn-primary">NÃO</a>

</div>




</div>