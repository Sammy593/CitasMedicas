<?php
    include_once('../Controllers/LeerPersonas.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        label{
            font-weight: bold;
            font-size: 15px;
            margin: 2px 2px;
        }
    </style>
</head>
<body>
    <h1> Datos del usuario </h1>
    <div>
    <label for=""> DNI </label>
    <p> <?php echo $DNI ?> </p>
    </div>
    <div>
    <label for=""> Nombre </label>
    <p> <?php echo $nombres . " " . $apellidos ?> </p>
    </div>
    <div>
    <label for=""> Direccion </label>
    <p> <?php echo $direccion; ?></p>
    </div>
    <div>
    <label for=""> Correo </label>
    <p> <?php echo $correo; ?></p>
    </div>
    <div>
    <label for=""> Telefono </label>
    <p> <?php echo $telefono; ?></p>
    </div>
    <div>
    <label for=""> Sexo </label>
    <p> <?php echo $sexo; ?> </p>
    </div>
    <div>
    <a href="../index.html"> Volver </a>
    </div>
</body>
</html>