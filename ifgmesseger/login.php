<?php 
    require_once 'db.class.php'; 
    $erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>IFG Messeger</title>

		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">


  <!-- Custom styles for this template -->
  <link href="css/signin.css" rel="stylesheet">

<script>
			$(document).ready( function(){

				//verificar se os campos de usuário e senha foram devidamente preenchidos
				$('#btn_login').click(function(){

					var campo_vazio = false;

					if($('#campo_usuario').val() == ''){
						$('#campo_usuario').css({'border-color': '#A94442'});
						campo_vazio = true;
					} else {
						$('#campo_usuario').css({'border-color': '#CCC'});
					}

					if($('#campo_senha').val() == ''){
						$('#campo_senha').css({'border-color': '#A94442'});
						campo_vazio = true;
					} else {
						$('#campo_senha').css({'border-color': '#CCC'});
					}

					if(campo_vazio) return false;
				});
			});					
		</script>
		
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
        <a href='login.php' title="Atualizar Página"><img src="imagens/icone_twitter.png" /></a>
      </div>
      <a class="navbar-brand" href="index.php" title="Página Inicial">IFG Messeger</a>
      <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php" style="padding-bottom:0px"><img src="imagens/pagina.png" title="Página Inicial" width="34" height="32"/></a></li>
  </ul></div>
    </div>
  </nav>
 

  <div class="container login">

    <form class="form-signin" method="post" action="validar_acesso.php" id="formLogin">
      <div style="margin:0;"><center><figure><img src="imagens/icone_twitter.png" width="60" height="60" title="Logo IFG Messeger"/></figure></center></div>
      <br /><br />
      <label for="inputUser" class="sr-only">Usuário</label>
      <input class="form-control" id="campo_usuario" name="usuario" placeholder="Usuário" required="" autofocus="" type="text">
      <label for="inputPassword" class="sr-only">Password</label>
      <input id="campo_senha" class="form-control" name="senha" placeholder="Senha" required="" type="password">
      
      <button class="btn btn-lg btn-primary btn-block" type="submit" id="btn_login">Entrar</button>

      <div class="row">
        <div class="col-md-6"><a class="btn btn-link" href="esquecisenha.php" role="button">Esqueci a senha</a></div>
        <div class="col-md-6"><a class="btn btn-link pull-right " href="inscrevase.php" role="button">Inscrever-se</a></div>
      </div>
        
        <?php
		if($erro == 1){
			echo '<font color="#FF0000">Usuário e ou senha inválido(s)</font>';
				}
		?>

    </form>

  </div> <!-- /container -->
  <div class="col-md-4"></div>

			<div class="clearfix"></div>
			<br />
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>
<?php include('footer.php'); ?>