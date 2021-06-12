<?php 
 #Funciones sin parametros
function saludo(){
	echo "hola<br>";
 }

saludo();

#funciones con parametro
function despedida($adios){

	echo $adios."<br>";

}
despedida("adios!!");
#Funcion con retorno
function retorno($retornar){
	return $retornar;

}

echo retorno("retornando?");

?>