<?php
session_start(); //inicia a sessao
//acessa config.php e abre conexão com o banco de dados

require_once ("db.class.php");

//pega o email que o usuário digitou e verifica se é vazio
if(isset($_POST['emailes'])){
//variável recebe o email digitado
$email = $_POST['emailes'];

	$objDb = new db();
	$link = $objDb->conecta_mysql();
	
$sql = "select id from usuarios where email='{$email}'";
	
error_reporting(0); 		

$result = mysqli_query($link, $sql);

 if ($result->num_rows > 0) {
  
$idusuario = $result->fetch_all(MYSQLI_ASSOC);
//variável session é super global, funciona em qualquer arquivo
$_SESSION['id']=$idusuario[0]['id'];

	$arquivo = "
<html>
<head>
</head>
<body>

<!-- FORGOT PASSWORD FORM -->
<div class='text-center' style='padding:50px 0'>
	<div align='center' style='color:black;'><h1><b>IFG Messeger</b></h1></div>
	<h1 style='text-align:center;'><a href='https://ifgmesseger.000webhostapp.com/novasenha.php'><b>Clique aqui para criar nova senha</b></a></h1>
			
</div>


<div align='center'><p style='text-align:center;color:black;'><b>&copy;2018 - IFG Messeger</b></p></div>


</body>

</html>
  ";
  
   // emails para quem será enviado o formulário
  $destino = $email;
  $assunto = "Redefinir senha";

  // É necessário indicar que o formato do e-mail é html
      $headers .= "From: IFG Messeger <ifgmesseger@gmail.com> \r\n";
      $headers .= "MIME-Version: 1.0 \r\n";
      $headers .= "Content-type: text/html; charset=utf-8 \r\n";
	  //$headers .= "Content-type: image/png";
  
  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  
  if($enviaremail){
      	
	echo '<script>location.href = \'enviorealizado.php\';</script>';
  } else {
	echo '<script>location.href = \'esquecisenha.php\';</script>';
  }
  
}else{
   
	echo '<script>location.href = \'esquecisenha.php\';</script>';
	//mostrar mensagem de erro - (fazer)
}

}else{
    
	echo '<script>location.href = \'esquecisenha.php\';</script>';
}
 
?>