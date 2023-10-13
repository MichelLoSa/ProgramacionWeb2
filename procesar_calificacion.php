<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $calificacion = floatval($_POST["calificacion"]);

    echo "<p>Tu calificación es: <span style='color:";

    if ($calificacion < 6) {
        echo "red";
        $mensaje = "Reprobado";
    } elseif ($calificacion >= 6 && $calificacion < 7) {
        echo "yellow";
        $mensaje = "Mala calificación, esfuerzate más";
    } elseif ($calificacion >= 7 && $calificacion < 8) {
        echo "blue";
        $mensaje = "Buena calificación";
    } elseif ($calificacion >= 8 && $calificacion <= 10) {
        echo "green";
        $mensaje = "¡Excelente, felicidades!";
    } else {
        echo "black";
        $mensaje = "Calificación no válida";
    }

    echo ";'>$calificacion</span></p>";
    echo "<p>$mensaje</p>";
}
?>