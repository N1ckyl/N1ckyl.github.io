<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener la sugerencia del formulario
    $sugerencia = htmlspecialchars($_POST['sugerencia']);

    // Validar que la sugerencia no esté vacía
    if (!empty($sugerencia)) {
        // Aquí puedes agregar el código para guardar la sugerencia en una base de datos
        // o enviarla por correo electrónico, etc.
        
        // Ejemplo de guardar en un archivo de texto
        $archivo = 'sugerencias.txt';
        $contenido = "Sugerencia: " . $sugerencia . "\n";
        file_put_contents($archivo, $contenido, FILE_APPEND | LOCK_EX);

        // Redirigir a la página de agradecimiento
        header("Location: gracias.html");
        exit();
    } else {
        // Mensaje de error
        echo "Por favor, escribe una sugerencia.";
    }
} else {
    // Redirigir al formulario si se accede directamente al archivo PHP
    header("Location: index.html");
    exit();
}
?>
