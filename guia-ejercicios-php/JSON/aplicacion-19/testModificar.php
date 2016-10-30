<?php 

			//$objetoModificado = isset($_POST['objetoModificar']) ? $_POST['objetoModificar']:NULL;
			
	
			$objetoModificar = '{"id":202,"slogan":"No mirar","size":"X","price":"10","color":"Red","manofacturer":{"nombre":"Memo","logo":"https:\/\/robohash.org\/authicperferendis.bmp?size=50x50&set=set1","location":{"country":"Argentina","city":"Cordoba"}}}';
			var_dump($objetoModificar);
			
			echo "<br><br>";
			
			echo $objetoModificar->id;

			echo "<br><br>";


			$objetoModificar = json_decode($objetoModificar);

			var_dump($objetoModificar);

			echo "<br><br>";
			
			echo $objetoModificar->id;

			echo "<br><br>";

			
			$archivoLectura = fopen("remeras.json", "r");
			$textJson = "";
			

			//tomo los datos del archivo y los decodeo
			while (!feof($archivoLectura)) {
				$textJson .= fgetc($archivoLectura);
			}
			fclose($archivoLectura);
			$arrayJson = json_decode($textJson);

   
			for ($i=0; $i < count($arrayJson); $i++) { 
				if ($arrayJson[$i]->id == $objetoModificar->id) {
					echo "ingreso foreach";
					echo "<br><br>";
					echo "Antes de ser modificado";
					var_dump($arrayJson[$i]);
					echo "<br><br>";
					echo "Despues de modificar objeto";
					echo "<br><br>";
					$arrayJson[$i] = $objetoModificar;
					var_dump($arrayJson[$i]);
					break;
				}
			}

			echo "<br><br>";
			echo "<br><br>";
			//Array con el objeto modificado
			var_dump($arrayJson);
			
			//Encodeo el array json a un string json con el elemento modificado
			
			$miJsonEncodeado = json_encode($arrayJson);
			echo $miJsonEncodeado;
			echo "<br><br>";
			$archivoEscribir = fopen("remeras.json", "w");
			fwrite($archivoEscribir, $miJsonEncodeado);

			
			fclose($archivoEscribir);
			

 ?>