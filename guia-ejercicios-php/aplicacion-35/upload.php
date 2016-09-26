<?php

    $nombreFecha = date("Y")."_".date("m")."_".date("d")."_".date("P")."_".date("U");
    $destino = "misArchivos/".$_FILES["archivo"]["tmp_name"];

    //MUEVO EL ARCHIVO DEL TEMPORAL AL DESTINO FINAL
    if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $destino)) {
        echo "<br/>El archivo ". basename( $_FILES["archivo"]["name"]). " ha sido subido exitosamente.";
    } else {
        echo "<br/>Lamentablemente ocurri&oacute; un error y no se pudo subir el archivo.";
    }

 ?>
