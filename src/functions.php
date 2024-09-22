<?php
          
    function saludar($nombre) {
        
        return "Hola mundo, soy el archivo " . $nombre . "!";
    }

    $nombre='function.php';
    echo saludar($nombre);

function mensajePersonalizado($mensaje){
	return "Este es el mensaje personalizado: ".$mensaje;
}

echo "Modificacion desde la rama funcionalidad-1";

?>
