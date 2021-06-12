<?php 
#condiciones
$a = 5;
$b = 10;

if ($a > $b) {
	echo "a es mayor que b";
}
elseif ($a == $b) {
	echo "a es igual que b";
}
elseif ($a==6) {
	echo "<br>YESS";
}
else{
	echo "A es meno que B";
}
echo "<br><br><br>";
#switches

$dia="lunes";
switch ($dia) {
	case 'sabado':
		echo "voy a estudiar php";
		break;
	case 'viernes':
		echo "de fiesta!";
		break;
	case 'domingo':
		echo "pa misita";
		break;
	default:
		echo "a la universidad";
		break;
}
echo "<br>";
#ciclo while
$n = 0;
while ($n <= 5) {
	echo $n;
	$n++;
}
$p = 1;
echo "<br>";
#ciclo do while
do{
	echo $p;
	$p++;
}
while ($p <= 5); 
echo "<br>";

#ciclo for
for ($i=0; $i <= 5 ; $i++) { 
	echo $i;
}
 ?>

