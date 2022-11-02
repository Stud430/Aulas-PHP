
<?php
/*
$frutas = array(1 => "lemon",2 => "orange",3 => "banana",4 => "apple");
//print_r($frutas); 

 //$arr = [1, 2, 3, 4, 5];
 
    foreach ($frutas as $f) {
        echo '<br>'.$f . ' ';
    }
 */
?>


<?php
/* 

// Função de STRING explode.
// Essa função DIVIDE EM PARTES um string

$nome_completo  = "Paula Costa de Oliveira";
$partes = explode(" ", $nome_completo);
echo $partes[0]." "; // Parte 1
echo $partes[1]." "; // Parte 2
*/
?>

<?php /*

// Grava em um arquivo
$number = 9;
$str = "Beijing";
$file = fopen("teste.txt","w");
echo fprintf($file,"There are %u million bicycles in %s.",$number,$str);
*/
?>

<?php /*
	// Abre um arquivo
	$myfile = fopen("teste.txt", "r") or die("Unable to open file!");
	echo fread($myfile,filesize("teste.txt")); // teste.txt -> nome do meu arquivo
	fclose($myfile);
*/
?>

<?php/*
// Juntas os ARRAYS
$arr = array('Olá','Mundo!');
echo join(" ",$arr);
*/
?>

<?php
/*
$frase = "Olá Mundo!";
echo $frase . "<br>";
echo ltrim($frase,"Olá");
*/
?>

<?php  /*
// Função explode e ltrim
$nome_completo  = "Paula Costa de Oliveira";
$partes = explode(" ", $nome_completo);
echo $nome_completo."<br>";
echo ltrim($nome_completo,"Paula Costa de"); */
?>

<?php /*
// incripta a SENHA
$str = "123456";
echo md5($str); */
?>

 
<!-- Funções Matemáticas em PHP -->

<?php/*
// floor - Arredonda para BAIXO
echo floor(4.3); */
?>

<?php/*
// ceil - Arredonda para CIMA
echo ceil(4.3); */
?>

<?php /*
echo max(2, 3, 1, 6, 7);  // Retorna o MAIOR número
echo min(2, 3, 1, 6, 7);  // Retorna o MENOR número
echo min(array(2, 4, 5)); // Retorna o MENOR número do ARRAY 
*/
?>

<?php /*
	$a = array('a','b','c');
	$result = count($a);
	echo $result; */
?>

<!-- Funções de Data em PHP -->

<?php /*
	// Define o fuso horário local
 	date_default_timezone_set('America/Sao_Paulo');
 	
	$today = date('Ymd'); // Pega a data atual
	echo $today;

	echo "<br>";

	$today = date('d/m/y'); // Data formatada
	echo $today;

	echo "<br>";

	echo date('H:i:s'); // Pega o horário atual c/ segundos
	*/
?>

<?php


?>

<?php


?>

<?php


?>

<?php


?>

<br>

<?php
/* VER DEPOIS
$nome_completo  = "Paula Costa de Oliveira";
$partes = explode(" ",$nome_completo);
//echo $partes[0]." "; // Parte 1
//echo $partes[1]." "; // Parte 2

$x = 97;
$file = fopen("test.txt","w");
echo fprintf($file,"%s $u",$partes[0],$x);
//echo fprintf($file," %s",$partes[1]);
*/
?>