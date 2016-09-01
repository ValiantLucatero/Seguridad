<?php		
$cadena=$_POST['cad'];
$cod=$_POST['op'];
$llave=$_POST['llav'];
if($cod=='C')
{
	$mit=str_split($llave,3);
	$mitad1=str_split($mit[0]);
	$mitad2=str_split($mit[1]);
	for($x=2; $x >= 0; $x--) 
	{
		$alr[]=$mitad1[$x];
		$alr2[]=$mitad2[$x];
	}
	$all=$alr[0].$alr[1].$alr[2].$alr2[0].$alr2[1].$alr2[2];
	if($all=='palmer')
	{
		$arr=str_split($cadena);
		$y=count($arr);
		for($x=$y-1;$x>=0;$x--)
			echo $arr[$x];
	}
	else
		echo "Llave incorrecta";
}
elseif($cod=='D')
{
	if($llave=='palmer')
	{
		$arr=str_split($cadena);
		$y=count($arr);
		for($x=$y-1;$x>=0;$x--)
		{
			echo $arr[$x];
		}
	}
}
else
	echo "Llave incorrecta";
?>
