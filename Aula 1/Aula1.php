<!DOCTYPE html>
<html> 
 	<head>
 		<title> Aula 7 - Lógica </title>  
 	    <metacharset="utf-8">
</head>

<body>

<!--
    <?php 
	  // Exibindo uma mensagem
	  echo "Olá Mundo";
    ?> 
	-->

<!--
    <?php
     // Exibindo uma mensagem através de uma variável
     $mensagem = "Olá Mundo";
     echo $mensagem	
    ?>
-->

<!--
<?php
 $frase = "Bom Tarde"
 $frase = str_replace("Bom","Boa",$frase); 
 echo $frase;
?>

<?php
 $palavra = "Paralelepipedo" 
 $tamanho = strlen($palavra);

 echo $tamanho;
?>

<?php
 $palavra = "Paralelepipedo";
 $palavra = substr($palavra,0,3);
 echo $palavra; 
?>
-->

<!--
<?php
	// Exibindo Número
	//echo "5";
	echo 1,7 
?>
-->

<!--
    <?php 
    // Exibindo um número através de uma variável
	   $a = 10;
	   echo $a ; 
    ?> 
-->

<!--
   <?php 
	   $a = 10;
	   $b = 3;
	   $c = $a+$b;
	   echo 'A + B = ' + ($a +$b) ; 
    ?> 
-->

<!--
<?php
    $a = 13.1;
   // $b = (integer) $a;
    echo $a;
?>
-->

<?php 
 $x = 5;
 $y = 9;
 $z = 1;
 $w = 2;
 $resultado = ($x * ($z + $y)) - $w ;

 echo "Resultado: $resultado";
 //print ($resultado);
?>






<!--
<?php // Regra de Três
   $n1 = 10;
   $p1 = 1 ; // neste caso 1 é igual à 100% (100 / 100)
   $n2 = 3;
   $p2 = ($n2 * $p1) / $n1;

   echo "O resultado é $p2";
?>
-->




</body>

</html>
