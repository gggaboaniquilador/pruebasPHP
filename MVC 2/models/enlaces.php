<?php 

/**
 * 
 */
class enlacesPagina 
{
	
	public function enlacesPaginasModel($enlacesModel)
	{
		if ($enlacesModel=="registro"||$enlacesModel=="ingresar"||$enlacesModel=="usuarios"||$enlacesModel=="salir") {

			$module = "Vistas/Modulos/".$enlacesModel.".php";

		}
		elseif ($enlacesModel=="index") {
			$module ="Vistas/Modulos/registro.php";
		}
		else{
			$module ="Vistas/Modulos/registro.php";
		}

		return $module;
	}
}

 ?>