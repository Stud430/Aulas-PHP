<?php
    //require '../control/verifica.php';
	
    include_once '../banco/conexao.php';
  	$conectar = getConnection();
?>

<?php

	if(isset($_POST['editar']))
{
    $id = $_POST['recebeID'];
    $login=$_POST['EditaLogin'];
    $senha=$_POST['EditaSenha'];

    // Verificando os campos se estao preenchidos
    if( empty($login) || empty($senha) || empty($id) ) {
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
        $query->bindparam(':senha', md5($senha));

        /*
        $query->execute();
        //Redirecionado para a pagina de Listagem
        header("Location: dashboard.php"); */

        if ($query->execute())
        {
            //echo "<script> alert('Remocao Realizada com sucesso !!!'); </script>";    
            header('Location: ../view/tela_listagem.php');
        }
        else
        {
            echo "Erro ao remover";
            print_r($query->errorInfo());
        }

    }
}
?>
