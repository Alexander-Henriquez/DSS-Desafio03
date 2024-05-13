
<link rel="stylesheet" type="text/css" href="styles/styleMenuVote.css">
<?php 
require_once('model/getCandidateVote.php');

obtenerVotoCandidato();

?>

<br><br><br><br><br><br><br><br><br><br>
<h1><?php echo  "Usted voto por: ". $_SESSION['candidatoVoto']; ?></h1>

<h1>¡Tu voto fue registrado, ciudadano!</h1>