<?php
// Incluir el archivo de conexión a la base de datos
require_once("model/db/db_conn.php");

// Definir la función para obtener el valor de boolVoto
function obtenerBoolVoto() {
    global $conn; // Hacer que la conexión a la base de datos esté disponible dentro de la función
    
    // Verificar si $_SESSION['id'] está definido y no está vacío
    if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
        // Preparar la consulta SQL con parámetros para evitar la inyección de SQL
        $sql = "SELECT boolVoto FROM electores WHERE ID = :id";
        $stmt = $conn->prepare($sql);
        // Vincular el parámetro :id con el valor de $_SESSION['id']
        $stmt->bindParam(':id', $_SESSION['id']);
        // Ejecutar la consulta
        $stmt->execute();
        // Obtener el resultado
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // Verificar si se encontró el registro
        if ($result) {
            // Guardar el valor de boolVoto en una variable de sesión
            $_SESSION['boolVoto'] = $result['boolVoto'];
        } else {
            echo "No se encontró ningún registro con el ID proporcionado.";
        }
    } else {
        echo "La variable de sesión 'id' no está definida o está vacía.";
    }

}

?>
