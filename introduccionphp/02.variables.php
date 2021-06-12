<?php 
#varieble numerica
$numero = 5;
echo "esto es una varieble numero: $numero<br>";
var_dump($numero);
echo "<br><br>";
#variable de texto
$palabra = "palabra";
echo "esto es una palabra: $palabra<br>" ;
var_dump($palabra);
echo "<br><br>";
#variable boleana
$boleana = true;
echo "esto es una varieble boleana: $boleana<br>";
var_dump($boleana);
echo "<br><br>";
#variable arreglo
$colores = array('rojo','amarillo','azul');
echo "esto es una varieble arreglo: $colores[0]<br>";
var_dump($colores); #el indice se usa para escoger en arreglos
echo "<br><br>";
#variable arreglo con propiedades
$verduras = array("verdura1"=>"lechuga", "verdura2"=>"cebolla");
echo "esto es una variable arreglo con propiedades: $verduras[verdura2]<br>";# ya no llamaria a tavez de indice sino a travez de su propiedad
var_dump($verduras);
echo "<br><br>";

#variable tipo opjeto
$frutas = (object)["fruta1"=>"pera","fruta2"=>"uva"];
echo "esto es una variable objeto: $frutas->fruta2<br>";
var_dump($frutas);
 ?>