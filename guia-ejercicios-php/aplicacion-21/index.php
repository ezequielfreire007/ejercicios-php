
<!DOCTYPE html>
<html>
	<head>
		<title>Ejercicio n°21</title>
	</head>

	<body>

		<table>
			<?php
				for ($i=1; $i <= 5 ; $i++) { 
					echo "<tr>";
					for ($j=1; $j <= 3; $j++) { 
						echo "<td>".$i.",".$j."</td>";
					}
					echo "</tr>";
				}
			?>		
		</table>

	</body>
</html>
