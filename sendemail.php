
<?php
// El mensaje
$mensaje = "prueba";

// Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
//$mensaje = wordwrap($mensaje, 70, "\r\n");

// Enviarlo
mail('zarakikun1991@gmail.com', 'Mi título', $mensaje);
?>