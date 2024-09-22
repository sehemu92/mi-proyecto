<?php
          
    function saludar($nombre) {
        
        return "Hola mundo, soy el archivo " . $nombre . "!";
    }

    $nombre='function.php';
    echo saludar($nombre);

function mensajePersonalizado($mensaje){
	return "Este es el mensaje personalizado: ".$mensaje;
}

echo "Modificación desde la rama master";
echo "Modificacion desde la rama funcionalidad-1";
echo "Modificaciones desde la rama  funcionalidad-2";

?>
