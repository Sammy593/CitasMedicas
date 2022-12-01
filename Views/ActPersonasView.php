<?php
    include_once('../Controllers/ActualizarPersonas.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <h2> Agregar un nuevo usuario </h2>
    <p> Llene los campos solicitados</p>
    <form action="../Controllers/AgregarPersonas.php" method="post">
        <div>
            <label for=""> Nombre </label>
            <input type="text" name="DNI" required>
        </div>
        <div>
            <label for=""> Nombres </label>
            <input type="text" name="nombres" required>
        </div>
        <div>
            <label for=""> Apellidos </label>
            <input type="text" name="apellidos" required>
        </div>
        <div>
            <label for=""> Dirección </label>
            <input type="text" name="direccion" required>
        </div>
        <div>
            <label for=""> Correo electronico </label>
            <input type="text" name="correo" required>
        </div>
        <div>
            <label for=""> Telefono </label>
            <input type="text" name="telefono" required>
        </div>
        <div>
            <label for""> Sexo </label>
            <select name="sexo">
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
            </select>

        </div>
        <div>
            <label for=""> Estado </label>
            <select name="estado">
                <option value="true"> Activo </option>
                <option value="false">Inactivo</option>
            </select>
        </div>
        <div>
            <input type="submit" value="Registrar usuario">
            <a href="../index.html"> Cancelar </a>
        </div>

    </form>
</body>
</html>