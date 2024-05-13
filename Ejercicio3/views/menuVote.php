<?php

require_once "model/getBoolVote.php";

obtenerBoolVoto();

if(isset($_SESSION['id'])) {
    if($_SESSION['boolVoto'] == 0) {
?>

<link rel="stylesheet" type="text/css" href="styles/styleMenuVote.css">

<br><br><br><br><br><br><br><br><br><br>

<?php echo $_SESSION['boolVoto'];?>
<form action="showCandidates.php" method="post">
    <input type="submit" value="Votar">
</form>

<?php
    } else if($_SESSION['boolVoto'] == 1) {
        include "yaVoto.php";
    }
} else {
    header("Location: menu.php?value=1");
}
?>
