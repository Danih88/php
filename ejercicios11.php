<?php
 
 $saludo = "hola ";
 $compañeros= "compañeros";
  $saludando = $saludo.$compañeros;

 echo $saludando;

//Hacer un programa que sume dos variables que almacenan dos números distintos
echo("<br>");

 $num1 = 6;
 $num2 = 4;

 $resultado = $num1+$num2;

 echo "el resultado de la suma ". $num1. "+". $num2. " es ". $resultado;
echo("<br>");

/*Ejercicio 4:
Hacer un programa que muestre en pantalla la tabla del 10*/
$numero=10;

for ($i=1; $i <10 ; $i++) {
$resultado=$numero*$i ;
echo"<br>". $numero."*".$i."=".$resultado;
}

echo "<br>";

/*Ejercicio 5:
Hacer un programa que muestre por pantalla las potencias de los números del 1 al 4. Utiliza la función pow() de PHP*/
echo "<hr>";
echo "<h2> Ejercicio 6. Números pares del 1 al 100</h2>";
$min=1;
$max=4;
$exponente=2;

for ($i=$min; $i<=$max; $i++) { 
	$resultado= pow($i, $exponente);
	echo "$i elevado a $exponente es $resultado <br>";
	
}

/*Ejercicio 6:
Mostrar todos los números pares del 1 al 100*/
//$texto= " ";
for($i=1; $i<=100; $i++){
	if($i%2==0){
		echo "$i";
	}
}





echo("<br>");
//Hacer un programa que muestre en pantalla información de PHP con la función
echo phpinfo() ;




