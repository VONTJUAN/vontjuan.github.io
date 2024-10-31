<?php
//Verifica si el formulario ha sido enviado usando el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Limpiar las entradas del formulario para evitar inyecciones XSS
    $nombre = htmlspecialchars($_POST["nombre"]);   //Protege el nombre ingresado
    $correo = htmlspecialchars($_POST["correo"]);   //Protege el correo ingresado
    $mensaje = htmlspecialchars($_POST["mensaje"]); //Protege el mensaje ingresado
    $envioEmail = htmlspecialchars($_POST["envioEmail"]);   //Protege la preferencia de respuesta
    $tipoUsuario = htmlspecialchars($_POST["tipoUsuario"]); //Protege el tipo de usuario seleccionado

    //Inicializar la variable $body para almacenar el mensaje
    $body = ""; 

    //Simulación del cuerpo del correo
    $body .= "Nombre: $nombre\n";   //Agregar el nombre al cuerpo del mensaje
    $body .= "Correo: $correo\n";   //Agregar el correo al cuerpo del mensaje
    $body .= "Mensaje: $mensaje\n"; //Agregar el mensaje al cuerpo del mensaje
    $body .= "Respuesta por email: $envioEmail\n"; //Agregar la preferencia de respuesta al cuerpo
    $body .= "Tipo de usuario: $tipoUsuario\n";    //Agregar el tipo de usuario al cuerpo

    //Mostrar una alerta con el mensaje de confirmación
    echo "<script>alert('El mensaje ha sido enviado correctamente:\\n\\n$body');</script>";
} else {
    //Mensaje si el método de envío no es válido
    echo "Método de envío no válido.";
}
?>