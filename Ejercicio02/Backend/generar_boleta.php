<?php
include 'conexion.php';

$id_empleado = $_POST['empleado'];
$mes_pago = $_POST['mes_pago'];
$bonificaciones = $_POST['bonificaciones'];
$deducciones = $_POST['deducciones'];

// Obtener los datos del empleado desde la base de datos
$sql_empleado = "SELECT nombre, codigo_identidad, departamento, posicion, tipo_contratacion, sueldo_base FROM empleados WHERE id_empleado = $id_empleado";
$result_empleado = $conn->query($sql_empleado);
$row_empleado = $result_empleado->fetch_assoc();

// Calcular descuentos de ley
$descuento_afp = $row_empleado['sueldo_base'] * 0.0725; // Descuento AFP (7.25%)
$descuento_isss = $row_empleado['sueldo_base'] * 0.03; // Descuento ISSS (3%)

// Calcular monto a devengar
$monto_devengado = $row_empleado['sueldo_base'] + $bonificaciones - $deducciones - $descuento_afp - $descuento_isss;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Boleta de Pago</title>
    <link rel="stylesheet" href="../css/boleta_styles.css">
</head>
<body>
<div class="container">
        <h2>Boleta de Pago</h2>
        <div class="boleta-info">
            <h3>Datos del Empleado:</h3>
            <p><strong>Empleado:</strong> <?php echo $row_empleado['nombre']; ?></p>
            <p><strong>Código de Identidad:</strong> <?php echo $row_empleado['codigo_identidad']; ?></p>
            <p><strong>Departamento:</strong> <?php echo $row_empleado['departamento']; ?></p>
            <p><strong>Posición:</strong> <?php echo $row_empleado['posicion']; ?></p>
            <p><strong>Tipo de Contratación:</strong> <?php echo $row_empleado['tipo_contratacion']; ?></p>
            <p><strong>Sueldo Base:</strong> $<?php echo number_format($row_empleado['sueldo_base'], 2); ?></p>
        </div>
        <div class="boleta-desglose">
            <h3>Desglose del Salario:</h3>
            <p><strong>Bonificaciones del Mes:</strong> $<?php echo number_format($bonificaciones, 2); ?></p>
            <p><strong>Deducciones:</strong> $<?php echo number_format($deducciones, 2); ?></p>
            <p><strong>Descuento AFP:</strong> $<?php echo number_format($descuento_afp, 2); ?></p>
            <p><strong>Descuento ISSS:</strong> $<?php echo number_format($descuento_isss, 2); ?></p>
            <p><strong>Monto a Devengar:</strong> $<?php echo number_format($monto_devengado, 2); ?></p>
        </div>
    </div>

    <!-- Botón para generar otra boleta -->
    <div class="generar-otra-boleta">
        <form action="../ingreso_datos.php" method="GET">
            <input type="submit" value="Generar Otra Boleta">
        </form>
    </div>
</body>
</html>
