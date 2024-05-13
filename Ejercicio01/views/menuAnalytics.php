<?php
include 'model/getVotes.php';
if(isset($_SESSION['id'])) {
?>

<link rel="stylesheet" type="text/css" href="styles/styleData.css">

    <div class="widget">
      <canvas id="revenues"></canvas>
    </div>
    <script>
      const ctx = document.getElementById("revenues");

Chart.defaults.color = "#FFF";
Chart.defaults.font.family = "Open Sans";

new Chart(ctx, {
  type: "bar",
  data: {
    labels: [
      "Martin Prince",
      "Ralph Wiggum",
      "Lisa Simpsons",
    ],
    datasets: [
      {
        label: "Votos",
        data: [
          <?php echo $_SESSION['cand1']?>, <?php echo $_SESSION['cand2']?>, <?php echo $_SESSION['cand3']?>
        ],
        backgroundColor: "#F4BD50",
        borderRadius: 6,
        borderSkipped: false,
      },
    ],
  },
  // continuation

  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      legend: {
        display: false,
      },
      title: {
        display: true,
        text: "Elecciones Escuela Primaria de Springfield",
        padding: {
          bottom: 16,
        },
        font: {
          size: 16,
          weight: "normal",
        },
      },
      tooltip: {
        backgroundColor: "#27292D",
      },
    },
    scales: {
      x: {
        border: {
          dash: [2, 4],
        },
        grid: {
          color: "#27292D",
        },
        title: {
          text: "2023",
        },
      },
      y: {
        grid: {
          color: "#27292D",
        },
        border: {
          dash: [2, 4],
        },
        beginAtZero: true,
        title: {
          display: true,
          text: "Cantidad de votos",
        },
      },
    },
  },
});

    </script>

<?php
}
else {
    header("Location: index.php");
}
?>