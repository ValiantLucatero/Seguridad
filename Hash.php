<?php
$cad=$_POST['cad'];
$chec=strlen($cad);
$max=$chec/2;
$cad1=substr($cad,$max);
$arr=str_split($cad1);
foreach($arr as $i)
	echo $i;
?>
