<?php  
class MvcController{

#LLAMADA A LA PLANTILLA
#----------------------------------------
	Public function Plantilla(){

		include "vistas/template.php";
	}

	#interaccion del usuario
	Public function enlacesPaginasController(){
		if (isset($_GET["action"])) {
			$enlacesController = $_GET["action"];
		}else{
			$enlacesController="index";
		}



$res=enlacesPagina::enlacesPaginasModel($enlacesController);
include $res;
	}
}
?>