<?php
include 'conexion_03.php';

try {
    $stmt = $conn->query("SELECT grupos.id, grupos.nombre_grupo, grupos.tipo_horario, horarios_teoricos.dia_semana, horarios_teoricos.hora_inicio, horarios_teoricos.hora_fin
                          FROM grupos
                          INNER JOIN horarios_teoricos ON grupos.id_horario = horarios_teoricos.id
                          UNION
                          SELECT grupos.id, grupos.nombre_grupo, grupos.tipo_horario, horarios_practicos.dia_semana, horarios_practicos.hora_inicio, horarios_practicos.hora_fin
                          FROM grupos
                          INNER JOIN horarios_practicos ON grupos.id_horario = horarios_practicos.id");
    $grupos = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    echo "Error al obtener los grupos: " . $e->getMessage();
}
?>

<h2>Grupos</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre Grupo</th>
        <th>Tipo Horario</th>
        <th>Día</th>
        <th>Hora Inicio</th>
        <th>Hora Fin</th>
        <th>Alumnos</th>
    </tr>
    <?php foreach ($grupos as $grupo): ?>
    <tr>
        <td><?php echo $grupo['id']; ?></td>
        <td><?php echo $grupo['nombre_grupo']; ?></td>
        <td><?php echo $grupo['tipo_horario']; ?></td>
        <td><?php echo $grupo['dia_semana']; ?></td>
        <td><?php echo $grupo['hora_inicio']; ?></td>
        <td><?php echo $grupo['hora_fin']; ?></td>
        <td>
            <?php
            $stmt = $conn->prepare("SELECT nombre, apellido FROM alumnos WHERE id_grupo = :id_grupo");
            $stmt->bindParam(':id_grupo', $grupo['id']);
            $stmt->execute();
            $alumnos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($alumnos as $alumno) {
                echo $alumno['nombre'] . ' ' . $alumno['apellido'] . '<br>';
            }
            ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
