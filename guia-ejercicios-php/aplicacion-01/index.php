
<?php

	$suma = 0;
	$num = 1;

	do{
		$suma += $num;
		$num++;
		echo "$suma";
		echo "<br>";
	}while($suma < 1000);

	echo "Cantidad de numeros sumados";
	echo "<br>";
	echo "$num";

 ?>
