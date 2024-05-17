<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form method="post" action="../controlador/controlador_logear_usuarios.php">
                <h2 class="text-center"><strong>Login</strong></h2>
                <div class="form-group"><input class="form-control" type="Username" name="usuario" placeholder="Usuario"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                <div class="form-group">
                    <div class="d-flex justify-content-between">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault"> Recuérdame </label>
                        </div>
                        <div>
                            <a href="#" class="text-info">Olvidé Contraseña</a>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-block btn-info" type="submit">Iniciar</button>
                </div>
                <div class="form-group text-center">
                    <a class="text-info" href="../register/register.php">No tienes cuenta? Regístrate</a>
                </div>
                <a class="already" href="#">Términos de uso y política de privacidad</a>
            </form>
        </div>
    </div>


    
    <?php
include("../controlador/conexion.php");
include("../controlador/controlador_logear_usuarios.php");
    ?>

</body>
</html>
