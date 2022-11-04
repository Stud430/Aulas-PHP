
<?php
	include '../banco/conexao.php';
	$conectar = getConnection();
?>

<?php
	// pega o ID da URL
	$id = $_GET["id"];
	 
	// remove do banco
	$sql = "DELETE FROM usuarios WHERE id_usuario = :id";
	$stmt = $conectar->prepare($sql);
	$stmt->bindParam(':id', $id, PDO::PARAM_INT);
	 
	if ($stmt->execute())
	{
		//echo "<script> alert('Remocao Realizada com sucesso !!!'); </script>";	
	    header('Location: ../view/tela_listagem.php');
	}
	else
	{
	    echo "Erro ao remover";
	    print_r($stmt->errorInfo());
	}		
