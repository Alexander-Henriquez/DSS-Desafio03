<?php


if (isset($_POST['voto'])|| isset($_POST['name'])) {
    session_start();
    require_once 'model/db/db_conn.php';
    include 'model/getBoolVote.php';
    $voto = $_POST['voto'];
    $name = $_POST['name'];
    
    $query = "UPDATE `candidatos` SET `cantidadVotos` = `cantidadVotos` + 1 WHERE `Nombre` = ?; ";
    $queryBool = "UPDATE `electores` SET `boolVoto` = '1' WHERE `ID` = ?; ";

    $queryCandidato = "UPDATE `electores` SET `candidatoVoto` = ? WHERE `ID` = ?; ";


    $stmt = $conn->prepare($query);
    $stmtBool = $conn->prepare($queryBool);
    $stmtCandidato = $conn->prepare($queryCandidato);

    // Vincular parámetros
    $stmt->bindParam(1, $name);
    $stmtBool->bindParam(1, $_SESSION['id']);
    $stmtCandidato->bindParam(1, $name);
    $stmtCandidato->bindParam(2, $_SESSION['id']);

    $stmt->execute();
    $stmtBool->execute();
    $stmtCandidato->execute();


    obtenerBoolVoto();

    echo "Voto registrado". $_SESSION['boolVoto'];

    header('Location: menu.php?value=1');
}

?>