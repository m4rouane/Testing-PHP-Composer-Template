<!-- Marouane Saidi Rahim  -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 8. Bucle for: Tabla de multiplicar</title>
</head>
<body>
    <h1>Ejercicio 8. Bucle for: Tabla de multiplicar</h1>
    <p>Modifique este HTML</p>
    <?php
        // Bucle for para las tablas de multiplicar
        for ($i = 0; $i <= 10; $i++) {
            echo "<p>Tabla de multiplicar del $i</p>";
            echo "---------------------------------<br/>";
            for ($j = 0; $j <= 10; $j++) {
                echo "$i x $j = " . ($i * $j) . "<br/>";
            }
            echo "<br/>";
        }
    ?>
</body>
</html>

