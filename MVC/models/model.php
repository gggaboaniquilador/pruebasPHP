<?php 

/**
 * 
 */
class enlacesPagina 
{
	
	public function enlacesPaginasModel($enlacesModel)
	{
		if ($enlacesModel=="inicio"||$enlacesModel=="nosotros"||$enlacesModel=="servicios"||$enlacesModel=="contactenos") {

			$module = "Vistas/Modulos/".$enlacesModel.".php";

		}
		elseif ($enlacesModel=="index") {
			$module ="Vistas/Modulos/inicio.php";
		}
		else{
			$module ="Vistas/Modulos/inicio.php";
		}

		return $module;
	}
}

 ?>