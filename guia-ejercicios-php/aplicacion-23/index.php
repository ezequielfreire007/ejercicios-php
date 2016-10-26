<?php

	$color = "";

	if(isset($_GET["opcion"])){
    	//$color = $_GET["opcion"];
	
    	if ($_GET["opcion"] == "red") {
    		$color = "red";
    	}elseif ($_GET["opcion"] == "blue") {
    		$color = "blue";
    	}elseif ($_GET["opcion"] == "green") {
    		$color = "green";
    	}

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
					<option value="red">Rojo</option>
					<option value="blue">Azul</option>
					<option value="green">Verde</option>
				</optgroup>
			</select>
			<input type="submit" value="Cambiar Color"/>
		</form>	
	</body>

</html>