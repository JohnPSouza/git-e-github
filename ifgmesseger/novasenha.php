<?php require_once 'db.class.php'; ?>

<head>

<title>IFG Messeger</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>


<div style="margin:4%;"><center><figure><img src="imagens/icone_twitter.png" width="60" height="60" title="Logo IFG Messeger"/></figure></center></div>
			
<center>
<form class="container span7 text-center col-md-4 col-md-offset-4" class="col-md-3" method="post" action="atualizasenha.php" onSubmit="return validarForm(this);">
  <div class="form-group" style="text-align:left;">
    <label for="nsenha"><b>Nova Senha</b></label>
    <input type="password" class="form-control" name="nsenha" minLength="6" maxLength="18" required style="align:center;" placeholder="Digite nova senha. (mín. 6 e máx. 18 caracteres)">
    
  </div>
  <div class="form-group" style="text-align:left;">
    <label for="nsenhaconf"><b>Confirmar Senha</b></label>
    <input type="password" class="form-control" name="nsenhaconf" minLength="6" maxLength="18" required style="align:center;" placeholder="Confirmar senha">
  </div>
  <button type="submit" class="btn btn-primary">Redefinir</button>
    
    <span class="container span7 text-left col-md-24"><?php include('footer.php'); ?></span>
</form>
</center>

<script>
function validarForm(f) 
{ 
if (f.nsenhaconf.value!=f.nsenha.value) { 
	alert ("O campo Confirmar Senha deve ser preenchido com o mesmo valor do campo Senha."); 
	return false;
	}

return true; 
} 
</script>
