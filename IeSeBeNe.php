<?php
function modulo($x,$y)
{
	$z = $x/$y;
	$o = floor($z);
	$r = $x-($o*$y);
	return $r;
}
$fin="Numero incorrecto";
$cad=$_POST['cad'];
$op=$_POST['op'];
if($op==10)
{
	$div = str_split($cad);
	$cont = count($div);
	$value = $div[0];
	for($x = 1; $x < $cont-1; $x++)
		$value = $value + (($x+1)*$div[$x]);
	$value2 = $value-1;
	$resul = (modulo($value2,11))+1;
	if($cont == 10)
	{
		if($resul == $div[9])
			$fin="Numero correcto";
	}
	elseif($cont == 11)
	{
		if($value2 == $div[10])
			$fin="Numero correcto";
	}
	echo $fin;
}
if($op==13)
{
	$div = str_split($isbn);
	$cont = count($div);
	$impar = $div[0];
	$par = $div[1]*3;								
	for($x = 3; $x < $cont-1; $x+=2)
		$par = $par + ((3)*($div[$x]));
	for($x = 2; $x < $cont-1; $x+=2)
		$impar = $impar + $div[$x];
	$fin = 10-($par+$impar);
	$fin2 = modulo($fin,10);
	if($fin2 == $div[12])
		$fin="Numero correcto";
	echo $fin;
}
?>
