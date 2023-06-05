<?php
session_start();

if(isset($_POST)){
  $_SESSION['mensaje'] = 'ok';
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $email = $_POST['email'];
  $celular = $_POST['celular'];
  $mensaje = $_POST['mensaje'];

  $headers = "From: <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "Content-Type: text/plain; charset=utf-8\r\n";
  // Configurar los detalles del correo electrónico
  $to = "ventas@agilesdevelopments.com";
  $subject = "Mensaje de formulario de contacto";
  $message = "Nombre: " . $nombre . "\n\n";
  $message .= "Apellidos: " . $apellido . "\n\n";
  $message .= "Email: " . $email . "\n\n";
  $message .= "Celular: " . $celular . "\n\n";
  $message .= "Mensaje: " . $mensaje;

  // Enviar el correo electrónico
  if (mail($to, $subject, $message, $headers)) {
      echo "El correo electrónico se envió correctamente.";
  } else {
      echo "Hubo un error al enviar el correo electrónico.";
  }

  header("Location: ../index.php");
}else{
  header("Location: ../index.php");
}