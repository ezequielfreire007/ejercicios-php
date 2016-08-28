<?php
	
	$a = 6;
	$b = 9;
	$c = 8;

	if(($a>$b) && ($b>$c) || ($a<$b) && ($b<$c) ){
		echo "El medio es: $b";
	}

	if (($b>$a)&&($a>$c) || ($b<$a)&&($a<$c)) {
		echo "El medio es: $a";
	}

	if (($a>$c)&&($c>$b) || ($a<$c)&&($c<$b)) {
		echo "El medio es: $c";
	}

?>


