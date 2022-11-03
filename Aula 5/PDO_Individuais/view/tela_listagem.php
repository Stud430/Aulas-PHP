
<?php
	  include_once '../banco/conexao.php';
  	$conectar = getConnection();
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
		height: 250px;
	}
	#caixalogin{
		
		border-radius: 25px;
	}

  

  img{
    width: 40px;
    height: 40px;
  }

	</style>
    
	</head>

<body>

<h3> 
  <a href="tela_cadastro.php"> CADASTRO </a> | <a href="tela_listagem.php"> LISTAGEM e DELETAR </a> | <a href="tela_atualizacao.php"> ATUALIZAÇÃO </a> 
</h3>

<br><br><br><br><br><br>


<center>

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

      <td>
        <center>

          <a href="../model/deletar.php"><img src="deletar.png" name="id_deletar"></a>

        <!--  
          <form action="../model/deletar.php" method="post"> 
            <input type="image" src="deletar.png" value="<?php echo $exibir['id_usuario'] ?>" name="id_deletar" height="40" width="40"/>  <!-- <img src="deletar.png" id="img_deletar"> -->
          <!--</form>  -->
        
        </center>
      </td>

    <?php
          echo "</tr>";
        }
        
        echo "</tbody>";        
        echo "</table>";

        ?>

</center>


</body>

</html>
