<?php
// Inicializar la sesion
session_start();

// Validar si se esta ingresando directamente sin login
if (!$_SESSION) {
    header('location: login');
}

$funcionUrl = funcionesBack("Citas");
require_once($funcionUrl);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo (media()) ?>/css/dashboard.css">
    <link rel="stylesheet" href="<?php echo (media()) ?>/css/vistas.css">
    <link rel="stylesheet" href="<?php echo (media()) ?>/css/estilos_citas.css">
    <link rel="stylesheet" href="<?php echo (media()) ?>/plugins/fontawesome-free/css/all.css">
    <title>Citas</title>
</head>

<body>

    <?php
    include_once('Views/template/aside.php');
    ?>
    <!-- Espacio para colocar los formularios -->
    <div class="subBody">
        <div class="topBar">
            <h2 class="title-view">Citas</h2>
            <div class="auth">
                <div id="user-logged"></div>
                <img src="<?php echo (media()) ?>/img/imgLogin/logotipoLogin.png" alt="img-user" id="user-img" class="card">
            </div>
            <div class="currentPeriod"></div>
        </div>
        <div class="subOptions">
            <div class="card">
                <div class="citasContainer">
                    <div class="optionsContainer">
                        <div class="btn_container"><a href="citas/agendarCita" class="btnAddCita">Nueva Cita</a> </div>
                        <!--     <div class="btn_container"><a href="" class="btnVerAnteriores">Citas anteriores</a> </div>-->
                    </div>
                    <!-- 
            <form action="<?php //echo $_SERVER['REQUEST_URI'] 
                            ?>" id="formCitas">
                <label for="paciente">Paciente: </label>
                <select name="paciente" id="selectPaciente" data-show-subtext="true" data-live-search="true">
                    <option value="all">Todos</option>
                    <?php if ($resultado_pacientes->num_rows > 0) { ?>
                        <?php while ($rowP = $resultado_pacientes->fetch_assoc()) { ?>
                            <option value="<?php echo $rowP['id'] ?>"><?php echo $rowP['nombres'] . " " . $rowP['apellidos'] ?></option>
                        <?php } ?>
                    <?php } ?>
                </select>
                <label for="especialidad">Especialidad: </label>
                <select name="especialidad" id="selectEspecialidad" data-show-subtext="true" data-live-search="true">
                    <option value="all">Todos</option>
                    <?php if ($resultado_especialidades->num_rows > 0) { ?>
                        <?php while ($rowE = $resultado_especialidades->fetch_assoc()) { ?>
                            <option value="<?php echo $rowE['id'] ?>"><?php echo $rowE['descripcion'] ?></option>
                        <?php } ?>
                    <?php } ?>
                </select>
                <input type="submit" value="Buscar">
            </form>-->

                    <div class="tableCitasContainer">
                        <?php if (isset($resultado)) { ?>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th> Paciente (DNI) </th>
                                        <th> Fecha de atencion </th>
                                        <th> Medico (DNI) </th>
                                        <th> Especialidad </th>
                                        <th> Estado </th>
                                        <th> Opciones </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    //Control sobre la consulta
                                    if ($resultado->num_rows > 0) {
                                        while ($row = $resultado->fetch_assoc()) {
                                            //Recorrer la matriz asociativa
                                            echo ("<tr>");
                                            echo ("<td> <a href= 'paciente/leerPacienteF/" . $row['paciente_id'] . "'>" . $row['dniP'] . "</a></td>");
                                            echo ("<td> " . $row['fechadatencion'] . "</td>");
                                            echo ("<td> <a href= 'paciente/leerPacienteF/" . $row['medico'] . "'>" . $row['dniM'] . "</a></td>");
                                            echo ("<td> " . $row['especialidad'] . "</td>");
                                            echo ("<td> " . $row['estado'] . "</td>");
                                            echo ("<td>");
                                            echo ("<a class='btn' href='ActPersonasView/" . $row['id'] . "'> Actualizar </a>");
                                            echo ("<a onclick='return alerta();' class='btn' href='EliPersonasView/" . $row['id'] . "'> Eliminar </a>");
                                            echo ("</td>");
                                            echo ("</tr>");
                                        }
                                    }

                                    ?>
                                </tbody>

                            </table>
                        <?php } else { ?>
                            <div class="tagContainer"> <span>No se ha aplicado ningun dato</span></div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin del espacio para colocar los formularios -->

    <?php
    include_once('Views/template/scripts.php');
    ?>