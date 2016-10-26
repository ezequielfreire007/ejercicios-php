<?php

	if (isset($_POST["control1"])) {
		$fila = $_POST["control1"];
		//echo "ingresa a control1";
	}

	if (isset($_POST["control2"])) {
		//echo "ingresa a control2";
		$columna = $_POST["control2"];
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Ejercicio n°24</title>
	</head>

	<body>

		<form action="index.php" method="post">

			<table>
				<tr>
					<td>
						<select name="control1">
							<optgroup label="Fila">
								<?php 
								for ($i=1; $i <= 50; $i++) {
								?>
									<option value=<?php echo$i; ?>><?php echo $i; ?></option>

								<?php 
								}	
								?>
							</optgroup>
						</select>
					</td>
					<td>
						<select name="control2">
							<optgroup label="Columna">
								<?php 
								for ($j=1; $j <= 50; $j++) {
								?>
									<option value=<?php echo $j; ?>><?php echo $j; ?></option>

								<?php 
								}	
								?>
							</optgroup>
						</select>
					</td>
				</tr>
			</table>

			<input type="submit" name="Generar tablas">
			<br>
			<!-- Genero las tablas luego de realizar el pedido al server por post -->

			<table>
				<?php 
					echo empty($fila);
					echo empty($columna);
					// empty devuleve true si no esta seteada las variables
					// por esa razon negamos el empty para que ingrese si se encuentran seteadas
					if(!empty($fila) && !empty($columna)){
						for ($i=1; $i < $fila; $i++) { 
							echo "<tr>";
							for ($j=1; $j < $columna ; $j++) { 
								echo "<td>".$i.",".$j."</td>";
							}
							echo "</tr>";
						}		
					}						
				 ?>
			</table>
		</form>
	</body>
</html>