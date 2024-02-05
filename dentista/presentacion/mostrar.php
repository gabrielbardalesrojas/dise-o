




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pacientes</title>
    <style>
        /* Estilos de la tabla */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #4caf50;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Lista de Pacientes</h1>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Sexo</th>
            <th>Última Consulta</th>
        </tr>
        <?php
        require_once '../negocios/negocios.php';

        $negocios = new PacienteNegocios();
        $pacientes = $negocios->obtenerPacientes();

        foreach ($pacientes as $paciente) {
            echo "<tr>";
            echo "<td>{$paciente['nombre']}</td>";
            echo "<td>{$paciente['apellido']}</td>";
            echo "<td>{$paciente['edad']}</td>";
            echo "<td>{$paciente['sexo']}</td>";
            echo "<td>{$paciente['hconsulta']}</td>";
            echo "</tr>";
        }

       
        ?>
    </table>
    <script>
        function redirigir() {
            window.location.href = 'index.php'; }
    </script>
    <button onclick="redirigir()">SALIR</button>
</body>
</html>
