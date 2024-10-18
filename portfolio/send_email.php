<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'lv39179@gmail.com'; // Tu correo electrónico
    $subject = 'Nuevo mensaje de contacto';
    $body = "Nombre: $name\nCorreo: $email\nMensaje: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo 'Mensaje enviado exitosamente!';
    } else {
        echo 'Error al enviar el mensaje.';
    }
}
?>
