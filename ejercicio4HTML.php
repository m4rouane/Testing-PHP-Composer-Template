<!-- Marouane Saidi Rahim  -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4. Calcular nota</title>
</head>
<body>
    <h1>Cálculo de notas</h1>
    <p> Pide una nota (número). Muestra la calificación según la nota:</p>
    <ul>
        <li>0-3: Muy deficiente.</li>
        <li>3-5: Insuficiente.</li>
        <li>5-6: Suficiente.</li>
        <li>6-7: Bien.</li>
        <li>7-9: Notable.</li>
        <li>9-10: Sobresaliente.</li>
    </ul>
    <p>Repite el ejercicio anterior utilizando la estructura <code>switch</code></p>

    <?php
    // Solicita una nota por teclado
    $nota = floatval($_POST['nota']); // Supongo que la nota se enviará por un formulario POST

    $calificacion = "";

    // Estructura de control switch
    switch (true) {
        case $nota >= 0 && $nota < 3:
            $calificacion = "Muy deficiente";
            break;
        case $nota >= 3 && $nota < 5:
            $calificacion = "Insuficiente";
            break;
        case $nota >= 5 && $nota < 6:
            $calificacion = "Suficiente";
            break;
        case $nota >= 6 && $nota < 7:
            $calificacion = "Bien";
            break;
        case $nota >= 7 && $nota < 9:
            $calificacion = "Notable";
            break;
        case $nota >= 9 && $nota <= 10:
            $calificacion = "Sobresaliente";
            break;
        default:
            $calificacion = "Incorrecta";
            break;
    }

    // Imprimir el resultado
    echo "<p>Una nota de $nota es $calificacion</p>";
    ?>

</body>
</html>

