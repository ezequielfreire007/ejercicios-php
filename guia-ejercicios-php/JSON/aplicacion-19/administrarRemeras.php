<?php 

	$queHago = isset($_POST['queHago']) ? $_POST['queHago']:NULL;

	switch ($queHago) {
		case 'traerRemeras':
			
			$error = '{error : "1"}';
		    $inputText = isset($_POST['txtPais']) ? $_POST['txtPais'] : NULL;
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
	
			break;
		case 'traerRemerasFiltradas':
			# code...
			break;
		case 'traerRemerasFiltradasPorCampo':
			//si el archivo json no existe devuelve un json de error
			if (!file_exists("remeras.json")) {
				return '{error : "No existe el archivo json"}';
			}

			//Tomo los datos de las variables enviadas por jquery ajax
			$txtFiltrar = isset($_POST['txtFiltrar']) ? $_POST['txtFiltrar']:NULL;
			$selectOption = isset($_POST['selectOption']) ? $_POST['selectOption']:NULL;

			//texto json de remeras
			$remeras = "";
			//array de json filtrado
			$arrayFiltrado = array ();

			//abrimos el archivo
			$archivo = fopen("remeras.json", "r");

			//recorro el archivo
			while (!feof($archivo)) {
				$remeras.=fgets($archivo);
			}

			//creo un objeto json con el texto del archivo que se encuentra en formato json
			$objJsonDecode = json_decode($remeras);


			//Realiza la accion dependiendo la seleccion en el select de la vista
			switch ($selectOption) {
				case 'tamano':
					
					foreach ($objJsonDecode as $miJson) {
						if ($miJson->size == $txtFiltrar) {
							array_push($arrayFiltrado, $miJson);
						}
					}
					
					break;
				
				case 'color':
					
					foreach ($objJsonDecode as $miJson) {
						if ($miJson->color == $txtFiltrar) {
							array_push($arrayFiltrado, $miJson);
						}
					}

					break;

				case 'pais':
					
					foreach ($objJsonDecode as $miJson) {
						if ($miJson->manofacturer->location->country == $txtFiltrar) {
							array_push($arrayFiltrado, $miJson);
						}
					}

					break; //fin swhitch selectOption

			}

			fclose($archivo);
 			echo json_encode($arrayFiltrado);
			break;//fin de traer campos filtrados

		case 'agregarRemera':
			
			//Variables entregadas desde jaquery ajax
			$txtSlogan = isset($_POST['txtSlogan']) ? $_POST['txtSlogan']:NULL;
			$txtSize = isset($_POST['txtSize']) ? $_POST['txtSize']:NULL;
			$txtPrice = isset($_POST['txtPrice']) ? $_POST['txtPrice']:NULL;
			$txtColor = isset($_POST['txtColor']) ? $_POST['txtColor']:NULL;
			$txtName = isset($_POST['txtName']) ? $_POST['txtName']:NULL;
			$txtCountry = isset($_POST['txtCountry']) ? $_POST['txtCountry']:NULL;
			$txtCity = isset($_POST['txtCity']) ? $_POST['txtCity']:NULL; 
        	$txtId = 0;
        	$txtLogo = "https://robohash.org/authicperferendis.bmp?size=50x50&set=set1";//imager harcodeada

        	//Verifico si el archivo json existe
        	if (!file_exists("remeras.json")) {
        		return '{ errores : "El archivo no existe" }';
        	}

        	//Necesito leer el archivo y cofigicar a un array de josn con el valor nuevo
        	$objJSONaux = array();
        	$archivo = fopen("remeras.json", "r");
        	$textRemeras = "";

        	while (!feof($archivo)) {
        		$textRemeras .= fgets($archivo);
        	}

        	$objJSONaux = json_decode($textRemeras); //decodifico el json a array

        	$txtId = count($objJSONaux) + 1;

        	//Decodifico el texto del archivo a JSON
        	$miJson = array();

    		$miJson["id"] = $txtId;
    		$miJson["slogan"] = $txtSlogan;
    		$miJson["size"] = $txtSize;
    		$miJson["price"] = $txtPrice;
    		$miJson["color"] = $txtColor;
    		$miJson["manofacturer"]["name"] = $txtName;
    		$miJson["manofacturer"]["logo"] = $txtLogo;
    		$miJson["manofacturer"]["location"]["country"] = $txtCountry;
    		$miJson["manofacturer"]["location"]["city"] = $txtCity;

    		//encode condifica el array a formato json y el decode genera un array obj json
    		$objJson = json_encode($miJson);
    		$objJsonD = json_decode($objJson);

    		//Agrego el objeto Json al array aux
        	array_push($objJSONaux, $objJsonD);

        	$textJsonDecode = json_encode($objJSONaux);

        	//tengo que escribir el archivo json con el nuevo objeto json agregado
        	$archivoEscribir = fopen("remeras.json", "w");
        	fwrite($archivoEscribir, $textJsonDecode);
        	fclose($archivo);
        	fclose($archivoEscribir);	

        	$agregado = '{agregado : "1"}';

        	echo $agregado;

			break; //fin de agregar remeras	

		case 'quitarRemera':
			
			$error = "Error";
			$elemento = isset($_POST['id']) ? $_POST['id']:NULL;
			$arrayJson = array();

			if (!file_exists("remeras.json")) {
				return $error;
			}

			$archivo = fopen("remeras.json", "r");
			$remeras = "";
			while (!feof($archivo)) {
				$remeras .= fgets($archivo);
			}
			fclose($archivo);

			$arrayJson = json_decode($remeras);


			for ($i=0; $i < count($arrayJson); $i++) { 
				if ($arrayJson[$i]->id == $elemento) {
					unset($arrayJson[$i]);
					break;
				}
			}

			$txtJsonEncode = json_encode($arrayJson);
			$archivoEliminar = fopen("remeras.json", "w");
			fwrite($archivoEliminar, $txtJsonEncode);

			fclose($archivoEliminar);

			echo "Se elimino elemento";

			break;
			
		case 'modificarRemeras':
			
			$objetoModificar = isset($_POST['objetoModificar']) ? $_POST['objetoModificar']:NULL;

			//$objetoModificar = json_encode($objetoModificar);
			//$objetoModificar = json_decode($objetoModificar);

			//$arrayJson = array();
			$archivoLectura = fopen("remeras.json", "r");
			$textJson = "";

			//tomo los datos del archivo y los decodeo
			while (!feof($archivoLectura)) {
				$textJson .= fgetc($archivoLectura);
			}
			//cierro el archivo de lectura
			fclose($archivoLectura);
			$arrayJson = json_decode($textJson);

			//var_dump($arrayJson);
			var_dump($objetoModificar);
		/*	for ($i=0; $i < count($arrayJson); $i++) { 
				if ($arrayJson[$i]->id == $objetoModificar->id) {
					$arrayJson[$i] = $objetoModificar;
					//var_dump($arrayJson[$i]);
					break;
				}
			}

			$arrayEncode = json_encode($arrayJson);*/
			
			break;
	}
 ?>