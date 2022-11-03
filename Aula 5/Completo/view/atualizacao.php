<?php
    require '../control/verifica.php';
	
    include_once '../banco/conexao.php';
  	$conectar = getConnection();
?>

<?php

	if(isset($_POST['editar']))
{
    $id = $_POST['id'];
    $login=$_POST['EditaLogin'];
    $senha=$_POST['EditaSenha'];

    // Verificando os campos se estao preenchidos
    if( empty($login) || empty($senha) ) {
        if(empty($login)) {
            echo "<font color='red'>Campo Login Obrigatorio.</font><br/>";
        }
        if(empty($senha)) {
            echo "<font color='red'>Campo Senha Obrigatorio.</font><br/>";
        }
    } else {
        //atualizado dados na tabela
        $sql = "UPDATE usuarios SET login = :login, senha = :senha WHERE id_usuario = :id";

        $query = $conectar->prepare($sql);

        $query->bindparam(':id', $id);
        $query->bindparam(':login', $login);
        $query->bindparam(':senha', $senha);

        /*
        $query->execute();
        //Redirecionado para a pagina de Listagem
        header("Location: dashboard.php"); */

        if ($query->execute())
        {
            //echo "<script> alert('Remocao Realizada com sucesso !!!'); </script>";    
            header('Location: dashboard.php');
        }
        else
        {
            echo "Erro ao remover";
            print_r($query->errorInfo());
        }

    }
}
?>

<?php
	// pega o ID da URL
	$id = isset($_GET['id']) ? (int) $_GET['id'] : null;
	//$id = $_GET['id'];

	// Consulta a tabela de Login
    $consulta = "SELECT id_usuario, login,senha ";
    $consulta .= "FROM usuarios ";
    $consulta .= "WHERE id_usuario = :id ";


/*
    $con_login = $conn->prepare($consulta);
    $con_login->execute();
    $linha = $con_login -> fetch(PDO::FETCH_ASSOC);
*/
 
	$conexao_login = $conectar->prepare($consulta);
	$conexao_login->execute(array(':id' => $id));

	$linha = $conexao_login->fetch(PDO::FETCH_ASSOC)
?>


<!DOCTYPE html>
<html> 
    <head>
        <title> Atualização </title>  
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

<center>

<div class="caixalogin" id="caixalogin">
<br><br>
    <?php
        date_default_timezone_set('America/Sao_Paulo');
        $today = date('d/m/y')." | ".date('H:i:s');; // Data formatada
        echo $today;
    ?>
<h1> Atualizar </h1> 
<form action="atualizacao.php" method="post">
    Login: <input type="text" value="<?php echo $linha['login']?>" name="EditaLogin" id=EditaLogin> <br>
    Senha: <input type="text" value="<?php echo $linha['senha']?>" name="EditaSenha" id=EditaSenha> <br>
    <input type="hidden" name="id" value="<?php echo $linha['id_usuario'] ?>"> <!-- esconde o id dos dados -->

    <p><input type="submit" name="editar" value="ATUALIZAR"></p> <!-- Botão Atualizar -->
</form>
</div>

<br><br><br>
<a href="../view/dashboard.php"> VOLTAR </a> | <a href="../control/logout.php"> SAIR </a>

</center>


</body>

</html>


<!--


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


    -->