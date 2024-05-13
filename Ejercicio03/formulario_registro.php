<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $id_grupo = $_POST['id_grupo'];

    try {
        $stmt = $conn->prepare("INSERT INTO alumnos (nombre, apellido, telefono, email, id_grupo) VALUES (:nombre, :apellido, :telefono, :email, :id_grupo)");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellido', $apellido);
        $stmt->bindParam(':telefono', $telefono);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':id_grupo', $id_grupo);
        $stmt->execute();
        echo "Alumno registrado correctamente en el grupo.";
    } catch(PDOException $e) {
        echo "Error al registrar el alumno en el grupo: " . $e->getMessage();
    }
}
?>

<h2>Registrar Alumno en Grupo</h2>
<form method="post" action="">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br>
    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="apellido" required><br>
    <label for="telefono">Teléfono:</label>
    <input type="text" id="telefono" name="telefono" required><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>
    <label for="id_grupo">Selecciona un grupo:</label>
    <select id="id_grupo" name="id_grupo">
        <?php
        $stmt = $conn->query("SELECT * FROM grupos");
        $grupos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($grupos as $grupo) {
            echo "<option value='" . $grupo['id'] . "'>" . $grupo['nombre_grupo'] . "</option>";
        }
        ?>
    </select><br>
    <input type="submit" value="Registrar">
</form>
