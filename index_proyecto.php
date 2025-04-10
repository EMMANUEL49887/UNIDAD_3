<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Fracciones</title>
</head>
<body>
    <h2>Calculadora de Fracciones</h2>
    <form action="procesar.php" method="POST">
        <h3>Fracción 1:</h3>
        Parte Entera: <input type="number" name="entero1" required><br>
        Numerador: <input type="number" name="num1" required><br>
        Denominador: <input type="number" name="den1" required><br>

        <h3>Fracción 2:</h3>
        Parte Entera: <input type="number" name="entero2" required><br>
        Numerador: <input type="number" name="num2" required><br>
        Denominador: <input type="number" name="den2" required><br>

        <h3>Operación:</h3>
        <select name="operacion">
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select><br><br>

        <input type="submit" value="Calcular">
    </form>
</body>
</html>
