



<?php

session_start();


function getConnection(){

$localhost = "localhost";
$user = "root";
$passw = "";
$banco = "aula3";

global $pdo;
try{
	//orientado a objetos com pdo
	$pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost, $user, $passw);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

/*
	// Sistemas
	$sql = $pdo->query("SELECT * FROM usuarios");
	$sql->execute();

	echo $sql->rowCount();
*/
	return $pdo;
} catch (PDOException $e){
	echo "ERRO: ".$e->getMessage();
}
}


/*
//orientado a objetos com pdo
$pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost, $user, $passw);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Sistemas
$sql = $pdo->query("SELECT * FROM usuarios");
$sql->execute();

echo $sql->rowCount();
*/

?>






<!--
<?php

session_start();

$localhost = "localhost";
$user = "root";
$passw = "";
$banco = "aula3";

global $pdo;
try{
	//orientado a objetos com pdo
	$pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost, $user, $passw);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

/*
	// Sistemas
	$sql = $pdo->query("SELECT * FROM usuarios");
	$sql->execute();

	echo $sql->rowCount();
*/
} catch (PDOException $e){
	echo "ERRO: ".$e->getMessage();
}

/*
//orientado a objetos com pdo
$pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost, $user, $passw);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Sistemas
$sql = $pdo->query("SELECT * FROM usuarios");
$sql->execute();

echo $sql->rowCount();
*/

?>
-->
