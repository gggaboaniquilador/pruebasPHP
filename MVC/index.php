<?php 

require_once "Controladores/Controller.php";
require_once "models/model.php";
$mvc = new MvcController();

if ($mvc==null) {
	echo "vacio";
} else {
	$mvc -> Plantilla();
}


 ?>