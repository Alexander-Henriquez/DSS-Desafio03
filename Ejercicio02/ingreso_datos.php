<?php

include 'Backend/conexion.php';

$sql_empleados = "SELECT id_empleado, nombre, sueldo_base FROM empleados";
$result_empleados = $conn->query($sql_empleados);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ingreso de Datos</title>
    <link rel="stylesheet" href="css/styles.css">
    <script>
    function actualizarSueldoBase() {
        var empleadoSelect = document.getElementById("empleado");
        var sueldoBaseInput = document.getElementById("sueldo_base");
        var selectedOption = empleadoSelect.options[empleadoSelect.selectedIndex];
        sueldoBaseInput.value = selectedOption.dataset.sueldo;
        
        sueldoBaseInput.disabled = true;
    }
    function limpiarSueldoBase() {
        var sueldoBaseInput = document.getElementById("sueldo_base");
        sueldoBaseInput.value = "";
   
        sueldoBaseInput.disabled = false;
    }
    function validarFormulario() {
        var empleado = document.getElementById("empleado").value;
        var mesPago = document.getElementById("mes_pago").value;
        var bonificaciones = document.getElementById("bonificaciones").value;
        var deducciones = document.getElementById("deducciones").value;

        if (empleado === "" || mesPago === "" ) {
            alert("Por favor, complete todos los campos.");
            return false; 
        }
        return true; 
    }
    </script>
</head>
<body>
    <h2>Ingreso de Datos para Boleta de Pago</h2>
    <form action="Backend/generar_boleta.php" method="POST" onsubmit="return validarFormulario()">
        <label for="empleado">Empleado:</label>
        <select name="empleado" id="empleado" onchange="actualizarSueldoBase()">
            <option value="">Seleccione un empleado</option>
            <?php
            while ($row = $result_empleados->fetch_assoc()) {
                echo "<option value='" . $row['id_empleado'] . "' data-sueldo='" . $row['sueldo_base'] . "'>" . $row['nombre'] . "</option>";
            }
            ?>
        </select>
        <br><br>
        <label for="sueldo_base">Sueldo Base:</label>
        <input type="text" name="sueldo_base" id="sueldo_base" readonly>
        <br><br>
        <label for="mes_pago">Mes de Pago:</label>
        <select name="mes_pago" id="mes_pago">
            <option value="">Seleccione un mes</option>
            <option value="Enero">Enero</option>
            <option value="Febrero">Febrero</option>
            <option value="Marzo">Marzo</option>
            <option value="Abril">Abril</option>
            <option value="Mayo">Mayo</option>
            <option value="Junio">Junio</option>
            <option value="Julio">Julio</option>
            <option value="Agosto">Agosto</option>
            <option value="Septiembre">Septiembre</option>
            <option value="Octubre">Octubre</option>
            <option value="Noviembre">Noviembre</option>
            <option value="Diciembre">Diciembre</option>
        </select>
        <br><br>
        <label for="bonificaciones">Bonificaciones del Mes:</label>
        <input type="number" name="bonificaciones" id="bonificaciones" value="0" step="0.01">
        <br><br>
        <label for="deducciones">Deducciones:</label>
        <input type="number" name="deducciones" id="deducciones" value="0" step="0.01">
        <br><br>
        <input type="submit" value="Generar Boleta">
    </form>
</body>
</html>
