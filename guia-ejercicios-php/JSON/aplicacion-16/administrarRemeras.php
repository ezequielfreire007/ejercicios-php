<?php 

	//Dependiendo de lo que se envia desde vista hago algo
	$queHago = isset($_POST['queHago']) ? $_POST['queHago']:NULL;

	switch ($queHago) {
		case 'traerRemeras':
			echo "estoy en traer remeras";//foo
			# code...
			break;
		
		case 'traerRemerasFiltradas':
			echo "estoy en traer remeras filtradas";//foo
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

					break; //fin swhitch select

			}

			fclose($archivo);
			echo json_encode($arrayFiltrado);

			break; //fin switch queHago

		
	}


 ?>
