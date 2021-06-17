<?php
//Leer dos números que llegan por parámetro GET y mostrar la suma, resta, multiplicación y división de ambos
//$_GET es un array que guarda los valores que recibe por la Url
//var_dump()  muestra el tipo de contenido de una valriable
echo var_dump($_GET);

echo"<br>";

//isset() comprueba si un valor existe

if(isset($_GET['numero1'])&& isset($_GET['numero2'])){
    $numero1= $_GET['numero1'];
    $numero2= $_GET['numero2'];

    echo "<p> valores recibidos: $numero1 y $numero2</p>";
    $resultado = $numero1 + $numero2;
    echo "<p> La suma es: $resultado</p>";

    $resultado = $numero1 - $numero2;
    echo "<p> La resta es: $resultado</p>";

    $resultado = $numero1 * $numero2;
    echo "<p> la multiplicaciòn es: $resultado</p>";
    if($numero2 !=0){
        $resultado = $numero1 / $numero2;
        echo "<p> La división es: $resultado</p>";
    }else{
        echo "<p> No se puede realizar la división por 0</p>";
    }

    //Programa que muestre todos los números entre dos números que nos llegan por GET
  if($numero1<$numero2){
    for($i=$numero1; $i<=$numero2; $i++){
        echo "$i ";
    }
}else{
    echo "el numero 1 tiene que ser mayor que el numero 2";
}
}else{
    echo "introduce valores validos";
}



