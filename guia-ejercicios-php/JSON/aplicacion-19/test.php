<?php 

    //Decodifico el texto del archivo a JSON
    /*    	$JSONAgregar = array();
        	$JSONAgregar["id"] = 1;
        	$JSONAgregar["slogan"] = "hola";
        	$JSONAgregar["size"] = "S";
        	$JSONAgregar["price"] = "5";			 
        	$JSONAgregar["color"] = "rojo";
        	$JSONAgregar["name"] = "pepe";
        	$JSONAgregar["logo"] = "logo";
        	$JSONAgregar["country"] = "Argentina";
        	$JSONAgregar["city"] = "bs as";

        	$objJSONAgregar = json_encode($JSONAgregar);    	

        	var_dump($objJSONAgregar);

        	$objJsonDecode = json_decode($objJSONAgregar);

        	var_dump($objJsonDecode);*/

    $archivo = fopen("remeras.json", "r");
    $texto = "";

    while (!feof($archivo)) {
        $texto.=fgets($archivo);
    }

    fclose($archivo);

   /* echo "JSON DECODE FORMA DE ARRAY";
    echo "JSON DECODE FORMA DE ARRAY";

    $objDecode = json_decode($texto);

    var_dump($objDecode);

    echo "JSON ENCODE FORMA DE TEXTO JSON";
    $objEncode = json_encode($objDecode);

    var_dump($objEncode); */

    echo "<br><br><br>";

    //Eliminiar un registro
    $elementos = json_decode($texto);
    $id = isset($_POST['id']) ? $_POST['id']:NULL;
    

    $variable = "No ingreso";
    /*foreach ($elementos as $valor) {
        if ($valor->id == $id) {
            echo unset($valor);//elimino elemento del array
            $variable = "ingreso";
            break;
        }
    } */

    for ($i=0; $i < count($elementos) ; $i++) { 
        if ($elementos[$i]->id == $id) {
            echo $id;
            $variable = "Ingreso";
            unset($elementos[$i]);
            break;
        }
    }

    $elementos = json_encode($elementos);
    
    $archivoEscribir = fopen("remeras.json", "w");
    fwrite($archivoEscribir, $elementos);

    fclose($archivoEscribir);

    echo $variable;

    
 ?>