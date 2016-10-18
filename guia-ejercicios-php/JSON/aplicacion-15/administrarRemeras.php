<?php 
	
	$error = '{error : "1"}';
    $inputText = isset($_POST['txtMiPais']) ? $_POST['txtMiPais'] : NULL;
    $text = "";
    $arrayfiltrado = array();


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

	//decodifico el objeto json a php, si el json esta codificado como array sera una array de php
	$objJSON = json_decode($text);

	for ($i=0; $i < count($objJSON); $i++) { 
		if ($objJSON[$i]->manofacturer->location->country == $inputText){
			array_push($arrayfiltrado, $objJSON[$i]);
		}
	}

	//cierro el achivo json
	fclose($archivo);

	//retorno el filtrado a la vista
	echo json_encode($arrayfiltrado);

 ?>
