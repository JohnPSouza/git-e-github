<?php

	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;

?>


<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>IFG Messeger</title>

		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	
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

		<!-- Static navbar -->
	    <nav class="navbar navbar-inverse navbar-static-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a href='index.php'><img src="imagens/icone_twitter.png" /></a>
	        </div>
	        <div><a class="navbar-brand" href="index.php" title="Atualizar Página">IFG Messeger</a></div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="inscrevase.php" title="Inscreva-se já!">Inscrever-se</a></li>
	            <li class="<?= $erro == 1 ? 'open' : '' ?>" hover:"dropdown">
	            	<a id="entrar" data-target="#" href="login.php" role="button" aria-haspopup="true" aria-expanded="false" title="Você possui uma conta? Faça login!">Entrar</a>
					
	            </li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>
	    
	    <div class="container">

	      <!-- Main component for a primary marketing message or call to action -->
	   <div class="jumbotron" style="background-color: #2E9AFE">
	        <h1 style="color: #FFFFFF">Bem-vindo ao IFG Messeger!</h1>
	        
	        <h3 style="color: #FFFFFF">Veja o que está acontecendo agora...</h3>
	      </div>
	      <div class="clearfix"></div>
		</div>
		
	    <div class="container">
	    	
	    	<br /><br />

	    	<div class="col-md-4"></div>
	    	<div class="col-md-4">
					<a href="inscrevase.php"><button type="link" class="btn btn-primary form-control">Inscreva-se!</button></a>
					
			</div>
			<div class="col-md-4"></div>

			<div class="clearfix"></div>
			<br />
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>

		</div>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>
<?php include('footer.php'); ?>