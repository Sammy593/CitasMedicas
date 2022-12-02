<?php
$funcionUrl = funcionesBack("ActualizarPersonas");
require_once($funcionUrl);
?>

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
</style>


<div>
    <div class="subBody">
        <div class="topBar">
            <h2 class="title-view">Agregar un nuevo usuario</h2>
            <div class="auth">
                <div id="user-logged"></div>
                <img src="<?php echo (media()) ?>/img/imgLogin/logotipoLogin.png" alt="img-user" id="user-img" class="card">
            </div>
            <div class="currentPeriod"></div>
        </div>
        <div class="subOptions">
            <form class="subTables" action="" method="post" class="formulario">
                <div>
                    <label for="DNI"> DNI </label>
                    <input type="text" name="DNI" value="<?php echo ($DNI) ?>" required>
                </div>
                <div>
                    <label for="nombres"> Nombres </label>
                    <input type="text" name="nombres" value="<?php echo ($nombres) ?>" required>
                </div>
                <div>
                    <label for="apellidos"> Apellidos </label>
                    <input type="text" name="apellidos" value="<?php echo ($apellidos) ?>" required>
                </div>
                <div>
                    <label for="direccion"> Dirección </label>
                    <input type="text" name="direccion" value="<?php echo ($direccion) ?>" required>
                </div>
                <div>
                    <label for="correo"> Correo electronico </label>
                    <input type="text" name="correo" value="<?php echo ($correo) ?>" required>
                </div>
                <div>
                    <label for="telefono"> Telefono </label>
                    <input type="text" name="telefono" value="<?php echo ($telefono) ?>" required>
                </div>
                <div>
                    <label for="sexo"> Sexo </label>
                    <select name="sexo">
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                    </select>

                </div>
                <div>
                    <label for="estado"> Estado </label>
                    <select name="estado">
                        <option value="true"> Activo </option>
                        <option value="false">Inactivo</option>
                    </select>
                </div>
                <div>
                    <input class="envio" type="submit" value="Registrar usuario">
                    <button class="cancelar"><a href="IndPersonasView"> Cancelar </a></button>
                </div>

            </form>
        </div>
    </div>
</div>
<?php
scriptsPath();
?>