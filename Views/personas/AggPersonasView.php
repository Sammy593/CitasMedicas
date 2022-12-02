

<?php
    headPath();
?>

<?php
    asidePath();
?>

    <h2> Agregar un nuevo usuario </h2>
    <p> Llene los campos solicitados</p>
    <form action="../Controllers/AgregarPersonas.php" method="post">
        <div>
            <label for="DNI"> DNI </label>
            <input type="text" name="DNI" required>
        </div>
        <div>
            <label for="nombres"> Nombres </label>
            <input type="text" name="nombres" required>
        </div>
        <div>
            <label for="apellidos"> Apellidos </label>
            <input type="text" name="apellidos" required>
        </div>
        <div>
            <label for="direccion"> Dirección </label>
            <input type="text" name="direccion" required>
        </div>
        <div>
            <label for="correo"> Correo electronico </label>
            <input type="text" name="correo" required>
        </div>
        <div>
            <label for="telefono"> Telefono </label>
            <input type="text" name="telefono" required>
        </div>
        <div>
            <label for="Sexo"> Sexo </label>
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

<?php
    scriptsPath();
?>