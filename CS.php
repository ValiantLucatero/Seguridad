<?php
$cad=$_POST['cad'];
$op=$_POST['op'];
if($op=='C')
{
	$arr=str_split($cad,3);
	for($i=9;$i>=0;$i--)
		echo $arr[$i];
}
if($op=='D')
{
	$arr=str_split($cad,3);
	for($i=9;$i>=0;$i--)
		echo $arr[$i];
}
?>
