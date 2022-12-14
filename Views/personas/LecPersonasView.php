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


<style>
    .card{
        width: 30%;
        margin: 0 auto;
        margin-top: 20px;
        background-color: rgba(1,1,1,0.3);
        text-align: justify;
    }

    .card:hover{
        background-color: rgba(1,1,1,0.28999);
    }
    
    .card-item{
        font-size: 30px;
        margin-top: 10px;
        margin-bottom: 10px;
        padding: 4px;
    }

    label{
        font-weight: bold;
        margin-bottom: 3px;
    }

    .volver{
        position: relative;
        margin-top: 230px;
        margin-left: 30px;
    }

    .boton-volver{
        width: 150px;
        height: 70px;
        background-color: rgba(200,10,10,0.6);
    }

    .boton-volver:hover{
        background-color: rgba(200,10,10,0.8);
    }

</style>

<div class="subBody">
<div class="topBar">
        <h2 class="title-view">Datos del usuario</h2>
        <div class="auth">
            <div id="user-logged"></div>
            <img src="<?php echo(media())?>/img/imgLogin/logotipoLogin.png" alt="img-user" id="user-img" class="card">
        </div>
        <div class="currentPeriod"></div>
    </div>
    <div class="subOptions">

        <div class="card">
            <div class="card-item">
                <label for=""> DNI </label>
                <p> <?php echo $DNI ?> </p>
            </div>
            <div class="card-item">
                <label for=""> Nombre </label>
                <p> <?php echo $nombres . " " . $apellidos ?> </p>
            </div>
            <div class="card-item">
                <label for=""> Direccion </label>
                <p> <?php echo $direccion; ?></p>
            </div>
            <div class="card-item">
                <label for=""> Correo </label>
                <p> <?php echo $correo; ?></p>
            </div>
            <div class="card-item">
                <label for=""> Telefono </label>
                <p> <?php echo $telefono; ?></p>
            </div>
            <div class="card-item">
                <label for=""> Sexo </label>
                <p> <?php echo $sexo; ?> </p>
            </div>
        </div>
        <div class="volver">
             <button class="boton-volver"><a href="../IndPersonasView"> Volver </a></button>
        </div>
    </div>
</div>

<?php
scriptsPath();
?>