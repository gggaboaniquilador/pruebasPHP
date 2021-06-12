<?php 

#CLASE: modelo que se utiliza para crear objetos que 
#comparten un mismo compotamiento, estado, e identidad.

class Automovil
{
	#PROPIEDADES: CARACTERISTICAS QUE PUEDE TENER UN OBJETO
	public $marca;
	public $modelo;

	#METODO: ES EL ALGORITMO ASOCIADO A UN OBJETO QUE INDICA LA CAPACIDAD DE LO QUE ESTE PUEDE HACER; FUNCION QUE HACE TAREAS BASICAMENTE.
	public function mostrar(){
		echo "<p> Hola soy un $this->marca, modelo $this->modelo</p>";
	}
}

#OBJETO: ENTIDAD PROVISTA DE METODOS O MENSAJES A LOS CUALES RESPONDE PROPIEDADES CON VALORES CONCRETOS
$a = new Automovil();
$a -> marca = "toyota";
$a -> modelo = "Corolla";
$a -> mostrar();

$b = new Automovil();
$b -> marca = "Fiat";
$b -> modelo = "Golf";
$b -> mostrar();

$c = new Automovil();
$c -> marca = "Fiat";
$c -> modelo = "Palio";
$c -> mostrar();

 ?>