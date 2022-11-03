
<!DOCTYPE html>
<html> 
 	<head>
 		<title> CADASTRO </title>  
 	    <meta charset="utf-8">

 	<style>
	body {
	  background-image: url('fundo_login.jpg');
	  background-repeat: no-repeat;
	  background-attachment: fixed;  
	  background-size: cover;	  
	}

	.caixalogin{
		background-color: white;
		opacity: 80%;
		width: 300px;
		height: 250px
	}
	#caixalogin{
		
		border-radius: 25px;
	}

	</style>
    
	</head>

<body>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<center>


<div class="caixalogin" id="caixalogin">
<br><br>
	<?php
		date_default_timezone_set('America/Sao_Paulo');
	    $today = date('d/m/y')." | ".date('H:i:s');; // Data formatada
		echo $today;
	?>
<h3> CADASTRO </h3>	
<form action="../model/cadastro.php" method="post">
	Login: <input type="text" name="login"> <br>
	Senha: <input type="text" name="senha"> <br>
	<p><input type="submit" value="Cadastrar"></p>
</form>
</div>
</center>


</body>

</html>
