<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM registros WHERE usuario='$usuario' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header('Location: ../home/home.php');
        exit; 
    } else {
        echo '<div class="Alerta">Los datos ingresados no son válidos</div>';
    }
}
?>
