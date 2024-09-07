<?php
$destino= "theothereyes1@gmail.com";
$nombre= $_POST["nombre"];
$telefono= $_POST["telefono"];
$correo= $_POST["correo"];
$mensaje= $_POST["mensaje"];
$contenido="Nombre: ".$nombre."\nCorreo: ".$correo."\nMensaje: ".$mensaje;

mail($destino,"Contacto", $contenido);
header("Location: contact.html");

?>