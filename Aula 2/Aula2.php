<!DOCTYPE html>
<html> 
 	<head>
 		<title> Aula 7 - Lógica </title>  
 	    <meta charset="utf-8">
</head>

<body>

<?php /*
	$x = "ABCD";
	$y = "EFGH";

	//echo "$x $y";
	echo $x." ".$y; */
?>

<?php  /*
	$a = 3;
	$a *= 7;

	echo $a; */
?>

<?php // MÓDULO
/*	$x = 16;
//	$y = ($x%2);
	$x %= 2; // $x = $x %2;
	echo "O resto da divisão é $x."; */
?>


<!-- OPERADORES DE COMPARAÇÃO -->

<?php // Comparação ==
/*	$x = 7;
	$y = 10;

	if ($x == $y) { // == compara VALORES
		echo "São iguais";
	} else {
		echo "São diferentes";
	} */
?>

<?php // Comparação !=
/*	$x = 10;
	$y = 10;

	if ($x != $y) {
		echo "São diferentes";
	} else {
		echo "São iguais";
	}*/
?>

<?php // Comparação <
/*	$x = 9;
	$y = 10;

	if ($x < $y) {
		echo "É menor";
	} else {
		echo "É maior";
	}*/
?>

<?php // Comparação >
/*	$x = 9;
	$y = 10;

	if ($x > $y) {
		echo "É maior";
	} else {
		echo "É menor";
	}*/
?>

<?php // Comparação <=
/*	$x = 10;
	$y = 10;

	if ($x <= $y) {
		echo "É menor ou igual";
	} else {
		echo "É maior ou igual";
	}*/
?>
<?php // Comparação >=
/*	$x = 9;
	$y = 10;

	if ($x >= $y) {
		echo "É maior ou igual";
	} else {
		echo "É menor ou igual";
	}*/
?>

<!--
<?php // Comparação >= 
	$x = 11;
	$y = 10;

	echo $x >= $y ? "É maior ou igual" : "É menor ou igual"; // Operador Ternário
	/*
		Após ? -> Resposta POSITIVA
		Após : -> Resposta NEGATIVA
	*/
?>
-->


<!-- OPERADORES LÓGICOS -->


<?php 
/*
$x = 1;
$y = 3;
$z = 7;

If (($x > $y) && ($x > $z) ){
echo "$x é maior que $y e $z."; 
} else if (($y > $x) && ($y > $z)){
echo "$y é maior que $x e $z.";
} else if  (($z > $x) && ($z > $y)){
echo "$z é maior que $x e $y.";
} 

echo "<br>";
*/

/*
$x = 1;
$y = 3;
$z = 7;

If (($x > $y) || ($x < $z) ){
echo "$x é maior que $y e menor que $z."; 
} else if (($y > $x) || ($y < $z)){
echo "$y é maior que $x e menor que $z.";
} else if  (($z > $x) || ($z < $y)){
echo "$z é maior que $x e menor que $y.";
} 
*/
 
/*
$x = true;

If ($x == false){
echo "Ligando o Carro";
} else {
echo "O carro já está ligado.";
}
*/

 // xor retorna "Verdadeiro" SE pelo menos um dos valores for "Verdadeiro"
$x = true;
$y = false;

If ( $x  xor $y ){
echo "O resultado é verdadeiro";
} else {
echo "O resultado é falso";
}

 
?>


<?php 

?>

<?php 

?>

</body>

</html>
