
<?php


	if(isset($_GET["opcion"])){
    	$color = $_GET["opcion"];
	}


?>

<html>
	<head>
		<title>Ejercicio nº23</title>
	</head>

	<body style=background-color:<?php echo $color;?>>
		<form action="index.php" method="get">
			<select name ="opcion">
				<optgroup label="Colores">
					<option value="red">Blanco</option>
					<option value="blue">Rojo</option>
					<option value="green">Azul</option>
				</optgroup>
			</select>
			<input type="submit" value="Enviar"/>
		</form>
	</body>

</html>
