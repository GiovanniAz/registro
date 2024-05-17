<?php
// Incluye el archivo de conexión
include("conexion.php");

// Verifica si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene el usuario y la contraseña del formulario
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Consulta SQL para verificar las credenciales en la tabla registros
    $sql = "SELECT * FROM registros WHERE usuario='$usuario' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Usuario autenticado, redirige a la página deseada
        header('Location: ../home/home.php');
        exit; // Asegúrate de salir del script después de redirigir
    } else {
        // Credenciales inválidas, muestra un mensaje de error
        echo '<div class="Alerta">Los datos ingresados no son válidos</div>';
    }
}
?>
