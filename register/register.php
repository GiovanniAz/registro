<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<?php
include("../controlador/conexion.php");
include("../controlador/controlador_registrar_usuarios.php");
?>

<body>
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form method="post" action="register.php" onsubmit="return validarFormulario()">
                <h2 class="text-center"><strong>Registro</strong></h2>            
                <div class="form-group">
                    <input class="form-control" type="text" name="usuario" placeholder="Usuario">
                </div>
                <div class="form-group">
                    <input class="form-control" type="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <input class="form-control" type="tel" name="telefono" placeholder="Telefono">
                </div>
                <div class="form-group">
    <button class="btn btn-success btn-block btn-info" type="submit" name="register">Registrarse</button>
</div>
<?php echo $mensaje; ?>

<div class="form-group text-center">
    <a class="text-info" href="../login/login.php">¿Ya tienes cuenta? Inicia sesión</a>
</div>
                <a class="already" href="#">Términos de uso y política de privacidad</a>
            </form>
        </div>
    </div>


</body>
</html>
