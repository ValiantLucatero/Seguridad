<?php
$cad=$_POST['cad'];
$llave=$_POST['llav'];
$op=$_POST['op'];
$chec=strlen($cad);
$chec1=strlen($llave);
if($chec==$chec1)
{
	if($op=='C')
	{
		if (is_numeric($llave))
		{
			$arr=str_split($cad,3);
			for($i=$chec;$i>=0;$i--)
				echo $arr[$i];
		}
		elseif(ctype_alpha($llave))
		{
			$arr=str_split($cad,6);
			for($i=$chec;$i>=0;$i--)
				echo $arr[$i];
		}
	}
	if($op=='D')
	{
		if (is_numeric($llave))
		{
			strrev($cad);
			$arr=str_split($cad,3);
			for($i=count($arr);$i>=0;$i--)
				echo $arr[$i];
		}
		elseif(ctype_alpha($llave))
		{
			strrev($cad);
			$arr=str_split($cad,6);
			for($i=count($arr);$i>=0;$i--)
				echo $arr[$i];
		}
	}
}
else
	echo 'FUCK YOU! Usuario';
?>
