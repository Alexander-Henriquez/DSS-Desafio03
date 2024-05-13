<?php
// Incluir el archivo de conexión a la base de datos
require_once("model/db/db_conn.php");

// Consulta SQL para obtener los votos de cada candidato
$sql = "SELECT * FROM candidatos";
$result = $conn->query($sql);

// Inicializar variables de sesión para los votos de cada candidato
$_SESSION['cand1'] = 0;
$_SESSION['cand2'] = 0;
$_SESSION['cand3'] = 0;

// Verificar si se encontraron resultados
if ($result->rowCount() > 0) {
    // Iterar sobre los resultados y actualizar las variables de sesión con la cantidad de votos de cada candidato
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $_SESSION['cand' . $row['ID']] = $row['cantidadVotos'];
    }
} else {
    echo "No se encontraron candidatos.";
}

// Cerrar la cursor
$conn = null;
?>
