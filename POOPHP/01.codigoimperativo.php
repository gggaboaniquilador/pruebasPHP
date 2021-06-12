<?php 
#codigo imperativo o espagueti
$automovil1= (object)["marca"=>"toyota", "modelo"=>"corolla"];
$automovil2= (object)["marca"=>"fiat", "modelo"=>"uno"];
function mostrar($automovil){

echo "<p> Hola Soy un $automovil->marca, modelo $automovil->modelo</p>";

}
mostrar($automovil2);
mostrar($automovil1);
 ?>
