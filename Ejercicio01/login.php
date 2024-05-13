<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proceso Electoral</title>
    <link rel="icon" href="assets/icono.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/styleLogin.css">
</head>

<body>

    <form class="my-form" id="dniForm" action="loginTry.php" method="POST">
        <div class="login-welcome-row">
            <a href="#" title="Logo">
                <img src="assets/icono.ico" alt="Logo" class="logo">
            </a>
            <h1>Ingresa con tu DNI&#x1F44F;</h1>
            <p>¡Bienvenido al proceso electoral!</p>
        </div>
        <div class="input__wrapper">
            <input type="number" id="dni" name="dni" class="input__field" placeholder="Tu DNI" 
            pattern="[0-9]{10}" required>
            <label for="email" class="input__label">DNI:</label>
            <svg class="input__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                <path d="M16 12v1.5a2.5 2.5 0 0 0 5 0v-1.5a9 9 0 1 0 -5.5 8.28"></path>
            </svg>
        </div>
        <div class="input__wrapper">
            <input id="date" type="date" name="date" class="input__field" placeholder="Fecha de Nacimiento"
                title="Debes ser mayor de 18 años" min="1900-01-01" max="2022-12-31"
                pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" required>
            <label for="date" class="input__label">
                Fecha de Nacimiento
            </label>
        </div>
        <button type="submit" class="my-form__button">
            Iniciar Sesión
        </button>
    </form>

    <script src="script.js"></script>
    <script>
        document.getElementById("dniForm").addEventListener("submit", function(event) {
        var dniInput = document.getElementById("dni");
        var dniValue = dniInput.value;
        if (dniValue.length !== 10) {
            alert("El DNI debe tener exactamente 10 dígitos.");
            event.preventDefault();
        }
        });
    </script>
</body>

</html>