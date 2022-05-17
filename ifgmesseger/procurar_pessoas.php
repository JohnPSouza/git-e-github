<?php
	
	session_start();

	if(!isset($_SESSION['usuario'])){
		header('Location: index.php?erro=1');
	}

	require_once('db.class.php');
    
	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$id_usuario = $_SESSION['id_usuario'];

	//--qtde de tweets
	$sql = " SELECT COUNT(*) AS qtde_tweets FROM tweet WHERE id_usuario = $id_usuario ";
	$resultado_id = mysqli_query($link, $sql);
	$qtde_tweets = 0;
	if($resultado_id){
		$registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
		$qtde_tweets = $registro['qtde_tweets'];
	} else {
		echo 'Erro ao executar a query';
	}

	//--qtde de seguidores
	$sql = " SELECT COUNT(*) AS qtde_seguires FROM usuarios_seguidores WHERE seguindo_id_usuario = $id_usuario ";
	$resultado_id = mysqli_query($link, $sql);
	$qtde_seguidores = 0;
	if($resultado_id){
		$registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
		$qtde_seguidores = $registro['qtde_seguires'];
	} else {
		echo 'Erro ao executar a query';
	}

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
	
		<script type="text/javascript">

			$(document).ready( function(){

				//associar o evento de click ao botão
				$('#btn_procurar_pessoa').click( function(){
					
					if($('#nome_pessoa').val().length > 0){
						
						$.ajax({
							url: 'get_pessoas.php',
							method: 'post',
							data: $('#form_procurar_pessoas').serialize(),
							success: function(data) {
								$('#pessoas').html(data);

								$('.btn_seguir').click( function(){
									var id_usuario = $(this).data('id_usuario');
									
									$('#btn_seguir_'+id_usuario).hide();
									$('#btn_deixar_seguir_'+id_usuario).show();

									$.ajax({
										url: 'seguir.php',
										method: 'post',
										data: { seguir_id_usuario: id_usuario },
										success: function(data){
											alert('Agora <?= $_SESSION['usuario'] ?> está seguindo este usuário.');
										}
									});

								});

								$('.btn_deixar_seguir').click( function(){
									var id_usuario = $(this).data('id_usuario');

									$('#btn_seguir_'+id_usuario).show();
									$('#btn_deixar_seguir_'+id_usuario).hide();

									$.ajax({
										url: 'deixar_seguir.php',
										method: 'post',
										data: { deixar_seguir_id_usuario: id_usuario },
										success: function(data){
											alert('Registro removido com sucesso!');
										}
									});

								});
							}
						});
					}

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
	          <a href="home.php"><img src="imagens/icone_twitter.png" title="Página Inicial"/></a>
	        </div>
	        <div><a class="navbar-brand" href="procurar_pessoas.php" title="Atualizar Página">IFG Messeger</a></div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	            
	          <ul class="nav navbar-nav navbar-right">
	          	<li><a href="home.php" style="padding-bottom:0px"><img src="imagens/pagina.png" title="Página Inicial" width="34" height="32"/></a></li>
	            <li><a href="sair.php" style="padding-bottom:0px"><img src="imagens/sair2.png" title="Sair" width="32" height="30"/></a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>


	    <div class="container">
	    	<div class="col-md-3">
	    		<div class="panel panel-default" style="color:#0040FF">
	    			<div class="panel-body">
	    				<h3><b><?= $_SESSION['usuario'] ?></b></h3>

	    				<hr />
	    				<div class="col-md-6">
	    					TWEETS <br /> <?= $qtde_tweets ?>
	    				</div>
	    				<div class="col-md-6">
	    					SEGUIDORES <br /> <?= $qtde_seguidores ?>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
	    	
	    	<div class="col-md-6">
	    		<div class="panel panel-default">
	    			<div class="panel-body">
	    				<form id="form_procurar_pessoas" class="input-group">
	    					<input type="text" id="nome_pessoa" name="nome_pessoa" class="form-control" placeholder="Quem você está procurando?" maxlength="140" />
	    					<span class="input-group-btn">
	    						<button class="btn btn-default" id="btn_procurar_pessoa" type="button"><img src="imagens/pesquisar3.ico" title="pesquisar" width="28" height="18"/></button>
	    					</span>
	    				</form>
	    			</div>
	    		</div>

	    		<div id="pessoas" class="list-group"></div>

			</div>
		</div>


	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
	<span class="container span7 text-left col-md-24"><?php include('footer.php'); ?></span>
</html>