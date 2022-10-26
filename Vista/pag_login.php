<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Login AsistenciaUMG</title>
</head>
<body>

    <div class="container my-4 animate__animated animate__flip d-none d-sm-block">
        <img src="assets/img/logo_UMG.png" alt="" height="35">
    </div>

    <div class="container h-100 login animate__animated animate__bounceIn">
        <div class="row h-100 justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-6 col-10 text-center">
                <img src="assets/img/umg_logo.png" alt="" height="100">
                <h1 class="text-white my-4">Iniciar sesión</h1>

                <form action="" name="form-loginL" id="form-loginL">
                    <input type="text" placeholder="usuario" name="usuario">
                    <input type="password" placeholder="contraseña" name="password">

                    <div class="d-grid gap-2">
                        <button type="button" onclick="ingresar_usuario()" class="btn btn-danger mt-5">Iniciar Sesión</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="assets/js/Login.js"></script>
</body>
</html>