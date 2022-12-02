<?php
headPath();
?>

<?php
asidePath();
?>

<style>

.formulario{
    margin: 0 auto;
    margin-top: 30px;
    background-color: rgba(5,170,170,0.8);
}

label{
    text-align: left;
    margin-right: 10px;
    font-weight: bold;
}

.envio{
    width:150px;
    height:40px;
    background-color:rgba(5,170,170,0.8);
    margin-bottom: 10px;
}

.cancelar{
    width:80px;
    height:32px;
    background-color:rgba(200,10,10,0.8);
    margin-bottom: 10px;
}

a{
    text-decoration: none;
    color: white;
}
</style>


<div>
    <div class="subBody">
        <div class="topBar">
            <h2 class="title-view"> Agregar un nuevo usuario </h2>
            <p class="nota"> Llene los campos solicitados</p>
        </div>
        <div class="subOptions">
            <form action="../Controllers/AgregarPersonas.php" method="post" class="formulario">
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
                    <input class="envio" type="submit" value="Registrar usuario">
                    <button class="cancelar"> <a href="IndPersonasView"> Cancelar </a> </button>
                </div>

            </form>
        </div>
    </div>
</div>
<?php
scriptsPath();
?>