<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        header("gracias.html");
        exit();
    } else {
        // Mensaje de error
        echo "Por favor, escribe una sugerencia.";
    }
} else {
    // Redirigir al formulario si se accede directamente al archivo PHP
    header("index.html");
    exit();
}
?>
