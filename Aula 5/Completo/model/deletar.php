
<?php
	include '../banco/conexao.php';
	$conn = getConnection();
?>

<?php
	// pega o ID da URL
	$id = isset($_GET['id']) ? $_GET['id'] : null;
	 
	// valida o ID
	if (empty($id))
	{
	    echo "ID não informado";
	    exit;
	}
	 
	// remove do banco
	$sql = "DELETE FROM usuarios WHERE id_usuario = :id";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':id', $id, PDO::PARAM_INT);
	 
	if ($stmt->execute())
	{
		//echo "<script> alert('Remocao Realizada com sucesso !!!'); </script>";	
	    header('Location: ../view/dashboard.php');
	}
	else
	{
	    echo "Erro ao remover";
	    print_r($stmt->errorInfo());
	}		
