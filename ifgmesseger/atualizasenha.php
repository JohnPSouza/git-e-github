<?php
session_start(); //inicia a sessao
require_once ("db.class.php");


$senha = md5($_POST['nsenha']);
$idusuario = $_SESSION['id'];

$objDb = new db();
$link = $objDb->conecta_mysql();
	
$sql = "update usuarios set senha='{$senha}' where id='{$idusuario}'";
	
error_reporting(0); 		

$result = mysqli_query($link, $sql);

if(!$result){
    echo '<script>alert("Erro na consulta de usuários no banco de dados!");</script>';
    
    echo '<script>location.href = \'esquecisenha.php\';</script>';
  //mensagem de erro
 // Por último, destrói a sessão
session_destroy();
} else {
    echo '<script>alert("Senha redefinida com sucesso!");</script>';
    
    echo '<script>location.href = \'index.php\';</script>';
    
  //mensagem de senha redefinida com sucesso
 // Por último, destrói a sessão
session_destroy();
}

?>