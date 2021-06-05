<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Desarrollo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>
<body>
    <hr>
    <div class="d-flex justify-content-center align-items-center container-data">
        <div class="formulario">
            <form id="formUsuario" name="formUsuario" class="form-horizontal">
                <h1>Formulario <i class="far fa-id-card"></i></h1>
                <p class="text-danger">*Todos los campos son obligatorios*</p>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="txtNombre">Nombre</label>
                        <input class="form-control" id="txtNombre" name="txtNombre" type="text" placeholder="Ingrese el nombre">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="txtApellido">Apellidos</label>
                        <input class="form-control" id="txtApellido" name="txtApellido" type="text" placeholder="Ingrese los apellidos">
                    </div>
                </div>
                <br>
                <button id="guardar" type="submit" class="btn btn-primary">Guardar datos <i class="far fa-address-book"></i></button>
            </form>
        </div>
    </div>
<script src="https://kit.fontawesome.com/c6aa80b951.js" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="index.js"></script>
</body>
<footer class="bg-dark text-light">
    <h4>Desarrollador:</h4>
    <h5>Nombre: &nbsp;&nbsp;<small class="text-danger">Ferley Giovanny Vallecilla Sanchez</small></h5>
    <h5>Email: &nbsp;&nbsp;<small><a href="mailto:ferleyvallesanchez@gmail.com" class="text-danger">ferleyvallesanchez@gmail.com</a></small></h5>
    <h5>Github: &nbsp;&nbsp;<small><a href="https://github.com/giova-crypto" class="text-danger">https://github.com/giova-crypto</a></small></h5>
    <h5>Linkedin:  &nbsp;&nbsp;<small><a href="https://www.linkedin.com/in/fer-sanchez-112b74140" class="text-danger">https://www.linkedin.com/in/fer-sanchez-112b74140</a></small></h5>
    <h5>Celular: &nbsp;&nbsp;<small><a href="tel:3226724168" class="text-danger">+57 3226724168</a></small></h5>
</footer>
</html>