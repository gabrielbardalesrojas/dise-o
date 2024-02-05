<?php
class PacienteDatos {
    private $conexion;

    public function __construct() {
        // Ajusta los detalles según tu configuración
        $this->conexion = new mysqli('localhost', 'root', '', 'dentista');

        // Verificación de la conexión
        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }
    }

    public function agregarPaciente($nombre, $apellido, $edad,$sexo,$hconsulta) {
        $query = "INSERT INTO pacientes (nombre, apellido, edad,sexo,hconsulta) VALUES ('$nombre', '$apellido', $edad,'$sexo',$hconsulta)";
        $this->conexion->query($query);
    }
    public function obtenerPacientes() {
        $query = "SELECT nombre, apellido, edad, sexo, hconsulta FROM pacientes";
        $result = $this->conexion->query($query);

        $pacientes = [];

        while ($row = $result->fetch_assoc()) {
            $pacientes[] = $row;
        }

        return $pacientes;
    }

   
}
?>
