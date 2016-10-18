<html>
	<head>
		<meta charset="utf-8">
		<title>Aplicacion 01</title>
 
		<script type="text/javascript" src="jquery.js"></script>
		
		<script type="text/javascript">

			function traerRemeras(){

				var pagina = "administrarRemeras.php";

				$.ajax({
					url:pagina,
					type:"post",
					dataType:"text",
					data:{txtMiPais: $("#txtPais").val()}, //tomo el valor con ajax desde la vista si se necesita pasar mas datos es clave valor seprados con ,
					async:true
				})
				.done(function(respuesta){
					//alert(respuesta);
					//return;
					var objJson = JSON.parse(respuesta);

					//Se crea la tabla dinamica con el objeto json
					var tabla = '<table>';  //fila de encabezado
					tabla +=    	'<tr>';
					tabla +=           	'<th>id</th>';
					tabla += 			'<th>slogan</th>';
					tabla += 			'<th>size</th>';
					tabla += 			'<th>price</th>';
					tabla += 			'<th>color</th>';
				    tabla += 			'<th>name</th>';
				    tabla += 			'<th>logo</th>';
				    tabla += 			'<th>country</th>';
				    tabla += 			'<th>city</th>';
					tabla += 		'</tr>';

					for (var i = 0; i < objJson.length; i++) {  //fila de datos <tr><td></td></tr>
						
						tabla +=    '<tr>'; 
						tabla += 		'<td>'+ objJson[i].id+'</td>';
						tabla += 		'<td>'+ objJson[i].slogan+'</td>';
						tabla += 		'<td>'+ objJson[i].size+'</td>';
						tabla += 		'<td>'+ objJson[i].price+'</td>';
					    tabla += 		'<td>'+ objJson[i].color+'</td>';
					    tabla += 		'<td>'+ objJson[i].manofacturer.name +'</td>';
					    tabla += 		'<td>'+ '<img src=' + objJson[i].manofacturer.logo + '/>' +'</td>';
					    tabla += 		'<td>'+ objJson[i].manofacturer.location.country +'</td>';
					    tabla += 		'<td>'+ objJson[i].manofacturer.location.city +'</td>';   
						tabla += 	'</tr>';
					}

					tabla +=    '</table>';
					//alert(respuesta.length);
					$("#misRemeras").html(tabla);
					
				})
				.fail(function(respuesta){
					alert("ERROR");
					alert(respuesta);
				})

			}	

		</script>

	</head>

	<body>
		<input type="text" id="txtPais">
		<input type="button" value="Mostrar Remeras" onclick="traerRemeras()">
		<div id="misRemeras">

		</div>

	</body>
</html>