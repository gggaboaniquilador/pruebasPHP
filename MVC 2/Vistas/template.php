<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>template</title>
</head>
<body>

<header>
		<h1>LOGOTIPO</h1>
</header>

<?php 

	include "Modulos/navegacion.php";

 ?>

<section>
	<?php
	$mvc = new MvcController();
	$mvc -> enlacesPaginasController();
	 ?>
</section>

</body>
</html>