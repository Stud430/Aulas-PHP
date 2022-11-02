
<!--
<?php

	echo "Seja Bem Vindo(a) ao Sistema!!!";

?>
-->

<?php

	require '../control/verifica.php';

	include_once '../banco/conexao.php';
  	$conectar = getConnection();
?>



<?php
	if (isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])): 
?>

<?php
//    session_start();

    if ( !isset($_SESSION["idUser"]) ) {
        header("location:login.php");
    }

    // Determinar localidade BR
    setlocale(LC_ALL, 'pt_BR');

?>

<!DOCTYPE html>
<html> 
 	<head>
 		<title> DASHBOARD </title>  
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

<br><br><br><br><br><br>


<center>

<?php echo "Seja Bem Vindo(a) ". $nomeUser; ?>

<h1> DASHBOARD </h1>


<?php

        //SQL para selecionar os registros
       $sql = "SELECT id_usuario,login, senha FROM usuarios";// WHERE id_usuario = $_SESSION['idUser']";

       //Seleciona os registros
       $consulta = $conectar->prepare($sql);
       $consulta->execute();
       if (!$consulta) {
         die("Erro no Banco!");
       }
       
       echo '<link rel="stylesheet" href="css/estiloListagemPDO.css">';
       echo '<table class="table table-hover">';
       echo "<thead>";
       echo "<tr>";
       echo "<th><center> ID </center></th>";
       echo "<th><center> Login </center></th>";
       echo "<th><center> Senha </center></th>";             
       echo "</tr>";
       echo "</thead>";
       echo "<tbody>";

       while ($exibir = $consulta->fetch(PDO::FETCH_ASSOC)) {
          echo "<tr>";
          echo "<th><center>" . $exibir['id_usuario'] . "</center></th>";
          echo "<td><center>" . $exibir['login'] . "</center></td>";
          echo "<td><center>" . $exibir['senha'] . "</center></td>";
      ?>

    <!--  
      <td><center><a class="btn btn-warning" href="AtualizacaoPDO.php?id=<?php echo $exibir["id"]?>"> Atualizar</a></center></td>
      <td><center><a class="btn btn-danger" href="ExclusaoPDO.php?id=<?php echo $exibir["id"]?>">Excluir</a></center></td>
	-->

    <?php
          echo "</tr>";
        }
        
        echo "</tbody>";        
        echo "</table>";

        ?>

<a href="../control/logout.php"> SAIR </a>

<!--
<div class="caixalogin" id="caixalogin">
<br><br>
	<?php
		date_default_timezone_set('America/Sao_Paulo');
	    $today = date('d/m/y')." | ".date('H:i:s');; // Data formatada
		echo $today;
	?>
<h1> LOGIN </h1>	
		<form action="../controller/logar.php" method="post">
		<h3>	Login: <input type="text" name="login"> </h3>
		<h3><p> Senha: <input type="text" name="senha"> <p></h3> 
			<p> <input type="submit" value="Entrar"></p>
</form>
</div>
-->



</center>


</body>

</html>

<?php 
	else: header("Location: ../view/login.php");
	endif;
?>
