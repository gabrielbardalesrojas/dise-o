<?php
require_once '../acceso/datos.php';

class PacienteNegocios {
    private $datos;

    public function __construct() {
        $this->datos = new PacienteDatos();
    }

    public function agregarPaciente($nombre, $apellido, $edad, $sexo, $hconsulta) {
        $this->datos->agregarPaciente($nombre, $apellido, $edad, $sexo, $hconsulta);
    }
    public function obtenerPacientes() {
        return $this->datos->obtenerPacientes();
    }
    

    
}

// Iniciar o reanudar la sesión
session_start();


// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $nombre = filter_input(INPUT_POST, "nombre", FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
    $apellido = filter_input(INPUT_POST, "apellido", FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
    $edad = filter_input(INPUT_POST, "edad", FILTER_VALIDATE_INT);
    $sexo = filter_input(INPUT_POST, "sexo", FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
    $hconsulta = filter_input(INPUT_POST, "hconsulta", FILTER_VALIDATE_INT);

    // Crear instancia de PacienteNegocios y agregar paciente
    $negocios = new PacienteNegocios();
    $negocios->agregarPaciente($nombre, $apellido, $edad, $sexo, $hconsulta);

    
    // Redirigir al formulario para permitir más ingresos
    header("Location: ../presentacion/index.php");
    exit();
}

// Cerrar la sesión
session_write_close();
?>
