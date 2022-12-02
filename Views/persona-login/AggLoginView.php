<?php
headPath();
?>

<?php
asidePath();
?>

<style>
    .formulario {
        margin: 0 auto;
        margin-top: 30px;
        background-color: rgba(5, 170, 170, 0.8);
    }

    label {
        text-align: left;
        margin-right: 10px;
        font-weight: bold;
    }

    .envio {
        width: 150px;
        height: 40px;
        background-color: rgba(5, 170, 170, 0.8);
        margin-bottom: 10px;
    }

    .cancelar {
        width: 80px;
        height: 32px;
        background-color: rgba(200, 10, 10, 0.8);
        margin-bottom: 10px;
    }

    a {
        text-decoration: none;
        color: white;
    }

    .form-inside{
        padding: 30px;
    }

    .form-control{
        margin-top: 15px;
        margin-bottom: 5px;
    }

    .form-botones{
        margin-top: 30px;
        margin-left: 20px;
    }

    select{
        width: 170px;
        height: 30px;
    }

</style>

<?php
$funcionUrl = funcionesBack("queryRoles");
require_once($funcionUrl);
?>

<div>
    <div class="subBody">
        <div class="topBar">
            <h2 class="title-view"> Agregar un nuevo usuario </h2>
            <p class="nota"> Llene los campos solicitados</p>
        </div>
        <div class="subOptions">
            <form action="../Controllers/AgregarLogin.php" method="post" class="formulario">
                <div class="form-inside">
                    <div class="form-control">
                        <label for="direccion"> Usuario</label>
                        <input type="text" name="usuario" required>
                    </div>
                    <div class="form-control">
                        <label for="direccion"> Contraseña</label>
                        <input type="password" name="contrasenia" required>
                    </div>
                    <div class="form-control">
                        <label for="persona"> Persona </label>
                        <select name="persona">
                            <?php
                            if ($resultado2->num_rows > 0) {
                                while ($row2 = $resultado->fetch_assoc()) {
                                    echo ("<option value=" . $row2['id'] . ">" . $row2['nombres'] . " " . $row2['apellidos'] . "</option>");
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-control">
                        <label for="rol"> Rol </label>
                        <select name="rol">
                            <?php
                            if ($resultado->num_rows > 0) {
                                while ($row = $resultado->fetch_assoc()) {
                                    echo ("<option value=" . $row['id'] . ">" . $row['descripcion'] . "</option>");
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div  class="form-botones">
                        <input class="envio" type="submit" value="Registrar usuario">
                        <button class="cancelar"> <a href="IndLoginView"> Cancelar </a> </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
scriptsPath();
?>