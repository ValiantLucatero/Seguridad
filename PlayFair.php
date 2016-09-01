<?php
echo '<!DOCTYPE html>
	<html>
		<head>
			<title>Practica 2</title>
		</head>
		<body>
			<form method="POST" action="PF.php">
				<input type="text" name="cad" placeholder="Ingresa cadena"/><br/>
				PlayFair <select name="n">';
							for($i=2;$i<101;$i++)
								echo '<option value="'.$i.'">'.$i.'</option>';
echo'					 </select><br/>
				<input type="radio" name="op" value="C"/>Cifrar
				<input type="radio" name="op" value="D"/>Descifrar<br/>
				<input type="submit" value="Enviar"/>
			</form>
		</body>
	</html>';
?>
