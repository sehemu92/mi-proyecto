<?php
          
    function saludar($nombre) {
        
        return "Hola mundo, soy el archivo " . $nombre . "!";
    }

    $nombre='function.php';
    echo saludar($nombre);
?>
