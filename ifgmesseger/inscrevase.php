<?php

	$erro_usuario	= isset($_GET['erro_usuario'])	? $_GET['erro_usuario'] : 0;
	$erro_email		= isset($_GET['erro_email'])	? $_GET['erro_email']	: 0;

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
	          <a href="index.php"><img src="imagens/icone_twitter.png" title="Página Inicial"/></a>
	        </div>
	        
	        
	        <a class="navbar-brand" href="index.php" title="Página Inicial">IFG Messeger</a>
	       
	        <div id="navbar" class="navbar-collapse collapse">
	            
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="index.php" style="padding-bottom:0px"><img src="imagens/pagina.png" title="Página Inicial" width="34" height="32"/></a></li>
	            <li><a id="entrar" data-target="#" href="login.php" role="button" aria-haspopup="true" aria-expanded="false" title="Você possui uma conta? Faça login!">Entrar</a></li>
	            
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>


	    <div class="container">
	    	
	    	<br /><br />

	    	<div class="col-md-4"></div>
	    	<div class="col-md-4">
	    		<h3>Inscreva-se já.</h3>
	    		<br />
				<form method="post" action="registra_usuario.php" id="formCadastrarse">
					<div class="form-group">
						<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuário" required="requiored">
						<?php
							if($erro_usuario){ // 1/true 0/false
								echo '<font style="color:#FF0000">Usuário já existe</font>';
							}
						?>
					</div>

					<div class="form-group">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" required="requiored">
						<?php
							if($erro_email){
								echo '<font style="color:#FF0000">E-mail já existe</font>';
							}
						?>
					</div>
					
					<div class="form-group">
						<input type="password" class="form-control" id="senha" minLength="6" maxLength="18" name="senha" placeholder="Senha (mínimo de 6 caracteres)" required="requiored">
					</div>
					
					<button type="submit" class="btn btn-primary form-control" >Inscrever-se</button>
					
				</form>
			</div>
			<div class="col-md-4"></div>

			<div class="clearfix"></div>
			<br />
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>

		</div>


	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>
<?php include('footer.php'); ?>