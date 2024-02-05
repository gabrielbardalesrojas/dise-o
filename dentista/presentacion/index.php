

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Pacientes del DENTISTA</title>
    <style>
        /* Reset de estilos y configuración básica */
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.container {
    max-width: 800px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1, h2 {
    color: #333;
}

/* Estilos del formulario */
form {
    display: grid;
    gap: 10px;
}

label {
    font-weight: bold;
}

input[type="text"],
input[type="number"] {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    background-color: #4caf50;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #45a049;
}

/* Estilos de la lista de pacientes */
ul {
    list-style-type: none;
    padding: 0;
}

ul li {
    margin-bottom: 8px;
    padding: 8px;
    background-color: #f9f9f9;
    border-radius: 4px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}
#confirmacionMensaje {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #4CAF50;
            color: #fff;
            padding: 15px;
            border-radius: 5px;
            z-index: 1000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Registro de Pacientes</h1>

        <form method="post" action="../negocios/negocios.php">
        <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required>
            <br>

            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" required>
            <br>

            <label for="edad">Edad:</label>
            <input type="number" name="edad" required>
            <br>

            <label for="sexo">Sexo F/M:</label>
            <input type="text" name="sexo" required>
            <br>

            <label for="hconsulta">Hora de consulta HH/MM/SS:</label>
            <input type="number" name="hconsulta" required>
            <br>

            <button type="submit" onclick="mostrarMensaje()">GUARDAR PACIENTE</button>
        </form>
    </div>
    <!-- Mensaje flotante de confirmación -->
    <div id="confirmacionMensaje">
            Paciente registrado con éxito.
        </div>
    </div>

    <!-- Tu código JavaScript va aquí -->
    <script>
        function mostrarMensaje() {
            // Mostrar el mensaje flotante
            var mensaje = document.getElementById("confirmacionMensaje");
            mensaje.style.display = "block";

            // Ocultar el mensaje después de 3 segundos (puedes ajustar el tiempo según tus necesidades)
            setTimeout(function() {
                mensaje.style.display = "none";
            }, 120000);
        }

        function redirigirAMostrar() {
            window.location.href = 'mostrar.php'; }
    </script>


<button onclick="redirigirAMostrar()">MOSTRAR PACIENTES</button>
</body>
</html>

