<?php 

	$txtSlogan = "mirando hacia el futuro"; //isset($_POST['txtSlogan']) ? $_POST['txtSlogan']:NULL;
	$txtSize = "XL";//isset($_POST['txtSize']) ? $_POST['txtSize']:NULL;
	$txtPrice = "$162.67";//isset($_POST['txtPrice']) ? $_POST['txtPrice']:NULL;
	$txtColor = "Green";//isset($_POST['txtColor']) ? $_POST['txtColor']:NULL;
	$txtName = "Pepe";//isset($_POST['txtName']) ? $_POST['txtName']:NULL;
	$txtCountry = "Argentina";//isset($_POST['txtCountry']) ? $_POST['txtCountry']:NULL;
	$txtCity = "Buenos Aires";//isset($_POST['txtCity']) ? $_POST['txtCity']:NULL; 
    $txtId = 1000;
    $txtLogo = "https://robohash.org/authicperferendis.bmp?size=50x50&set=set1";//imager harcodeada
          	
    //Agrego la informacion al array para que tome la forma de los domas objetos de archivo json
    $miJson = array();

    $miJson["id"] = $txtId;
    $miJson["slogan"] = $txtSlogan;
    $miJson["size"] = $txtSize;
    $miJson["price"] = $txtPrice;
    $miJson["color"] = $txtColor;
    $miJson["manofacturer"]["nombre"] = $txtName;
    $miJson["manofacturer"]["logo"] = $txtLogo;
    $miJson["manofacturer"] ["location"]["country"] = $txtCountry;
    $miJson["manofacturer"] ["location"]["city"] = $txtCity;

    echo "mi Json";
    echo "<br>";
    var_dump($miJson);

    echo "<br><br><br>";
    echo "miJson ENCODE";
    echo "<br>";

    $objEncode = json_encode($miJson);
    var_dump($objEncode);

    echo "<br><br>";	
    echo "Luego de encodear a json decodeamos para ver como queda como array";
    var_dump(json_decode($objEncode));
    
    echo "<br><br><br>";
    echo "Datos de variables";
    echo "<br>";
    echo $txtSlogan;
    echo "<br>";
    echo $txtSize;
    echo "<br>";
    echo $txtPrice;
    echo "<br>";
    echo $txtColor;
    echo "<br>";
    echo $txtName;
    echo "<br>";
    echo $txtCountry;
    echo "<br>";
    echo $txtLogo;
    echo "<br>";

	echo "<br><br><br>";    
    echo "Varibale JSON - Fomrato de remeras.json";
    echo "<br>";
    echo "DECODE";
    echo "<br>";
    $text = '{"id":2,"slogan":"deliver dot-com platforms","size":"2XL","price":"$162.67","color":"Orange","manofacturer":{"name":"InnoZ","logo":"https://robohash.org/distinctiooccaecatiipsum.bmp?size=50x50&set=set1","location":{"country":"China","city":"Meilin"}}}';

    $objJSON = json_decode($text);

    var_dump($objJSON);
	
	echo "<br>";    
    echo "Varibale JSON - Fomrato de remeras.json";
    echo "<br>";
    echo "ENCODE";
    echo "<br>";

    var_dump(json_encode($objJSON));
	
 ?>