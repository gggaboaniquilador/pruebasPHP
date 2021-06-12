<?php 
echo"<h1>Bye bye!</h1>";
session_destroy();
echo '<script>window.location = "index.php?pagina=ingreso";</script>';