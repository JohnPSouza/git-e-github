<?php require_once 'db.class.php'; ?>

<head>

<title>IFG Messeger</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">


  <!-- Custom styles for this template -->
  <link href="css/signin.css" rel="stylesheet">
  
</head>
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
  
<div class="container" style="padding-top:60px">
<div style="margin:6%;"><center><figure><img src="imagens/icone_twitter.png" width="60" height="60" title="Logo IFG Messeger"/></figure></center></div>

<div class="container span7 text-center col-md-4 col-md-offset-4">			
<center>
<form class="form-group" class="col-md-12" method="post" action="esquecisenha_enviaemail.php">
	<div class="etc-login-form">
		<p style="text-align:center;">Informe seu endereço de e-mail cadastrado e receba instruções para redefinir sua senha.</p>
	</div>
  <div class="col-md-12">
    <label for="emailes"><b>E-mail</b></label>
    <input type="email" class="form-control" name="emailes" style="align:center;" placeholder="Digite seu e-mail">
    
  </div>
  <div>
		<p>Já possui uma conta? <a href="login.php">Entrar</a></p>
		<p>Novo usuário? <a href="inscrevase.php">Inscreva-se!</a></p>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

</center>
	
<span class="container span7 text-left col-md-24"><?php include('footer.php'); ?></span>

</div>
</div>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
