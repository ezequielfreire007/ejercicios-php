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

    echo "JSON DECODE FORMA DE ARRAY";
    $objDecode = json_decode($texto);

    var_dump($objDecode);

    echo "JSON ENCODE FORMA DE TEXTO JSON";
    $objEncode = json_encode($objDecode);

    var_dump($objEncode);

    
 ?>