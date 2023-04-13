<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Outsourcing | Inicio</title>
    <link rel="stylesheet" href="../empresa/css/loginEm.css">
    <link rel="stylesheet" href="../empresa/css/all.css">
    <?php include("inicioSesionEmpresa.php") ?>
</head>

<body>
    <div class="container">
        <form action="" method="POST" class="login active">
            <h2 class="title">Inicia Sesión Empresa</h2>
            <div class="form-group">
                <i class="fa-solid fa-envelope"></i>
                <label for="correo_cliente">Correo</label>
                <div class="input-group">
                    <input type="email" id="correo_empresa" name="correo_empresa" placeholder="Correo Electronico">
                </div>
            </div>
            <div class="form-group">
                <i class="fa-solid fa-key"></i>
                <label for="password">Contraseña</label>
                <div class="input-group">
                    <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                        title="Debe contener 8 o más caracteres que sean minimo un número y una letra mayúscula y minúscula"
                        placeholder="Ingresa tu contraseña" name="contrasena_empresa" id="contrasena_empresa">
                </div>
                <span class="help-text">Debe tener minimo 8 caracteres</span>
            </div>
            <div class="alert"><?php echo isset($alert)? $alert : '';?></div>
            <button type="submit" name="submit" class="btn-submit">Entrar</button>
        </form>
    </div>
    <script src="../empresa/js/fontawesome.js"></script>
    <script src="../empresa/js/login.js"></script>
    
</body>

</html>