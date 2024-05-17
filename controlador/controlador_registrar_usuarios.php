<?php
include("conexion.php"); 


$mensaje = "";


if (isset($_POST['register'])) {
    if (empty($_POST['usuario'])  || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['telefono'])) {
        $mensaje = '<div class="Alerta">Uno de los campos está vacío</div>';
    } else {
        $usuario = $_POST['usuario'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $telefono = $_POST['telefono'];

        $sql = "INSERT INTO registros (usuario, email, password, telefono) VALUES ('$usuario', '$email', '$password', '$telefono')";

        if ($conn->query($sql) === TRUE) {
            echo '<div class="Alerta">Usuario Registrado Correctamente</div>';
            $_POST['usuario'] = '';
            $_POST['email'] = '';
            $_POST['password'] = '';
            $_POST['telefono'] = '';
            header('Location: ../login/login.php');
            exit; 
        } else {
            echo '<div class="Alerta">Error al registrar</div>';
        }
    }
}
?>
