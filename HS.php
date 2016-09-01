<?php
$cad=$_POST['cad'];
$x = str_split($cad);
$valor = ord($x[0]);
for($i = 1; $i < count($x); $i++)
{
	$y[$i] = ord($x[$i]);
	$valor = $valor + $y[$i];
}
echo htmlspecialchars($valor);	
?>
