<?php
    $funcionUrl = funcionesBack("LeerPersonas");
    require_once($funcionUrl);
?>

<?php
    headPath();
?>


<?php
    asidePath();
?>

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
    <a href="../../dashboard/"> Volver </a>
    </div>

<?php
    scriptsPath();
?>