<?php
// Incluimos la conexión a la base de datos
include 'model/db/db_conn.php';

// Extraemos los datos ingresados por el usuario
$dni = $_POST['dni'];
$date = $_POST['date'];

// Preparar la consulta SQL para verificar las credenciales
$query = "SELECT COUNT(*) AS count FROM electores WHERE DNI = ? AND FechaNacimiento = ?";
$stmt = $conn->prepare($query);

// Vincular parámetros
$stmt->bindParam(1, $dni);
$stmt->bindParam(2, $date);

// Ejecutar la consulta
$stmt->execute();

// Obtener el resultado de la consulta
$result = $stmt->fetch(PDO::FETCH_ASSOC);
$count = $result['count'];

// Cerrar el statement
$stmt->closeCursor();

// Redirigir según el resultado de la consulta
if ($count == 1) {
    // Obtener el ID del usuario para guardarlo en la variable de sesión
    $conexion = conexion();
    $ssql = "SELECT `ID`  FROM `electores` WHERE `DNI` = '$dni'";
    $ssqlName = "SELECT `Nombre` FROM `electores` WHERE `DNI` = '$dni'";
    $ssqlBool = "SELECT `boolVoto` FROM `electores` WHERE `DNI` = '$dni'";
    

    $ssqlCand1 = "SELECT `cantidadVotos` FROM `candidatos` WHERE `ID` = 1";
    $ssqlCand2 = "SELECT `cantidadVotos` FROM `candidatos` WHERE `ID` = 2";
    $ssqlCand3 = "SELECT `cantidadVotos` FROM `candidatos` WHERE `ID` = 3";

    $result = $conexion->query($ssql);
    
    $resultName = $conexion->query($ssqlName);
    $resultBool = $conexion->query($ssqlBool);

    $resultCand1 = $conexion->query($ssqlCand1);
    $resultCand2 = $conexion->query($ssqlCand2);
    $resultCand3 = $conexion->query($ssqlCand3);

    session_start();
    if ($result->num_rows > 0) {
        // Usuario autenticado correctamente, obtener su ID
        $row = $result->fetch_assoc();
        
        // Guardar el ID del usuario en una variable de sesión
        $_SESSION['id'] = $row['ID'];
        $_SESSION['name'] = $resultName->fetch_assoc()['Nombre'];
        $_SESSION['boolVoto'] = $resultBool->fetch_assoc()['boolVoto'];
    
        $_SESSION['cand1'] = $resultCand1->fetch_assoc()['cantidadVotos'];
        $_SESSION['cand2'] = $resultCand2->fetch_assoc()['cantidadVotos'];
        $_SESSION['cand3'] = $resultCand3->fetch_assoc()['cantidadVotos'];
    }

    header("Location: menu.php?value=1");
    exit();
} else {
    echo '
        <script>
            alert("Usuario no encontrado, favor registrarse");
            window.location = "login.php";
        </script>
    ';
}
?>
