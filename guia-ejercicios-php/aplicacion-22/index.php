
<!DOCTYPE html>
<html>
	<head>
		<title>Ejercicio n°21</title>
	</head>

	<body>

		<table>
			<?php
				$color = "";

				for ($i=1; $i <= 5 ; $i++) { 
					if ($i%2 == 0) {
						$color = "#FFFFFF"; //color blanco
					}else{
						$color = "#BDBDBD"; //color gris
					}
					echo "<tr style=background-color:".$color.">";
					for ($j=1; $j <= 3; $j++) { 
						echo "<td>".$i.",".$j."</td>";
					}
					echo "</tr>";
				}
			?>		
		</table>

	</body>
</html>