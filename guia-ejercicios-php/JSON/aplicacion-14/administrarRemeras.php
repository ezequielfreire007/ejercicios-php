<?php 
	$error = "{error:1}";
    $text = "";

    //Verifico que el archivo json exista
	if (!file_exists("remeras.json")){
		return $error;
	}

	//abro el archivo json 
	$archivo = fopen("remeras.json", "r");

	//recorro el archivo y lo concateno
	while (!feof($archivo)) {
		$text.=fgets($archivo);
	}

	//cierro el achivo json
	fclose($archivo);

	//devuelvo el tecto
	echo $text;

 ?>
