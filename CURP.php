<!DOCTYPE html>
	<html>
		<head>
			<title>CURP</title>
		</head>
		<body>
			<form method="POST" action="CURP.php">
				<input type = "text" placeholder = "Apellido Paterno" name = "Apellido" pattern = "^[A-z]${1,}" required/><br/>
				<input type = "text" placeholder = "Apellido Materno" name = "Apellido2" pattern = "^[A-z]${1,}" required/><br/>
				<input type = "text" placeholder = "Nombre" name = "Nombre" pattern = "^[A-z]${1,}" required/><br/>
				Hombre: <input type = "radio" value = "H" name = "Sexo" required/>
				Mujer: <input type = "radio" value = "M" name = "Sexo" required/><br/>
				Fecha de Nacimiento: <select name = "dia">
				<?php
					for($x = 1; $x <= 31; $x++)
						echo '<option value = "'.$x.'">'.$x.'</option>';
				?>
				 </select>
				 <select name = "mes">
				<?php
					$arr = array('','Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
					for($x = 1; $x <= 12; $x++)
						echo '<option value = "'.$x.'">'.$arr[$x].'</option>'
				?>
				 </select>
				 <input type = "text" name = "ano" placeholder = "A&ntilde;o" maxlength = "4" pattern = "^[0-9]${4}" required/><br/>
				Entidad de nacimiento: <select name = "ent">
				<?php
					$arr2 = array('AGUASCALIENTES','BAJA CALIFORNIA','BAJA CALIFORNIA SUR','CAMPECHE','COAHUILA DE ZARAGOZA','COLIMA','CHIAPAS','CHIHUAHUA','DISTRITO FEDERAL','DURANGO','GUANAJUATO','GUERRERO','HIDALGO','JALISCO','MEXICO','MICHOACAN DE OCAMPO','MORELOS','NAYARIT','NUEVO LEON','OAXACA','PUEBLA','QUERETARO DE ARTEAGA','QUINTANA ROO','SAN LUIS POTOSI','SINALOA','SONORA','TABASCO','TAMAULIPAS','TLAXCALA','VERACRUZ','YUCATAN','ZACATECAS','NACIDO EN EL EXTRANJERO');
					$arr3 = array('AS','BC','BS','CC','CL','CM','CS','CH','DF','DG','GT','GR','HG','JC','MC','MN','MS','NT','NL','OC','PL','QT','QR','SP','SL','SR','TC','TS','TL','VZ','YN','ZS','NE');
					for($x = 0; $x <= 32; $x++)
						echo '<option value = "'.$arr3[$x].'">'.$arr2[$x].'</option>';
				?>
			  </select><br/>
			  <input type = "submit" value = "Enviar" name = "Enviar"/><br/>
			</form>
		</body>
	</html>
