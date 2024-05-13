<?php
session_start();


require_once 'model/db/db_conn.php';

if(isset($_SESSION['id'])) {
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Sidebar</title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link
          href="https://fonts.googleapis.com/css2?family=Mulish&display=swap"
          rel="stylesheet"
      >
      <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js">
    </script>
      <link rel="stylesheet" href="styles/styleMenu.css">
    </head>
    <body>
        <nav>
            <div class="sidebar-top">
              <h3 class="hide">Bienvenido <?php echo $_SESSION['name'];?></h3>
            </div>
            <div class="sidebar-links">
            <ul>
            <li>
                <form action="menu.php" method="get">
                    <input type="hidden" name="value" value="1">
                    <button type="submit" title="Portfolio link">
                        <div class="icon">
                            <img src="assets/portfolio.svg" title="Portfolio Icon">
                        </div>
                        <span class="link hide">Proceso de Votación</span>
                    </button>
                </form>
            </li>
            <li>
                <form action="menu.php" method="get">
                    <input type="hidden" name="value" value="2">
                    <button type="submit" title="Analytics link">
                        <div class="icon">
                            <img src="assets/analytics.svg" title="Analytics Icon">
                        </div>
                        <span class="link hide">Conteo de Votos</span>
                    </button>
                </form>
            </li>
            <li>
                <form action="menu.php" method="get">
                    <input type="hidden" name="value" value="3">
                    <button type="submit" title="Reports Link">
                        <div class="icon">
                            <img src="assets/reports.svg" title="Reports Icon">
                        </div>
                        <span class="link hide">Candidatos</span>
                    </button>
                </form>
            </li>
            <li id="cerrar">
                <a href="logout.php" title="Cerrar Sesion">
                    <div class="icon">
                        <img src="assets/cerrarSesion.svg" title="Reports Icon">
                    </div>
                    <span class="link hide">Cerrar Sesion</span>
                </a>
            </li>
        </ul>
            </div>
          </nav>
          <div style="text-align: center">
          <?php
            if($_GET['value'] == "1") {
              include "views/menuVote.php";
            }
            if($_GET['value'] == "2") {
              include "views/menuAnalytics.php";
            }
            if($_GET['value'] == "3") {
              include "views/menuCandidates.php";
            }
          ?>
          </div>
    </body>
</html>

<?php
}
else {
    header("Location: index.php");
}
?>